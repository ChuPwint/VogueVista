<?php

namespace App\Http\Controllers;

use App\Models\User;

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

    public function updateProfile(Request $request){
        // dd($request);
        $user = new User();
        $user->updateUserInfo($request, Auth::id());
        return redirect()->route('userProfile');
    }

    public function updateImage(Request $request)
{
    $request->validate([
        'profile_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $user = Auth::user();

    if ($request->hasFile('profile_image')) {
        // Delete old profile image if exists
        if ($user->profile && Storage::exists($user->profile)) {
            Storage::delete($user->profile);
        }

        // Store the new profile image
        $path = $request->file('profile_image')->store('profile_images', 'public');

        // Update the user's profile image path in the database
        $user->profile = $path;
        $user->save();

        return response()->json(['success' => true, 'image_url' => Storage::url($path)]);
    }

    return response()->json(['success' => false, 'message' => 'No image uploaded']);
}

public function removeImage()
{
    $user = Auth::user();

    // Delete the profile image if exists
    if ($user->profile && Storage::exists($user->profile)) {
        Storage::delete($user->profile);
    }

    // Update the user's profile image path in the database
    $user->profile = null;
    $user->save();

    return response()->json(['success' => true]);
}


}
