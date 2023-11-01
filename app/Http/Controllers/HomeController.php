<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view("welcome");
    }

    public function profile(Request $request)
    {
        $user = new User();
        return view('profile')->with('user', $user);
    }
}
