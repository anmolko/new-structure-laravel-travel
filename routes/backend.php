<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Homepage\SliderController;
use App\Http\Controllers\Backend\Tour\Basic_setup\CountryController;
use App\Http\Controllers\Backend\Tour\Basic_setup\PackageCategoryController;
use App\Http\Controllers\Backend\Tour\Basic_setup\PackageRibbonController;
use App\Http\Controllers\Backend\Tour\PackageController;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Backend\User\UserProfileController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes([
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::any('/register', function() {
    abort(404);
});



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/404', [DashboardController::class, 'errorPage'])->name('404');
//Route::post('/dashboard/theme-mode', 'App\Http\Controllers\SettingController@themeMode')->name('settings.theme');


Route::prefix('user/')->name('user.')->middleware(['auth'])->group(function () {
    //signed-in user routes
    Route::get('profile', [UserProfileController::class, 'index'])->name('profile');
    Route::get('profile/{slug?}', [UserProfileController::class, 'profile'])->name('profile');
    Route::get('profile/edit/{slug}', [UserProfileController::class, 'profileEdit'])->name('profile.edit');
    Route::post('profile/socials/', [UserProfileController::class, 'socialsUpdate'])->name('profile.socials');
    Route::put('profile/{id}/update', [UserProfileController::class, 'profileUpdate'])->name('profile.update');
    Route::post('user-image/update/', [UserProfileController::class, 'imageupdate'])->name('imageupdate');
    Route::post('profile/oldpassword', [UserProfileController::class, 'checkoldpassword'])->name('oldpassword');
    Route::post('profile/password', [UserProfileController::class, 'profilepassword'])->name('password');
    Route::post('user/removeaccount', [UserProfileController::class, 'removeAccount'])->name('removeaccount');
    //end of signed-in user routes

    //user related routes
    Route::get('filemanager', [UserController::class, 'filemanager'])->name('filemanager');
    Route::post('/user-management/status-update', [UserController::class,'statusUpdate'])->name('user-management.status-update');
    Route::post('/user-management/data', [UserController::class,'getDataForDataTable'])->name('user-management.data');
    Route::get('/user-management/trash', [UserController::class,'trash'])->name('user-management.trash');
    Route::post('/user-management/trash/{id}/restore', [UserController::class,'restore'])->name('user-management.restore');
    Route::delete('/user-management/trash/{id}/remove', [UserController::class,'removeTrash'])->name('user-management.remove-trash');
    Route::resource('user-management', UserController::class)->names('user-management');

});

Route::prefix('tour/')->name('tour.')->middleware(['auth'])->group(function () {

    Route::prefix('basic-setup/')->name('basic_setup.')->middleware(['auth'])->group(function () {
       //country
        Route::get('/country/trash', [CountryController::class,'trash'])->name('country.trash');
        Route::post('/country/trash/{id}/restore', [CountryController::class,'restore'])->name('country.restore');
        Route::delete('/country/trash/{id}/remove', [CountryController::class,'removeTrash'])->name('country.remove-trash');
        Route::resource('country', CountryController::class)->names('country');

        //country
        Route::get('/category/trash', [PackageCategoryController::class,'trash'])->name('category.trash');
        Route::post('/category/trash/{id}/restore', [PackageCategoryController::class,'restore'])->name('category.restore');
        Route::delete('/category/trash/{id}/remove', [PackageCategoryController::class,'removeTrash'])->name('category.remove-trash');
        Route::resource('category', PackageCategoryController::class)->names('category');

        //country
        Route::get('/ribbon/trash', [PackageRibbonController::class,'trash'])->name('ribbon.trash');
        Route::post('/ribbon/trash/{id}/restore', [PackageRibbonController::class,'restore'])->name('ribbon.restore');
        Route::delete('/ribbon/trash/{id}/remove', [PackageRibbonController::class,'removeTrash'])->name('ribbon.remove-trash');
        Route::resource('ribbon', PackageRibbonController::class)->names('ribbon');

    });

    //package
    Route::post('/package/status-update', [PackageController::class,'statusUpdate'])->name('package.status-update');
    Route::post('/package/data', [PackageController::class,'getDataForDataTable'])->name('package.data');
    Route::get('/package/trash', [PackageController::class,'trash'])->name('package.trash');
    Route::post('/package/trash/{id}/restore', [PackageController::class,'restore'])->name('package.restore');
    Route::delete('/package/trash/{id}/remove', [PackageController::class,'removeTrash'])->name('package.remove-trash');
    Route::resource('package', PackageController::class)->names('package');

});

Route::prefix('homepage/')->name('homepage.')->middleware(['auth'])->group(function () {
    Route::get('/slider/trash', [SliderController::class,'trash'])->name('slider.trash');
    Route::post('/slider/trash/{id}/restore', [SliderController::class,'restore'])->name('slider.restore');
    Route::delete('/slider/trash/{id}/remove', [SliderController::class,'removeTrash'])->name('slider.remove-trash');
    Route::resource('slider', SliderController::class)->names('slider');
});

//Route::fallback(function () {
//    return redirect()->route('backend.404');
//});
