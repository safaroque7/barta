<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
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

// // for login 
// Route::get('/login', function () {
//     return view('login');
// });

// // for profile
// Route::get('/profile', function () {
//     return view('profile');
// });

// // for register
// Route::get('register', function () {
//     return view('register');
// });

// // for edit profile
// Route::get('edit-profile', function () {
//     return view('edit-profile');
// });

// // for signout
// Route::get('/signout', function () {
//     return view('login');
// });


// Route::post('/registrationUrl', [userController::class, 'registrationMethod'])->name('registrationRoute');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');

Route::get('welcome', [HomeController::class, 'index']);
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
