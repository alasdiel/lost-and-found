<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
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
Route::get('/handle/{id}', [FormController::class, 'handle'])->name('handle');

Route::get('/signup', [AuthController::class, 'showSign_up'])->name('show.signup');
Route::post('/signup', [AuthController::class, 'sign_up'])->name('signup');

Route::get('/login', [AuthController::class, 'showLog_in'])->name('show.login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/report', [FormController::class, 'showReport'])->name('show.report');
Route::post('/report', [FormController::class, 'report'])->middleware('auth')->name('report');

Route::get('/profile', [ProfileController::class, 'showProfile'])->name('show.profile');
Route::post('/profile', [ProfileController::class, 'updateProfile'])->middleware('auth')->name('update.profile');

Route::get('/dashboard', [AdminController::class, 'showDashboard'])->middleware('auth', 'admin')->name('show.dashboard');
Route::post('/dashboard/handle/{id}', [AdminController::class, 'handle'])->middleware('auth', 'admin')->name('admin.handle');


// Database
Route::get('/dbconn', function(){
    return view('database');
}
);



