<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function apotik()
    {
        return view('apotik');
    }

    public function login()
    {
        return view('login');
    }

    public function obat()
    {
        return view('obat');
    }
    public function profile()
    {
        return view('profile');
    }
    public function profileApplied()
    {
        return view('profile-applied');
    }
}
