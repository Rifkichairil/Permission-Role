<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    //
    public function index()
    {
        // $role = Role::findById(1);
        // dd($role);
        return view('dashboard');
    }
}
