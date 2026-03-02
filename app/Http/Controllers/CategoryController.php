<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    //
    /* ===============================
        CATEGORY LIST PAGE
    ================================*/
    public function index()
    {
        return view('admin.pages.categories');
    }

    /* ===============================
        DATATABLE DATA
    ================================*/
    public function getData(Request $request)
    {
        if ($request->ajax()) {

            $categories = Category::latest()->get();

            return DataTables::of($categories)

                ->addColumn('image', function ($row) {
                    if ($row->image) {
                        return '<img src="' . asset('public/uploads/categories/' . $row->image) . '" width="60" height="60" style="object-fit:cover;">';
                    } else {
                        return 'No Image';
                    }
                })
                ->addColumn('action', function ($row) {
                    return '
                        <button 
                            class="btn btn-sm btn-primary editBtn"
                            data-id="' . $row->id . '"
                            data-name="' . $row->name . '"
                            data-status="' . $row->status . '"
                            data-image="' . $row->image . '">
                            Edit
                        </button>
                        <button 
                            class="btn btn-sm btn-danger cat_deleteBtn"
                            data-id="' . $row->id . '">
                            Delete
                        </button>
                    ';
                })

                ->rawColumns(['image', 'action'])
                ->make(true);
        }
    }

    /* ===============================
        STORE CATEGORY
    ================================*/
    public function store1(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
        ]);

        Category::create([
            'name'   => $request->name,
            'status' => 1
        ]);

        return redirect()->back()->with('success', 'Category added successfully');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/categories'), $imageName);
        }

        Category::create([
            'name'   => $request->name,
            'slug'   => Str::slug($request->name),
            'image'  => $imageName,
            'status' => 1
        ]);

        return redirect()->back()->with('success', 'Category added successfully');
    }

    /* ===============================
        UPDATE CATEGORY
    ================================*/
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name'   => 'required|string|max:255',
            'status' => 'required|in:0,1',
            'image'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imageName = $category->image;

        // If new image uploaded
        if ($request->hasFile('image')) {

            // Delete old image
            if ($category->image && file_exists(public_path('uploads/categories/' . $category->image))) {
                unlink(public_path('uploads/categories/' . $category->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/categories'), $imageName);
        }

        $category->update([
            'name'   => $request->name,
            'slug'   => Str::slug($request->name),
            'image'  => $imageName,
            'status' => $request->status
        ]);

        return redirect()->back()->with('success', 'Category updated successfully');
    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return response()->json([
            'success' => true,
            'message' => 'Category deleted successfully'
        ]);
    }
}
