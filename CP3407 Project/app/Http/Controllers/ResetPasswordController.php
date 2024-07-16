<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\PasswordRule;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ResetPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Login/resetPassword");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "password" => ["required", new PasswordRule, "confirmed"],
            "password_confirmation" => "required"
        ]);
        // Log::info(session("verification_email"));
        // Log::info($request->session()->has('verification_email'));

        // dd($request->all());
        // Check if email exists in session
        if (!$request->session()->has('verification_email')) {
            // Log::info($request->session()->has('verification_email'));
            return redirect('forgotPassword')->withErrors(['error' => 'Session expired or email not sent.']);
        }

        $user = new User();
        $userUpdate = $user->updatePassword(session("verification_email"), $request->password);

        if ($userUpdate) {
            // Password update successful
            Log::info("here");
            return view("Login/finishResetPassword");
        } else {
            Log::info("failed");
            // Password update failed, redirect back with an error message
            return redirect()->back()->withErrors(['error' => 'Failed to reset password. Please try again.']);
        }
    }
}
