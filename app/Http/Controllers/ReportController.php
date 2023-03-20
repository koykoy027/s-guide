<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $table = Report::where('school_code', $user->school_code)->get();
        // $table = Report::all();
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
            'school_code' => 'required',
            'report_id' => 'required',
            'lastname' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'student_number' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
            'contact_number' => 'required',
            // school info

            'program' => 'required',
            'year' => 'required|min:1|max:4',
            'section' => 'required',
            // case info
            'type_of_complain' => 'required',
            'status' => 'required',
            'place_of_incidence' => 'required',
            'summary' => 'required',
            // online report
            // 'type' => 'required',
            // 'complainant' => 'required',
            // 'name_of_complainant' => 'required',
        ]);
        Report::create($request->all());
        return redirect()->back()->with(['message' => 'Report added successfully!']);
    }
}
