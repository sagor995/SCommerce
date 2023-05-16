<?php

use Illuminate\Support\Facades\Route;

//FrontEnd
use App\Http\Controllers\Frontend\PagesController;

//Backend
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DivisionController;
use App\Http\Controllers\Backend\DistrictController;


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
Route::get('/about', [PagesController::class, "about"])->name('about');


Route::get('/cart', [PagesController::class, "cart"])->name('cart');
Route::get('/checkout', [PagesController::class, "checkout"])->name('checkout');

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
        Route::get('/trash', [BrandController::class, "trash"])->name('brand.trash');
        Route::get('/add', [BrandController::class, "create"])->name('brand.create');
        Route::post('/store', [BrandController::class, "store"])->name('brand.store');
        Route::get('/edit/{id}', [BrandController::class, "edit"])->name('brand.edit');
        Route::post('/update/{id}', [BrandController::class, "update"])->name('brand.update');
        Route::post('/destroy/{id}', [BrandController::class, "destroy"])->name('brand.destroy');
    });

    Route::group(['prefix' => '/category'], function () {
        Route::get('/manage', [CategoryController::class, "index"])->name('category.manage');
        Route::get('/trash', [CategoryController::class, "trash"])->name('category.trash');
        Route::get('/add', [CategoryController::class, "create"])->name('category.create');
        Route::post('/store', [CategoryController::class, "store"])->name('category.store');
        Route::get('/edit/{id}', [CategoryController::class, "edit"])->name('category.edit');
        Route::post('/update/{id}', [CategoryController::class, "update"])->name('category.update');
        Route::post('/destroy/{id}', [CategoryController::class, "destroy"])->name('category.destroy');
    });

    Route::group(['prefix' => '/division'], function () {
        Route::get('/manage', [DivisionController::class, "index"])->name('division.manage');
        Route::get('/trash', [DivisionController::class, "trash"])->name('division.trash');
        Route::get('/add', [DivisionController::class, "create"])->name('division.create');
        Route::post('/store', [DivisionController::class, "store"])->name('division.store');
        Route::get('/edit/{id}', [DivisionController::class, "edit"])->name('division.edit');
        Route::post('/update/{id}', [DivisionController::class, "update"])->name('division.update');
        Route::post('/destroy/{id}', [DivisionController::class, "destroy"])->name('division.destroy');
    });

    Route::group(['prefix' => '/district'], function () {
        Route::get('/manage', [DistrictController::class, "index"])->name('district.manage');
        Route::get('/trash', [DistrictController::class, "trash"])->name('district.trash');
        Route::get('/add', [DistrictController::class, "create"])->name('district.create');
        Route::post('/store', [DistrictController::class, "store"])->name('district.store');
        Route::get('/edit/{id}', [DistrictController::class, "edit"])->name('district.edit');
        Route::post('/update/{id}', [DistrictController::class, "update"])->name('district.update');
        Route::post('/destroy/{id}', [DistrictController::class, "destroy"])->name('district.destroy');
    });
});
