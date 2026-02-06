<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\File;



class ProductController extends Controller
{
    //
    public function index()
    {
        $categories = Category::where('status', 1)->get();
        return view('admin.pages.product', compact('categories'));
    }

    /* ================= DATATABLE ================= */
    public function getData(Request $request)
    {
        if ($request->ajax()) {

            $products = Product::with('category')->latest()->get();

            return DataTables::of($products)
                ->addIndexColumn()

                ->addColumn('image', function ($row) {
                    if ($row->image) {
                        return '<img src="' . asset('public/uploads/products/' . $row->image) . '" width="60">';
                    }
                    return '-';
                })

                ->editColumn('status', function ($row) {
                    return $row->status
                        ? '<span class="badge bg-success">Active</span>'
                        : '<span class="badge bg-danger">Inactive</span>';
                })

                ->addColumn('action', function ($row) {
                    return '
                        <button class="btn btn-sm btn-primary editBtn"
                            data-id="' . $row->id . '"
                            data-name="' . $row->name . '"
                            data-price="' . $row->price . '"
                            data-category="' . $row->category_id . '"
                            data-status="' . $row->status . '">
                            Edit
                        </button>

                        <button class="btn btn-sm btn-danger deleteBtn" data-id="' . $row->id . '">
                           Delete
                        </button>
                    ';
                })

                ->rawColumns(['image', 'status', 'action'])
                ->make(true);
        }
    }

    /* ================= STORE ================= */
    public function store(Request $request)
    {
        // ✅ Validation (matching columns)
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required',
            'price' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status' => 'required|boolean',
            'description' => 'nullable|string',

            // ✅ Dynamic specs
            'specs'               => 'nullable|array',
            'specs.*.label'       => 'required_with:specs|string|max:255',
            'specs.*.value'       => 'required_with:specs|string|max:255',
            'specs.*.unit'        => 'nullable|string|max:50',
        ]);

        // ✅ Image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/products'), $imageName);
            $imagePath = $imageName;
        }
        // ✅ Clean empty spec rows (IMPORTANT)
        $specs = collect($request->specs)
            ->filter(fn($s) => !empty($s['label']) && !empty($s['value']))
            ->values()
            ->toArray();
        $video_url = $request->video_link;
        $video_id  = null;

        if ($video_url) {

            // Match YouTube video ID
            preg_match(
                '/(?:youtube\.com\/(?:watch\?v=|embed\/)|youtu\.be\/)([A-Za-z0-9_-]{11})/',
                $video_url,
                $matches
            );

            if (!empty($matches[1])) {
                $video_id = $matches[1];
                $video_url = 'https://www.youtube.com/embed/' . $video_id;
            } else {
                $video_url = null; // invalid YouTube URL
            }
        }

        // ✅ Create product (COLUMN BASED)
        Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'image' => $imagePath,
            'status' => $request->status,
            'description' => $request->description,
            'specifications'  => json_encode($specs),
            'video_url'  => $video_url,
        ]);

        return redirect()
            ->route('admin.products')
            ->with('success', 'Product added successfully!');
    }
    /* ===================== EDIT (AJAX) ===================== */
    public function edit($id)
    {
        return Product::findOrFail($id);
    }

    /* ===================== UPDATE ===================== */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required',
            'price' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status' => 'required|boolean',
            'description' => 'nullable|string',

            'specs'               => 'nullable|array',
            'specs.*.label'       => 'required_with:specs|string|max:255',
            'specs.*.value'       => 'required_with:specs|string|max:255',
            'specs.*.unit'        => 'nullable|string|max:50',
        ]);

        /* IMAGE UPDATE */
        if ($request->hasFile('image')) {
            if ($product->image && file_exists(public_path('uploads/products/' . $product->image))) {
                unlink(public_path('uploads/products/' . $product->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/products'), $imageName);
            $product->image = $imageName;
        }

        /* CLEAN SPECS */
        $specs = collect($request->specs)
            ->filter(fn ($s) => !empty($s['label']) && !empty($s['value']))
            ->values()
            ->toArray();

        /* VIDEO */
        $video_url = null;
        if ($request->edit_video_link) {
            preg_match(
                '/(?:youtube\.com\/(?:watch\?v=|embed\/)|youtu\.be\/)([A-Za-z0-9_-]{11})/',
                $request->edit_video_link,
                $matches
            );

            if (!empty($matches[1])) {
                $video_url = 'https://www.youtube.com/embed/' . $matches[1];
            }
        }

        $product->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'status' => $request->status,
            'description' => $request->description,
            'specifications' => $specs, // ✅ FIXED
            'video_url' => $video_url,
        ]);

        return redirect()->route('admin.products')
            ->with('success', 'Product updated successfully!');
    }


    /* ================= DELETE =================  */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Delete image if exists
        if ($product->image && File::exists(public_path($product->image))) {
            File::delete(public_path($product->image));
        }

        $product->delete();

        return response()->json([
            'success' => true,
            'message' => 'Product deleted successfully'
        ]);
    }
}
