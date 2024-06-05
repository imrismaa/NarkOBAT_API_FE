<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password
        ];
    
        try {
            $response = Http::post(env('NARKOBAT_API_ENDPOINT') . 'register', $data);
            Log::info('API Response: ', ['body' => $response->body(), 'status' => $response->status()]);
            
            if ($response->failed()) {
                Log::error('API request failed', ['response' => $response->body()]);
                return response()->json(['message' => 'API registration failed'], 500);
            }
        } catch (\Exception $e) {
            Log::error('API request error', ['error' => $e->getMessage()]);
            return response()->json(['message' => 'API registration error'], 500);
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('apotik', absolute: false));
    }
}
