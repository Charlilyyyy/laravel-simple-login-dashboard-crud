<?php

use Illuminate\Support\Facades\Route;

//Controller

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\LogoutController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\BodyCompositionController;

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

Route::get('/',[HomeController::class,'index']);

Route::get('/login',[LoginController::class,'index']);
Route::post('/dashboard',[LoginController::class,'loggedIn']);
Route::get('/dashboard',[LoginController::class,'redirect']);

Route::get('/signup',[SignUpController::class,'index'])->name('signup');
Route::post('/signup',[SignUpController::class,'store'])->name('dashboard.store');

Route::get('/logout',[LogoutController::class,'index'])->name('logout');

Route::get('/biodata',[BiodataController::class,'index'])->name('biodata');
Route::get('/address',[AddressController::class,'index'])->name('address');
Route::get('/bodycomposition',[BodyCompositionController::class,'index'])->name('bodycomposition');

