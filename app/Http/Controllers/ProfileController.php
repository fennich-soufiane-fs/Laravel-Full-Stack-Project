<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
class ProfileController extends Controller
{
    //
    public function index() {
        $profiles = Profile::orderBy('created_at', 'desc')->paginate(5);
        return view('profiles', compact('profiles'));
    }

    public function show(Request $request) {
        $id = (int)$request->id;
        $profile = Profile::findOrFail($id);

        return view('profile', compact('profile'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $bio = $request->bio;

        Profile::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'bio' => $bio,
        ]);

        return redirect()->route('profiles.index')->with('success', 'Profile created!');
    }
}
