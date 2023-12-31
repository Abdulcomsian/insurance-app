<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repairer;

class RepairerController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Repairer::latest()->get();
            return datatables()->of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<button type="button" class="btn btn-sm btn-primary edit-btn" data-id="' . $row->id . '">Edit</button>';
                    $btn .= ' <button type="button" class="btn btn-sm btn-danger delete-btn" data-id="' . $row->id . '">Delete</button>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('repairer.index');
    }

    public function edit($id)
    {
        $repairer = Repairer::find($id);
        return view('repairer.edit', compact('repairer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'address' => 'required',
        ]);

        $repairer = Repairer::find($id);
        $repairer->name = $request->name;
        $repairer->email = $request->email;
        $repairer->contact = $request->contact;
        $repairer->phone = $request->phone;
        $repairer->mobile = $request->mobile;
        $repairer->address = $request->address;
        $repairer->save();

        return redirect()->route('repairer.index')->with('success', 'Repairer updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $repairer = Repairer::find($id);
        if ($repairer) {
            $repairer->delete();
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }
}
