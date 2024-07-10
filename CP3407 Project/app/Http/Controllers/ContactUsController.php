<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    //
    public function index()
    {
        return view("/contactUs");
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullName' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]*$/'],
            'email' => 'required|string|email|max:255|unique:contact_us',
            'message' => 'required|string',
        ]);

        ContactUs::create($request->all());

        return redirect()->route('contactUs.index')->with('success', 'Your message has been sent successfully!');
    }
}
