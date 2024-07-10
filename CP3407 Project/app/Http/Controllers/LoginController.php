<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;
use Stringable;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Login/login");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication successful
            $request->session()->regenerate(); // Regenerate session ID for security
            return redirect()->intended('/'); // Redirect to intended route
        }

        // Authentication failed
        return back()->withErrors(['email' => 'Invalid email or password'])->withInput($request->except('password'));
    }

    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $user = new User();
            $userData = $user->checkUser($googleUser->getEmail());

            if ($userData) {
                Auth::login($userData);
            } else {
                $randomPw = $this->generateRandomString(16);
                $userData = $user->createGoogleUser($googleUser->getName(), $googleUser->getEmail(), $randomPw);
                Auth::login($userData);
                // dd($userData);
            }
            return redirect()->intended('/');
        } catch (\Exception $e) {
            return redirect('/login')->withErrors(['error' => 'Unable to login using Google. Please try again.']);
        }
    }

    /**
     * Obtain the random string
     *
     * @return string
     */
    public function generateRandomString($length = 16)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
