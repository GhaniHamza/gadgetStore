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

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('staff', 'App\Http\Controllers\StaffController');
Route::resource('smartphone', 'App\Http\Controllers\SmartphoneController');
Route::resource('case', 'App\Http\Controllers\CaseController');
Route::resource('powerbank', 'App\Http\Controllers\PowerbankController');
Route::resource('accessories', 'App\Http\Controllers\AccessoriesController');