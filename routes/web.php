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

Route::resource('gallery', PhotosController::class);

Route::post('/contact', [ContactController::class, 'ContactUsForm'])->name('contact.store');

Route::group(['middleware' => 'auth2'], function () {
    Route::get('user', function () {
        return redirect()->route('gallery.index');
    });
    Route::get('message', [MessageController::class, 'show'])->name("message");
    Route::get('admin', function () {
        return view('admin');
    })->name("admin");
});

Route::get('/original', function () {
    return redirect()->away("https://csodacsoport.hu/");
})->name("original");
