<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            # code...
            return redirect()->route('dashboard/tests');
        }
        return redirect()->route('core.login');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('core.login');
    }
}
