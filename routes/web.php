<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// for login 
Route::get('/login', function(){
    return view('login');
});

// for profile
Route::get('/profile', function(){
    return view('profile');
});

// for register
Route::get('register', function(){
    return view('register');
});

// for edit profile
Route::get('edit-profile', function(){
    return view('edit-profile');
});

// for signout
Route::get('/signout', function(){
    return view('login');
});