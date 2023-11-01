<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        return view("register");
    }

    public function registerPost(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with("success", "Register successfully");
    }

    public function login(Request $request)
    {
        return view("login");
    }
    public function loginPost(Request $request)
    {
        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];


        if (Auth::attempt($credentials)) {
            return redirect('welcome')->with('success', 'Login Sucessful');
        }
        return back()->with('error', 'Email or Password is wrong');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }

    
}
