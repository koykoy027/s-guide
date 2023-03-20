<?php

namespace App\Http\Controllers;

use App\Models\OnlineReport;
use Illuminate\Http\Request;

class OnlineReportController extends Controller
{
    //

    public function index()
    {
        $table = OnlineReport::all();
        return view('admin.online.index', compact('table'));
    }

    public function create()
    {
        return view('HomePage.online-reporting.create');
    }
    // store case
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            // personal info
            'complainant' => 'required',
            'name_of_complainant' => 'required',
            // personal information
            'lastname' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
            'contact_number' => 'required',
            'email' => 'required',

            // school information
            'student_number' => 'required',
            'school' => 'required',
            'program' => 'required',
            'year' => 'required',
            'section' => 'required',

            // case information
            'type_of_complain' => 'required',
            'place_of_incidence' => 'required',
            'summary' => 'required',
        ]);
        OnlineReport::create($request->all());
        return redirect()->back()->with(['message' => 'Thank you!, Your reports has been sent.']);
    }
}
