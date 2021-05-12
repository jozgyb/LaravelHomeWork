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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('exercise1', function () { return view('view1'); }); 
Route::get('introduction', function () { return view('introduction'); })->name("introduction");

Route::group(['middleware' => 'auth2'], function () {     
    Route::get('user', function () { return view('user'); })->name("user");
    Route::get('admin', function () { return view('admin'); })->name("admin");
});
