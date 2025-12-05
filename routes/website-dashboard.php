<?php

use App\Http\Controllers\Dashboard\Auth\AuthController;
use App\Http\Controllers\Dashboard\Auth\Passowrd\ForgetPasswordController;
use App\Http\Controllers\Dashboard\Auth\Passowrd\ResetPasswordController;
use App\Http\Controllers\Dashboard\DepartmentsController;
use App\Http\Controllers\Dashboard\PagesController;
use App\Http\Controllers\Dashboard\PostsController;
use App\Http\Controllers\Dashboard\SlidersController;
use App\Http\Controllers\Dashboard\{AdminsController, ChildernController, CitiesController, DashboardController, GovernoratiesController, ProductsController, RolesController, SettingsController, SponsershipOrganizationsController, SponsershipStatusesController, SponsershipTypesController, UploadCenterController};
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale() . '/dashboard',
        'as' => 'dashboard.',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ],
    function () {


        ########################################### protected routes  #####################################################################
        Route::group(['middleware' => 'auth:admin'], function () {


            ########################################### posts routes  ######################################################################

            Route::group(['middleware' => 'can:website'], function () {
                Route::resource('posts', PostsController::class);
                Route::get('/posts/photos/{id?}', [PostsController::class, 'postPhotos'])->name('posts.photos');
                Route::post('/upload/other/photos/{pid}', [PostsController::class, 'uploadOtherPhotos'])->name('posts.upload.other.photos');
                Route::post('/delete/other/photo', [PostsController::class, 'deleteOtherPhoto'])->name('posts.delete.other.photo');
                Route::post('/posts/destroy', [PostsController::class, 'destroy'])->name('posts.destroy');
            });

            ########################################### departments routes  ######################################################################
            Route::group(['middleware' => 'can:website'], function () {
                Route::resource('departments', DepartmentsController::class);
                Route::post('/departments/destroy', [DepartmentsController::class, 'destroy'])->name('departments.destroy');
                Route::post('/departments/status', [DepartmentsController::class, 'changeStatus'])->name('departments.change.status');
            });

            ###########################################  pages routes  ######################################################################
            Route::group(['middlewire' => 'can:website'], function () {
                Route::resource('pages', PagesController::class);
                Route::get('/pages-all', [PagesController::class, 'getAll'])->name('pages.get.all');
                Route::post('/pages/change-status', [PagesController::class, 'changeStatus'])->name('pages.change.status');
                Route::post('/pages/delete-photo', [PagesController::class, 'deletePhoto'])->name('pages.delete.photo');
            });

            ###########################################  sliders routes  ##################################################################
            Route::group(['middlwire' => 'can:website'], function () {
                Route::resource('sliders', SlidersController::class);
                Route::get('/slides-all', [SlidersController::class, 'getAll'])->name('sliders.get.all');
                Route::post('/sliders/change-status', [SlidersController::class, 'changeStatus'])->name('sliders.change.status');
            });

            ###########################################  upload center routes  ##################################################################
            Route::group(['middlwire' => 'can:website'], function () {
                Route::resource('uploadCenter', UploadCenterController::class);
                Route::post('/uploadCenter/destroy', [UploadCenterController::class, 'destroy'])->name('uploadCenter.destroy');
                Route::get('/get-file-by-id', [UploadCenterController::class, 'getUploadCenterFileById'])->name('uploadCenter.get.file.by.id');

            });


        });
    },
);
