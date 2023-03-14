<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $table = Report::all();
        return view('admin.reports.index', compact('table'));
    }

    // view profile
    public function profile($id)
    {
        $profile = Report::find($id);
        return view('admin.reports.profile', compact('profile'));
    }

    // create case
    public function create()
    {
        return view('admin.reports.create');
    }

    // store case
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            // personal info
            'report_id' => 'required',
            'lastname' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'student_number' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
            'contact_number' => 'required',
            // school info
            'school' => 'required',
            'program' => 'required',
            'year' => 'required|min:1|max:4',
            'section' => 'required',
            // case info
            'type_of_complain' => 'required',
            'status' => 'required',
            'place_of_incidence' => 'required',
            'summary' => 'required',
        ]);
        Report::create($request->all());
        return redirect()->back()->with(['message' => 'Case added successfully!']);
    }
}
