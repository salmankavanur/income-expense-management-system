<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ProfileController extends Controller
{
    /**
     * Show the profile view.
     */
    public function show()
    {
        return view('profile');  // returns profile view (resources/views/profile.blade.php)
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
        ]);

        // Update the user with the validated data
        $user->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
        ]);

        // Update password if provided
        if (!empty($validatedData['password'])) {
            $user->update([
                'password' => Hash::make($validatedData['password']),
            ]);
        }

        // Redirect back with success message
        return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    }
}
