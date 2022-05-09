<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;

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

Route::get('/back', function () {
    return view('back.backend');
});

Route::post("/emailsent", [BackController::class, 'mail'])->name('submitemail');

Route::get('back/contact', function () {
    return view('back.pages.contact');})
    ->name('back.contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
