<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SchoolController extends Controller
{
    public function showInRegister()
    {
        $table = School::all();
        return view('auth.register', compact('table'));
    }

    public function showInCreateRecord()
    {
        $table = School::all();
        return view('counselor.reports.create', compact('table'));
    }
    

    public function getData(Request $request)
    {
        $request->validate([
            'id' => ['required', 'exists:schools,id'],
        ]);
        $data = DB::table('schools')
            ->where('id', '=', request('id'))
            ->get();
        // return view('Homepage.online-reporting.create', compact('data'));

        return redirect()->back()->with(compact('data'));
    }
}
