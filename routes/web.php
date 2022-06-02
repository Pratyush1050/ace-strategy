<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\HeroSectionController;
use Illuminate\Support\Facades\Route;

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



Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::controller(AdminDashboardController::class)->group(function (){
        Route::get('/dashboard','index')->name('dashboard');
    });

    Route::controller(HeroSectionController::class)->group(function (){
        Route::get('/hero-section', 'index')->name('hero-section');
        Route::post('/hero-section', 'store')->name('hero-section.store');
    });

    Route::controller(BuyerController::class)->group(function (){
        Route::get('/buyers', 'index')->name('buyers');
        Route::delete('/buyers/{id}', 'destroy')->name('buyers.delete');
        Route::get('/buyers/search', 'search')->name('buyers.search');
        Route::post('/buyer-download','download')->name('buyers.download');
    });
});

Route::controller(HomePageController::class)->group(function (){
    Route::get('/', 'index')->name('home');
});

Route::post('/buyers', [BuyerController::class, 'store'])->name('buyers.store');

require __DIR__.'/auth.php';
