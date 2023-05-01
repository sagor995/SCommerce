<?php

use Illuminate\Support\Facades\Route;

//FrontEnd
use App\Http\Controllers\Frontend\PagesController;

//Backend
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\BrandController;

/*
|--------------------------------------------------------------------------
| Frontend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, "index"])->name('homepage');

/*
|--------------------------------------------------------------------------
| Backend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, "index"])->name('admin.dashboard');

    Route::group(['prefix' => '/brand'], function () {
        Route::get('/manage', [BrandController::class, "index"])->name('brand.manage');
        Route::get('/add', [BrandController::class, "create"])->name('brand.create');
        Route::post('/store', [BrandController::class, "store"])->name('brand.store');
        Route::get('/edit/{id}', [BrandController::class, "edit"])->name('brand.edit');
        Route::post('/update/{id}', [BrandController::class, "update"])->name('brand.update');
        Route::post('/destroy/{id}', [BrandController::class, "destroy"])->name('brand.destroy');
    });

    Route::group(['prefix' => '/category'], function () {
        Route::get('/manage', [CategoryController::class, "index"])->name('category.manage');
        Route::get('/add', [CategoryController::class, "create"])->name('category.create');
        Route::post('/store', [CategoryController::class, "store"])->name('category.store');
        Route::get('/edit', [CategoryController::class, "edit"])->name('category.edit');
        Route::post('/update', [CategoryController::class, "update"])->name('category.update');
        Route::get('/destroy', [CategoryController::class, "destroy"])->name('category.destroy');
    });
});
