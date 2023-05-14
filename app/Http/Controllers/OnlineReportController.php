<?php

namespace App\Http\Controllers;

use App\Models\OnlineReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OnlineReportController extends Controller
{
    //

    public function index()
    {
        $user = Auth::user();
        $table = OnlineReport::where('school_code', $user->school_code)->get();
        // $table = OnlineReport::all();
        return view('counselor.online.index', compact('table'));
    }

    public function create()
    {
        return view('homepage.online-reporting.create');
    }

    public function profile($id)
    {
        $profile = OnlineReport::find($id);
        return view('counselor.online.profile', compact('profile'));
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
            'school_code' => ['required', 'exists:schools,id'],
            // 'school_code' => 'required exists:school id',
            'program' => 'required',
            'year' => 'required',
            'section' => 'required',

            // case information
            'type_of_complain' => 'required',
            'place_of_incidence' => 'required',
            'summary' => 'required',
            'videos' => 'mimes:mp4|max:50000'
        ]);
            if ($request->hasFile('videos')) {
                    $videoName = time().'.'.$request->videos->getClientOriginalExtension();
                    $request->videos->move(public_path('videos'), $videoName);
                    $requestData = $request->all();
                    $requestData['videos'] = $videoName;
                    OnlineReport::create($requestData);
                } else {
                    OnlineReport::create($request->except('videos'));
                }

            // OnlineReport::create($request->all());
            return redirect()->back()->with(['message' => 'Thank you!, Your reports has been sent.']);
    }
}
