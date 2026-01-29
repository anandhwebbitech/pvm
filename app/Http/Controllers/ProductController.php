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

                ->addColumn('image', function ($row) {
                    if ($row->image) {
                        return '<img src="' . asset($row->image) . '" width="60">';
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

            // Technical specs
            'specs.work_table_size' => 'nullable|string',
            'specs.x_axis' => 'nullable|string',
            'specs.y_axis' => 'nullable|string',
            'specs.z_axis' => 'nullable|string',
            'specs.spindle_speed' => 'nullable|string',
            'specs.spindle_power' => 'nullable|string',
            'specs.tool_capacity' => 'nullable|string',
            'specs.positioning_accuracy' => 'nullable|string',
            'specs.repeatability' => 'nullable|string',
            'specs.max_load_capacity' => 'nullable|string',
            'specs.rapid_traverse' => 'nullable|string',
            'specs.machine_weight' => 'nullable|string',
        ]);

        // ✅ Image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('public/uploads/products'), $imageName);
            $imagePath = 'public/uploads/products/' . $imageName;
        }

        // ✅ Create product (COLUMN BASED)
        Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'image' => $imagePath,
            'status' => $request->status,
            'description' => $request->description,

            // Technical specifications
            'work_table_size' => $request->specs['work_table_size'] ?? null,
            'x_axis' => $request->specs['x_axis'] ?? null,
            'y_axis' => $request->specs['y_axis'] ?? null,
            'z_axis' => $request->specs['z_axis'] ?? null,
            'spindle_speed' => $request->specs['spindle_speed'] ?? null,
            'spindle_power' => $request->specs['spindle_power'] ?? null,
            'tool_capacity' => $request->specs['tool_capacity'] ?? null,
            'positioning_accuracy' => $request->specs['positioning_accuracy'] ?? null,
            'repeatability' => $request->specs['repeatability'] ?? null,
            'max_load_capacity' => $request->specs['max_load_capacity'] ?? null,
            'rapid_traverse' => $request->specs['rapid_traverse'] ?? null,
            'machine_weight' => $request->specs['machine_weight'] ?? null,
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

        // ✅ Validation (same as store)
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required',
            'price' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status' => 'required|boolean',
            'description' => 'nullable|string',

            // Technical specs
            'specs.work_table_size' => 'nullable|string',
            'specs.x_axis' => 'nullable|string',
            'specs.y_axis' => 'nullable|string',
            'specs.z_axis' => 'nullable|string',
            'specs.spindle_speed' => 'nullable|string',
            'specs.spindle_power' => 'nullable|string',
            'specs.tool_capacity' => 'nullable|string',
            'specs.positioning_accuracy' => 'nullable|string',
            'specs.repeatability' => 'nullable|string',
            'specs.max_load_capacity' => 'nullable|string',
            'specs.rapid_traverse' => 'nullable|string',
            'specs.machine_weight' => 'nullable|string',
        ]);

        // ✅ IMAGE UPDATE (delete old → upload new)
        if ($request->hasFile('image')) {

            // Delete old image
            if ($product->image && file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }

            // Upload new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('public/uploads/products'), $imageName);
            $product->image = 'public/uploads/products/' . $imageName;
        }

        // ✅ Update product fields
        $product->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'status' => $request->status,
            'description' => $request->description,

            // Technical specifications
            'work_table_size' => $request->specs['work_table_size'] ?? null,
            'x_axis' => $request->specs['x_axis'] ?? null,
            'y_axis' => $request->specs['y_axis'] ?? null,
            'z_axis' => $request->specs['z_axis'] ?? null,
            'spindle_speed' => $request->specs['spindle_speed'] ?? null,
            'spindle_power' => $request->specs['spindle_power'] ?? null,
            'tool_capacity' => $request->specs['tool_capacity'] ?? null,
            'positioning_accuracy' => $request->specs['positioning_accuracy'] ?? null,
            'repeatability' => $request->specs['repeatability'] ?? null,
            'max_load_capacity' => $request->specs['max_load_capacity'] ?? null,
            'rapid_traverse' => $request->specs['rapid_traverse'] ?? null,
            'machine_weight' => $request->specs['machine_weight'] ?? null,
        ]);

        return redirect()
            ->route('admin.products')
            ->with('success', 'Product updated successfully!');
    }

    /* ================= DELETE ================= */
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
