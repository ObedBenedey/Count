<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('/banks', [BankController::class, 'index'])->name('banks.index');

//profile
Route::get('/profiles', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile', [ProfileController::class, 'create'])->name('profile.create');
Route::post('/data', [ProfileController::class, 'data'])->name('profile.data');
Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');

// Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);
