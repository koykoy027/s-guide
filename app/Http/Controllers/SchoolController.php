<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

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
        return view('admin.reports.create', compact('table'));
    }

    
}
