<?php

use App\Http\Controllers\Backend\DashboardController;
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
//Route::post('/dashboard/theme-mode', 'App\Http\Controllers\SettingController@themeMode')->name('settings.theme');


Route::name('user.')->prefix('user/')->middleware(['auth'])->group(function () {
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
    Route::post('/user-management/trash/restore', [UserController::class,'restore'])->name('user-management.restore');
    Route::delete('/user-management/trash/remove', [UserController::class,'removeTrash'])->name('user-management.remove-trash');
    Route::resource('user-management', UserController::class);

});
