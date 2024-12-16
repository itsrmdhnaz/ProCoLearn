<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request)
    {
        try {
            $getUser = Socialite::driver('google')->stateless()->user();
            $user = User::where('email', $getUser->email)->first();

            if (!$user) {
                $randomPassword = Str::random(12);

                if ($getUser->avatar) {
                    $avatarContents = file_get_contents($getUser->avatar);
                    $avatarPath = 'avatars/' . basename($getUser->avatar);
                    Storage::disk('public')->put($avatarPath, $avatarContents);
                } else {
                    $avatarPath = null;
                }

                $user = User::create([
                    'name' => $getUser->name,
                    'email' => $getUser->email,
                    'password' => Hash::make($randomPassword),
                    'avatar' => $avatarPath,
                    'is_online' => false,
                ]);
            }

            Auth::login($user);

            $request->session()->regenerate();
            $request->session()->put('user', $user);
            return redirect()->intended('/');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }
}
