<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function connectApotik(Request $request) {
        $data = [
            "email" => Auth::user()->email
        ];
        $response = Http::withToken($request->input('token'))-> post(env('NARKOBAT_API_ENDPOINT') . "connect", $data);
        $responseData = json_decode($response->body(), true);
        $statusCode = $response->status();
        $user = User::where('email', Auth::user()->email)->first();

        switch ($statusCode) {
            case 200:
                $user->id_apotik = $responseData['apotik']['id'];
                $user->token = $responseData['apotik']['token'];
                $user->save();
                $apotikResponse = Http::get(env('NARKOBAT_API_ENDPOINT'). "pharmacies/" . $user->id_apotik);
                Log::info($responseData);
                Log::info("----");
                $apotikData = json_decode($apotikResponse->body(), true);
                Log::info($apotikData);

                $apotikName = $apotikData['data']['nama apotik'];
                $apotikToken = Auth::user()->token;
    
                return view('profile-applied', compact('apotikName', 'apotikToken'));
                break;
                case 400:
                    $error = "Bad Request. Please check your input.";
                    return redirect()->route('dashboard')->with('error', $error);
                case 401:
                    $error = "Unauthorized. Please check your credentials.";
                    return redirect()->route('dashboard')->with('error', $error);
                default:
                    $error = "An unexpected error occurred. Please try again later.";
                    return redirect()->route('dashboard')->with('error', $error);

        }
    }
}
