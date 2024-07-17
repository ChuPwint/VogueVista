<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    //
    public function index()
    {
        $status = "logOut";
        $others = "string";
        Log::alert("not logged in", ["info" => $status]);

        if (Auth::check()) {
            $status = "logIn";
            Log::info('User is logged in', ['user' => Auth::user()]);
        } else {
            Log::info('User is not logged in', ["info" => $status]);
            $status = "logOut";
            Log::info('User is not logged in', ["info" => $status]);

        }

        Log::info('Logged In Status:', ['info' => $status]);
        Log::alert("after", ["info" => $status]);

        return view("home", [
            'status' => $status,
            'others' => $others,
        ]);
    }
}
