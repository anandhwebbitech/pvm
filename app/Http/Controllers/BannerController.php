<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class BannerController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'title'  => 'required|string|max:255',
            'image'  => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status' => 'required|in:0,1',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/banners'), $imageName);
        }

        Banner::create([
            'title'  => $request->title,
            'image'  => $imageName,
            'status' => $request->status,
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Banner added successfully!'
        ]);
    }
    public function getBannerData(Request $request)
{
    if ($request->ajax()) {

        $data = Banner::latest()->get();

        return DataTables::of($data)

            ->addIndexColumn()

            ->addColumn('image', function ($row) {
                $url = asset('public/uploads/banners/' . $row->image);
                return '<img src="'.$url.'" width="70" height="50" style="object-fit:cover;border-radius:5px;">';
            })

            ->addColumn('status', function ($row) {
                return $row->status == 1
                    ? '<span class="badge bg-success">Active</span>'
                    : '<span class="badge bg-danger">Inactive</span>';
            })

            ->addColumn('action', function ($row) {

                return '
                    <button class="btn btn-sm btn-primary editBtn"
                        data-id="'.$row->id.'"
                        data-title="'.$row->title.'"
                        data-image="'.asset('public/uploads/banners/'.$row->image).'"
                        data-status="'.$row->status.'">
                        <i class="fa fa-edit"></i>
                    </button>

                    <button class="btn btn-sm btn-danger deleteBtn"
                        data-id="'.$row->id.'">
                        <i class="fa fa-trash"></i>
                    </button>
                ';
            })

            ->rawColumns(['image', 'status', 'action'])
            ->make(true);
    }
}
public function update(Request $request, $id)
{
    $banner = Banner::findOrFail($id);

    $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'status' => 'required|in:0,1',
    ]);

    if ($request->hasFile('image')) {

        // Delete old image
        if ($banner->image && file_exists(public_path('uploads/banners/'.$banner->image))) {
            unlink(public_path('uploads/banners/'.$banner->image));
        }

        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads/banners'), $imageName);

        $banner->image = $imageName;
    }

    $banner->title = $request->title;
    $banner->status = $request->status;
    $banner->save();

    return response()->json([
        'status' => true,
        'message' => 'Banner updated successfully!'
    ]);
}
public function destroy($id)
{
    $banner = Banner::find($id);

    if (!$banner) {
        return response()->json([
            'status' => false,
            'message' => 'Banner not found!'
        ]);
    }

    // Delete image file
    if ($banner->image && file_exists(public_path('uploads/banners/' . $banner->image))) {
        unlink(public_path('uploads/banners/' . $banner->image));
    }

    $banner->delete();

    return response()->json([
        'status' => true,
        'message' => 'Banner deleted successfully!'
    ]);
}
}
