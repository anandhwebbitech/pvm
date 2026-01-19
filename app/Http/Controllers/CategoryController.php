<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Yajra\DataTables\DataTables;

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
      
                ->addColumn('action', function ($row) {
                    return '
                        <button 
                            class="btn btn-sm btn-primary editBtn"
                            data-id="'.$row->id.'"
                            data-name="'.$row->name.'"
                            data-status="'.$row->status.'">
                            Edit
                        </button>
                    ';
                })

                ->rawColumns(['action'])
                ->make(true);
        }
    }

    /* ===============================
        STORE CATEGORY
    ================================*/
    public function store(Request $request)
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

    /* ===============================
        UPDATE CATEGORY
    ================================*/
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name'   => 'required|string|max:255',
            'status' => 'required'
        ]);

        $category->update([
            'name'   => $request->name,
            'status' => $request->status
        ]);

        return redirect()->back()->with('success', 'Category updated successfully');
    }
}
