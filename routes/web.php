<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/academie', function () {
    return view('academie');
})->name('academie');
Route::get('/article', function () {
    return view('article');
})->name('article');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/inscription', function () {
    return view('inscription');
})->name('inscription');
Route::post('/inscription', [InscriptionController::class, 'store'])->name('inscription.store');
Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');
Route::get('/terms', function () {
    return view('terms');
})->name('terms');

