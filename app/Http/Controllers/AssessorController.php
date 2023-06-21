<?php

namespace App\Http\Controllers;

use App\addAssessor;
use Illuminate\Http\Request;
use DataTables;

class AssessorController extends Controller
{
    public function create()
    {
        return view('assessors.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'assessor' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'mobile_number' => 'required',
            'inspection_date' => 'required|date',
            'assessment_date' => 'required|date',
            'address' => 'required',
        ]);

        addAssessor::create($validatedData);

        return redirect()->route('assessors.index')->with('success', 'Assessor created successfully.');
    }

    public function index()
    {
        return view('assessors.index');
    }

    public function data(Request $request)
    {
        if ($request->ajax()) {
            $data = addAssessor::select(['id', 'assessor', 'email', 'phone_number', 'mobile_number', 'inspection_date', 'assessment_date', 'address'])
                ->latest()
                ->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . route("assessors.index", $row->id) . '" class="btn btn-sm btn-clean btn-icon" title="View details"><i class="la la-eye"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('assessors.index');
    }
}
