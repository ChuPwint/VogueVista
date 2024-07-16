<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPasswordMail;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class forgotPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Login/forgotPassword");
    }

    /**
     * Send verification code to email.
     */
    public function sendVerificationCode(Request $request)
    {

        $user = new User();
        $userData = $user->checkUser($request->email);

        if ($userData == null) {
            return response()->json(['error' => 'User not found.'], 200);
        } else {
            // dd($userData);
            $code = $this->generateCode(4);
            // Store the code and email in the session
            session(['verification_code' => $code, 'verification_email' => $request->email]);

            $userName = $userData->name;
            Mail::to($userData->email)->send(new ForgotPasswordMail($code, $userName));

            return response()->json(['message' => 'Email sent successfully.']);
            // return redirect("/resetPassword");
        }
    }

    /**
     * Create a verification code
     */
    public function generateCode($length)
    {
        $character = "0123456789";
        $randomString = "";

        for ($i = 0; $i < $length; $i++) {
            $index = rand(0, strlen($character) - 1);
            $randomString .= $character[$index];
        }

        return $randomString;
    }

    /**
     * Verify code
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'code' => 'required',
        ]);
        $userCode = $request->code;
        $code = session("verification_code");

        if ($userCode == $code) {
            return redirect("/resetPassword");
        } else {
            return redirect()->back()->withErrors(
                ['code' => 'Invalid verification code.']
            );
        }
    }
}
