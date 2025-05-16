<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
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
Route::post('/signup', [AuthController::class, 'sign_up'])->name('signup');

Route::get('/login', [AuthController::class, 'showLog_in'])->name('show.login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/report', [FormController::class, 'showReport'])->name('show.report');
Route::post('/report', [FormController::class, 'report'])->middleware('auth')->name('report');
// Database
Route::get('/dbconn', function(){
    return view('database');
}
);



