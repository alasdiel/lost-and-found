<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Homepage_lost');
});

Route::get('/found', function () {
    return view('Homepage_found');
});

Route::get('/login', function () {
    return view('Log_in');
});

Route::get('/signup', function () {
    return view('Sign_up');
});

// Database
Route::get('/dbconn', function(){
    return view('database');
}
);



