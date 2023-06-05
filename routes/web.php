<?php

use App\Http\Controllers\Frontend\Activity\PackageController;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\News\BlogController;
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


Route::get('/contact-us', [HomePageController::class, 'index'])->name('contact-us');

Route::get('/activity', [PackageController::class, 'index'])->name('activity.index');
Route::get('/activity/{slug}', [PackageController::class, 'show'])->name('activity.show');
Route::post('/activity/search', [PackageController::class, 'search'])->name('activity.search');
Route::get('/activity/category/{slug}', [PackageController::class, 'category'])->name('activity.category');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/blog/search', [BlogController::class, 'search'])->name('blog.search');
Route::get('/blog/category/{slug}', [BlogController::class, 'category'])->name('blog.category');



