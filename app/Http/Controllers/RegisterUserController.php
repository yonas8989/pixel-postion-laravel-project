<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("auth.register");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate the request and pass directly to create  
        $userAttributes = $request->validate([
            "name" => ["required", "string"],
            "email" => ["required", "email", "unique:users,email"],
            "password" => ["required", 'confirmed', Password::min(3)],

        ]);
        $employerAttributes = $request->validate([
            "employer" => ["required"],
            "logo" => ["required", File::types(["png", "jpg", 'webp'])],
        ]);

        // then create the user 
        $user = User::create($userAttributes);
        // store logo of employer in file system
        $logoPath = $request->logo->store('logos');

        // then also create the employer 
        $user->employer()->create(
            ["name" => $employerAttributes['employer'], 'logo' => $logoPath]

        );
        // then log in the user
        Auth::login($user);
        // then redirect 
        return redirect('/');
    }
}
