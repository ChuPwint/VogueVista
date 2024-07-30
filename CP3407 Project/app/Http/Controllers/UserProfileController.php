<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index()
    {
        $status = Auth::check() ? "logIn" : "logOut";

        if (Auth::check()) {
            Log::info('User is logged in', ['user' => Auth::user()]);
        } else {
            Log::info('User is not logged in', ['info' => $status]);
        }

        Log::info('Logged In Status:', ['info' => $status]);

        return view('userProfile', [
            'status' => $status,
        ]);
    }

    public function updateProfile(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'address' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:20',
        'postcode' => 'nullable|string|max:10',
    ]);

    $user = Auth::user();

    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->address = $request->input('address');
    $user->phone = $request->input('phone');
    $user->postcode = $request->input('postcode');

    $user->save();

    return redirect()->back()->with('status', 'Profile updated successfully!');
}


    public function showProfile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function updateImage(Request $request)
{
    $request->validate([
        'profile_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    try {
        $image = $request->file('profile_image');
        $path = $image->store('profile_images', 'public');

        // Update user's profile picture path
        $user = Auth::user();
        $user->profile_picture = $path;
        $user->save();

        return response()->json([
            'success' => true,
            'image_url' => Storage::url($path),
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'An error occurred while updating the profile image. Please try again.',
        ], 500);
    }
}


    public function removeProfileImage()
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not authenticated'], 401);
        }

        // Delete the old profile image if it exists
        if ($user->profile_picture && Storage::exists($user->profile_picture)) {
            Storage::delete($user->profile_picture);
        }

        // Set the profile picture to null
        $user->profile_picture = null;
        $user->save();

        return response()->json(['success' => true]);
    }
}
