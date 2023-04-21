<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QRController extends Controller
{
    public function index(Request $request)
    {

        return view('auth.QrLogin');
    }

    // this Function Allow to User log or no log that do by Scanner of QrCode
    public function checkUser(Request $request)
    {
        $result = 0;
        if ($request->data) {
            $user = User::where('employee_number', $request->data)->first();
            if ($user) {
                Auth::login($user);
                $result = 1;
            } else {
                $result = 0;
            }
        }
        return $result;
    }
}
