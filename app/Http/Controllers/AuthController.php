<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showRegisterPage()
    {
        return view("pages.register");
    }

    public function showLoginPage()
    {
        return view("pages.login");
    }

    public function register(Request $request) 
    {

        $request->validate([
            "first_name" => 'required|min:2|max:32|string',
            "last_name" => 'required|min:2|max:32|string',
            "email" => 'required|unique:users,email',
            "password" => 'required|string|min:5|max:255|confirmed'
        ]);

       User::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'password' => Hash::make($request->password)
       ]);

       return redirect("/login");  
    }

    public function login(Request $request) 
    {

        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ]);

        $credentials = $request->only("email", "password");
        if(Auth::attempt($credentials)) {
            return redirect("/")->with("status", "Successfully logged in");
        }

        return redirect("/login")->withErrors("Invalid credentials!");
    }

    public function logout() 
    {
        Session::flush();
        Auth::logout();

        return redirect("/login")->with("status", "Logged out"); 
    }
}

