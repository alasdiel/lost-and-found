<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeRoute;
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

Route::get('/', [HomeRoute::class, 'showHome'])->name('show.home');

Route::get('/signup', [AuthController::class, 'showSign_up'])->name('show.signup');

Route::get('/login', [AuthController::class, 'showLog_in'])->name('show.login');

Route::get('/form', function () {
    return view('Form_submission');
});

// Database
Route::get('/dbconn', function(){
    return view('database');
}
);



