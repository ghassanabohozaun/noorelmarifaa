<?php

use App\Http\Controllers\Front\FrontendController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(
    [
        'namespace' => 'Front',
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {

    ////////////////////////////////////////////////////////////
    /// any
    Route::get('', [FrontendController::class, 'index'])->where(['any' => '.*']);
    Route::get('/', [FrontendController::class, 'index'])->name('index');
    Route::get('/page/{val?}', [FrontendController::class, 'page'])->name('page');

    Route::get('/categories/{cat?}', [FrontendController::class, 'categories'])->name('categories');
    Route::get('/categories-paging/{id?}', [FrontendController::class, 'categoriesPaging'])->name('categories.paging');
    Route::get('/new/{val?}',  [FrontendController::class, 'new'])->name('new');
    Route::get('/category/{val?}',  [FrontendController::class, 'category'])->name('category');
    Route::post('/add-comment',  [FrontendController::class, 'addComment'])->name('add.comment');
    Route::get('/contact-us',  [FrontendController::class, 'contactUs'])->name('contact.us');
    Route::post('/add-communication-request',  [FrontendController::class, 'addCommunicationRequest'])->name('admin.communication.requests.add');
    Route::get('/orders',  [FrontendController::class, 'orders'])->name('orders');
    Route::post('/add-order',  [FrontendController::class, 'addOrder'])->name('add.order');
    Route::get('/services',  [FrontendController::class, 'services'])->name('services');
    Route::post('/add-service', [FrontendController::class, 'addService'])->name('add.service');
    Route::get('/videos',  [FrontendController::class, 'videos'])->name('videos');
    Route::get('/video-paging',  [FrontendController::class, 'videoPaging'])->name('video.paging');
    Route::get('/photos-gallery', [FrontendController::class, 'photosGallery'])->name('photos.gallery');
    Route::get('/photos-gallery-photos',  [FrontendController::class, 'photosGalleryPhotos'])
        ->name('get.photos.gallery.photos');
    Route::get('/photos-gallery-paging',   [FrontendController::class, 'photosGalleryPaging'])->name('photos.gallery.paging');
    Route::get('/yearly-reports',  [FrontendController::class, 'yearlyReports'])->name('yearly.reports');
    Route::get('/get-yearly-reports-for-one-year/{year?}', [FrontendController::class, 'getYearlyReportsForOneYear'])
        ->name('get.yearly.reports.for.one.year');
    Route::get('/monthly-reports',  [FrontendController::class, 'monthlyReports'])->name('monthly.reports');
    Route::get('/get-monthly-reports-for-one-year/{year?}',  [FrontendController::class, 'getMonthlyReportsForOneYear'])
        ->name('get.monthly.reports.for.one.year');
});


/////// Maintenance Routes
Route::get('maintenance', 'Front\FrontendController@maintenance')->name('maintenance');


