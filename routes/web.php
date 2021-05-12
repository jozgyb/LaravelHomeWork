<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PhotosController;
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
})->name('/');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('exercise1', function () {
    return view('view1');
});
Route::get('introduction', function () {
    return view('introduction');
})->name("introduction");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/gallery', function () {
    return Route::resource('photo', [PhotosController::class]);
})->name("gallery");

Route::post('/contact', [ContactController::class, 'ContactUsForm'])->name('contact.store');

Route::group(['middleware' => 'auth2'], function () {
    Route::get('user', function () {
        return view('user');
    })->name("user");
    Route::get('admin', [MessageController::class, 'show'])->name("admin");
});

Route::get('/original', function () {
    return redirect()->away("https://csodacsoport.hu/");
})->name("original");
