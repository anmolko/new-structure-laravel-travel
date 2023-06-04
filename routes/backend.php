<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Homepage\SliderController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\News\BlogCategoryController;
use App\Http\Controllers\Backend\News\BlogController;
use App\Http\Controllers\Backend\Page\PageController;
use App\Http\Controllers\Backend\Page\PageSectionElementController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\Activity\Basic_setup\CountryController;
use App\Http\Controllers\Backend\Activity\Basic_setup\PackageCategoryController;
use App\Http\Controllers\Backend\Activity\Basic_setup\PackageRibbonController;
use App\Http\Controllers\Backend\Activity\PackageController;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Backend\User\UserProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register backend routes for your application. These
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
Route::post('/setting/theme-mode',  [DashboardController::class, 'themeMode'])->name('setting.theme-mode');


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

Route::prefix('activity/')->name('activity.')->middleware(['auth'])->group(function () {

    Route::prefix('basic-setup/')->name('basic_setup.')->middleware(['auth'])->group(function () {
       //country
        Route::get('/country/trash', [CountryController::class,'trash'])->name('country.trash');
        Route::post('/country/trash/{id}/restore', [CountryController::class,'restore'])->name('country.restore');
        Route::delete('/country/trash/{id}/remove', [CountryController::class,'removeTrash'])->name('country.remove-trash');
        Route::resource('country', CountryController::class)->names('country');

        //category
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

//testimonials
Route::get('/testimonial/trash', [SliderController::class,'trash'])->name('testimonial.trash');
Route::post('/testimonial/trash/{id}/restore', [SliderController::class,'restore'])->name('testimonial.restore');
Route::delete('/testimonial/trash/{id}/remove', [SliderController::class,'removeTrash'])->name('testimonial.remove-trash');
Route::resource('testimonial', TestimonialController::class)->names('testimonial');

//services
Route::get('/service/trash', [ServiceController::class,'trash'])->name('service.trash');
Route::post('/service/trash/{id}/restore', [ServiceController::class,'restore'])->name('service.restore');
Route::delete('/service/trash/{id}/remove', [ServiceController::class,'removeTrash'])->name('service.remove-trash');
Route::resource('service', ServiceController::class)->names('service');


//for menu
Route::get('/add-page-to-menu',[MenuController::class,'addPage'])->name('menu.page');
Route::get('/add-package-to-menu',[MenuController::class,'addPackage'])->name('menu.package');
Route::get('/add-service-to-menu',[MenuController::class,'addService'])->name('menu.service');
Route::get('add-post-to-menu',[MenuController::class,'addPost'])->name('menu.post');
Route::get('add-custom-link',[MenuController::class,'addCustomLink'])->name('menu.custom');
Route::get('/update-menu',[MenuController::class,'updateMenu'])->name('menu.updateMenu');
Route::post('/update-menuitem/{id}',[MenuController::class,'updateMenuItem'])->name('menu.update_menu_item');
Route::get('/delete-menuitem/{id}/{key}/{in?}/{inside?}',[MenuController::class,'deleteMenuItem'])->name('menu.delete_menu_item');
Route::post('menu', [MenuController::class,'store'])->name('menu.store');
Route::get('/menu/{slug?}', [MenuController::class,'index'])->name('menu.index');
Route::get('/menu/{id}',[MenuController::class,'destroy'])->name('menu.delete');
Route::resource('menu', MenuController::class)->names('menu');


Route::prefix('news/')->name('news.')->middleware(['auth'])->group(function () {

    Route::prefix('basic-setup/')->name('basic_setup.')->middleware(['auth'])->group(function () {
        //category
        Route::get('/category/trash', [BlogCategoryController::class,'trash'])->name('category.trash');
        Route::post('/category/trash/{id}/restore', [BlogCategoryController::class,'restore'])->name('category.restore');
        Route::delete('/category/trash/{id}/remove', [BlogCategoryController::class,'removeTrash'])->name('category.remove-trash');
        Route::resource('category', BlogCategoryController::class)->names('category');
    });

    //blog
    Route::get('/blog/trash', [BlogController::class,'trash'])->name('blog.trash');
    Route::post('/blog/trash/{id}/restore', [BlogController::class,'restore'])->name('blog.restore');
    Route::delete('/blog/trash/{id}/remove', [BlogController::class,'removeTrash'])->name('blog.remove-trash');
    Route::resource('blog', BlogController::class)->names('blog');
});

Route::prefix('homepage/')->name('homepage.')->middleware(['auth'])->group(function () {
    Route::get('/slider/trash', [SliderController::class,'trash'])->name('slider.trash');
    Route::post('/slider/trash/{id}/restore', [SliderController::class,'restore'])->name('slider.restore');
    Route::delete('/slider/trash/{id}/remove', [SliderController::class,'removeTrash'])->name('slider.remove-trash');
    Route::resource('slider', SliderController::class)->names('slider');
});


//pages
Route::post('/page/status-update', [PageController::class,'statusUpdate'])->name('page.status-update');
Route::post('/page/data', [PageController::class,'getDataForDataTable'])->name('page.data');
Route::get('/page/trash', [PageController::class,'trash'])->name('page.trash');
Route::post('/page/trash/{id}/restore', [PageController::class,'restore'])->name('page.restore');
Route::delete('/page/trash/{id}/remove', [PageController::class,'removeTrash'])->name('page.remove-trash');
Route::resource('page', PageController::class)->names('page');


//page section and element
Route::post('/section-element/multiple-list-update', [PageSectionElementController::class,'multipleSectionUpdate'])->name('section-element.multiple-section-update');
Route::post('/section-element/status-update', [PageSectionElementController::class,'statusUpdate'])->name('section-element.status-update');
Route::post('/section-element/data', [PageSectionElementController::class,'getDataForDataTable'])->name('section-element.data');
Route::get('/section-element/trash', [PageSectionElementController::class,'trash'])->name('section-element.trash');
Route::post('/section-element/trash/{id}/restore', [PageSectionElementController::class,'restore'])->name('section-element.restore');
Route::delete('/section-element/trash/{id}/remove', [PageSectionElementController::class,'removeTrash'])->name('section-element.remove-trash');
Route::resource('section-element', PageSectionElementController::class)->names('section-element');


Route::put('/section-element-upload-gallery/{id}', [PageSectionElementController::class,'uploadGallery'])->name('section-element.gallery-update');
Route::post('/section-element/image-delete', [PageSectionElementController::class,'deleteGallery'])->name('section-element.gallery-delete');
Route::get('/section-element/gallery/{id}', [PageSectionElementController::class,'getGallery'])->name('section-element.gallery-display');


Route::resource('setting', SettingController::class)->names('setting');


//Route::get('/404', [DashboardController::class, 'errorPage'])->name('404');
