<?php

use App\Http\Controllers\Frontend\HomePageController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomePageController::class, 'index'])->name('home');


Route::any('/register', function() {
    return redirect()->route('frontend.404');
});

//
//Route::fallback(function () {
//    return redirect()->route('frontend.404');
//});



