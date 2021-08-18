<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\Auth\LoginController;


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
    return view('master');
});

Route::get('/contact', [EmailController::class,'index']);

Route::post('/contact',[EmailController::class,'store']);

Auth::routes(['register' => false]);
Route::get('/logout', [LoginController::class,'logout']);


Route::get('/dashboard', [EmailController::class, 'getDashboardPage'])->name('home')->middleware('auth');
