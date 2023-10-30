<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function registrationMethod()
    {
        return DB::table("users")->insert([
            "name"=> "",
        ]);
    }
}
