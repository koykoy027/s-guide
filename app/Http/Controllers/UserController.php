<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class UserController extends Controller
{

    public function index()
    {
        $data = User::all();
        return view('admin.user-management.index', compact('data'));
    }


    public function showInCreateRecords()
    {
        $data = User::all();
        return view('admin.reports.create', compact('data'));
    }

    // connect users table into create reports
    public function usersToReports(Request $request)
    {
        $school = School::findOrFail($request->school_id);
        $school->users()->create([
            'name' => $request->name,
            'year_level' => $request->year_level,
            // 'year_level' => Str::slug($request->slug),
            // 'slug' => $request->slug,
        ]);

        return redirect()->back()->with('message', 'success');
    }

    // connect users table into schools
    public function store(Request $request)
    {
        $school = School::findOrFail($request->school_id);
        $school->users()->create([
            'name' => $request->name,
            'year_level' => $request->year_level,
            // 'year_level' => Str::slug($request->slug),
            // 'slug' => $request->slug,
        ]);

        return redirect()->back()->with('message', 'success');
    }


    // connect reports table into users
    public function storeReports(Request $request)
    {
        $user = User::findOrFail($request->report_id);
        $user->usersReport()->create([
            'fullname' => $request->fullname,
            'gender' => $request->gender,
            'birthday' => $request->birthday,
            'contact_number' => $request->contact_number,
            'student_number' => $request->student_number,
            'school' => $request->school,
            'program' => $request->program,
            'year' => $request->year,
            'section' => $request->section,
            'type_of_complain' => $request->type_of_complain,
            'status' => $request->status,
            'place_of_incidence' => $request->place_of_incidence,
            'summary' => $request->summary,

        ]);


        return redirect()->back()->with('message', 'success');
    }
}
