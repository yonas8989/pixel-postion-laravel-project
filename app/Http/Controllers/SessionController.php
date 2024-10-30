<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationData;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function index(){
        
    }
    public function create()
    {
        return view("auth.login");
    }
    public function store(Request $request)
    {
        // validate the request 
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // validation fails bring message 
        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages(
                ["email" => "you credentials do not match"]
            );
        }
        request()->session()->regenerate();
        return redirect("/");
    }


    public function destroy()
    {
        Auth::logout();
        return redirect('/')->with('success', 'You have been logged out.');
    }
}
