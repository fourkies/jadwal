<?php

use App\Http\Controllers\UserController;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard_admin');
});


Route::controller(UserController::class)->name('user.')->group(function () {
    Route::get('/user', 'getUser')->name('getUser');
});