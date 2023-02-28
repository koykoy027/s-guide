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
}
