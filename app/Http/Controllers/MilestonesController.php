<?php

namespace App\Http\Controllers;

use App\Models\Milestone;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class MilestonesController extends Controller
{
    //
    public function index()
    {
        return view('admin.pages.milestones');
    }

    /* ===============================
        DATATABLE DATA
    ================================*/
    public function getData(Request $request)
    {
        if ($request->ajax()) {

            $categories = Milestone::latest()->get();

            return DataTables::of($categories)
      
                ->addColumn('action', function ($row) {
                    return '
                        <button 
                            class="btn btn-sm btn-primary editBtn"
                            data-id="'.$row->id.'"
                            data-year="'.$row->year.'"
                            data-description="'.$row->description.'"
                            data-status="'.$row->status.'">
                            Edit
                        </button>
                        <button 
                            class="btn btn-sm btn-danger deleteBtn"
                            data-id="'.$row->id.'">
                            Delete
                        </button>
                    ';
                })

                ->rawColumns(['action'])
                ->make(true);
        }
    }

    /* ===============================
        STORE Milestone
    ================================*/
    public function store(Request $request)
    {
        $request->validate([
            'year'        => 'required|digits:4|integer|min:2000|max:' . date('Y'),
            'description' => 'required|string|max:500',
        ]);

        Milestone::create([
            'year'        => $request->year,
            'description' => $request->description,
            'status'      => 1,
        ]);

        return redirect()->back()->with('success', 'Milestone added successfully');
    }

    /* ===============================
        UPDATE Milestone
    ================================*/
    public function update(Request $request, $id)
    {
        $milestone = Milestone::findOrFail($id);

        $request->validate([
            'year'        => 'required|digits:4|integer|min:2000|max:' . date('Y'),
            'description' => 'required|string|max:500',
            'status'      => 'required|boolean',
        ]);

        $milestone->update([
            'year'        => $request->year,
            'description' => $request->description,
            'status'      => $request->status,
        ]);

        return redirect()->back()->with('success', 'Milestone updated successfully');
    }
    public function destroy($id)
    {
        $milestone = Milestone::findOrFail($id);
        $milestone->delete();

        return response()->json([
            'success' => true,
            'message' => 'Milestone deleted successfully'
        ]);
    }
}
