<?php

use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/mission', [HomeController::class, 'mission'])->name('mission');

Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/rates', [HomeController::class, 'rates'])->name('rates');


Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::resource('jobs', JobController::class);
Route::get('/jobsshow', [HomeController::class, 'jobsshow'])->name('jobsshow');
Route::get('/trainings', function (){ return view('trainings.index');})->name('trainings');

// Backoffice
Route::get('/packages', [HomeController::class, 'packages'])->name('packages');
Route::get('/pickup', [HomeController::class, 'pickup'])->name('pickup');
Route::get('/incomming', [HomeController::class, 'incomming'])->name('incomming');
Route::get('/track',  function () {
    return view('boffice.track');
})->name('track');

// Profile
Route::controller(ProfileController::class)->prefix('profiles')->group(function () {
    Route::get('/', 'index')->name('myprofile');
    Route::get('/edit', 'edit')->name('editprofile');
    Route::post('/update/{user}', 'update')->name('updateprofile');
});

Route::group(['prefix' => 'emails'], function () {
    Route::get('/welcome', function (){ return view('emails.welcome');})->name('emails.welcome');
    Route::get('/password', function (){ return view('emails.passwordUpdated');})->name('emails.password');
    Route::get('/profileupdate', function (){ return view('emails.profileUpdate');})->name('emails.profileupdate');
    Route::get('/accountdelete', function (){ return view('emails.accountDellete');})->name('emails.accountdelete');
});


Route::get('/galaries', [GalleryController::class, 'index'])->name('galaries');



// Auth routs
require __DIR__ . '/auth.php';
// =========================
