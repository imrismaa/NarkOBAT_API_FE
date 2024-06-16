<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    // Make HTTP request to fetch pharmacies data
    $response = Http::get(env('NARKOBAT_API_ENDPOINT') . "pharmacies");

    if ($response->successful()) {
        $responseData = $response->json(); // Directly decode JSON response

        $apotikData = [];

        foreach ($responseData['data'] as $apotik) {
            $apotikId = $apotik['id'];

            // Make HTTP request to fetch stock data for each pharmacy
            $obatResponse = Http::get(env("NARKOBAT_API_ENDPOINT") . "stock/apotik/" . $apotikId);
            $apotikData[$apotikId] = "";

            foreach ($obatResponse['data'] as $obat) {
                if ($obat['stok'] != 0 ) {
                    $apotikData[$apotikId] = $apotikData[$apotikId] . $obat['nama obat']['nama obat'] . ", ";
                }
            }
            $apotikData[$apotikId] =  substr($apotikData[$apotikId], 0, strlen($apotikData[$apotikId]) - 2);
        }
        Log::info($apotikData);
        return view('apotik', ['data' => $responseData['data'], 'apotikData' => $apotikData]);
        }
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

    public function stok()
    {   
        $response = Http::get( env('NARKOBAT_API_ENDPOINT') . "stock/apotik/" . Auth::user()->id_apotik);
        return view('stok', ['data' => $response['data']]);
    }
    
    public function profile()
    {
        if(Auth::user()->token != null){
            return $this->profileApplied();
        }
        return view('profile');
    }
    public function profileApplied()
    {
        $apotikResponse = Http::get(env('NARKOBAT_API_ENDPOINT'). "pharmacies/" . Auth::user()->id_apotik); 
        $apotikData = json_decode($apotikResponse->body(), true);
        $apotikName = $apotikData['data']['nama apotik'];
        $apotikToken = Auth::user()->token;
        return view('profile-applied', compact('apotikName', 'apotikToken'));        
    }
}
