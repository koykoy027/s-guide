<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Cast\String_;

class ReportController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $table = Report::where('school_code', $user->school_code)->get();
        // $table = Report::all();
        return view('counselor.reports.index', compact('table'));
    }

    // view profile
    public function profile($id)
    {
        $profile = Report::find($id);
        return view('counselor.reports.profile', compact('profile'));
    }

    // create case
    public function create()
    {
        return view('counselor.reports.create');
    }

    // store case
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'school_code' => 'required',
            'report_id' => 'required',
            'lastname' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'student_number' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
            'contact_number' => 'required',
            'program' => 'required',
            'year' => 'required',
            'section' => 'required',
            'type_of_complain' => 'required',
            'status' => 'required',
            'place_of_incidence' => 'required',
            'summary' => 'required',
        ]);
        Report::create($request->all());
        return redirect()->back()->with(['message' => 'Report added successfully!']);
    }
}
