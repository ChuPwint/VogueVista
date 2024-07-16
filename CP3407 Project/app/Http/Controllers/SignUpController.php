<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupValidation;
use App\Models\User;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Login/signup");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SignupValidation $request)
    {
        $userClass = new User();
        if ($userClass->checkUser($request->email) == null) {
            $userClass->createUser($request);
            return view("Login/finishSignUp");
        } else {
            return redirect()->back()->withErrors(['email' => 'The email address is already registered.'])->withInput();
        }
    }

}
