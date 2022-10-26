<?php

use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
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

// Backoffice
Route::get('/packages', [HomeController::class, 'packages'])->name('packages');
Route::get('/pickup', [HomeController::class, 'pickup'])->name('pickup');
Route::get('/incomming', [HomeController::class, 'incomming'])->name('incomming');

// Profile
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');


Route::get('/galaries', [GalleryController::class, 'index'])->name('galaries');



// Auth routs
require __DIR__.'/auth.php';
// =========================
