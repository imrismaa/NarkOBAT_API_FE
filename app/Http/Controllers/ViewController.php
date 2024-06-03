<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ViewController extends Controller
{
    private $apiBaseUrl;

    public function __construct()
    {
        $this -> apiBaseUrl = config('NARKOBAT_API_ENDPOINT');

    }

    // public function register()
    // {
    //     return view('register');
    // }

    public function apotik()
    {
        $response = Http::get( env('NARKOBAT_API_ENDPOINT') . "pharmacies");
        return view('apotik', ['data' => $response['data']]);
    }

    // public function login()
    // {
    //     return view('login');
    // }

    public function obat()
    {   
        $response = Http::get( env('NARKOBAT_API_ENDPOINT') . "drugs");
        return view('obat', ['data' => $response['data']]);
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
