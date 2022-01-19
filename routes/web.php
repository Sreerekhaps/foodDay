<?php

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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('web')->group(function(){
   Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
   Route::get('/admin/user/create', [App\Http\Controllers\AdminController::class, 'create'])->name('admin.create');
   Route::post('/admin/user/store', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.store');
   Route::get('/admin/user/show', [App\Http\Controllers\AdminController::class, 'show'])->name('admin.show');
   Route::get('/admin/users/{user}/edit', [App\Http\Controllers\AdminController::class, 'edit'])->name('admin.edit');
   Route::patch('/admin/users/{user}/update', [App\Http\Controllers\AdminController::class, 'update'])->name('admin.update');
   Route::get('/admin/users/{user}/view', [App\Http\Controllers\AdminController::class, 'view'])->name('admin.view');
   //////City/////////
   Route::get('/city/create', [App\Http\Controllers\CityController::class, 'create'])->name('city.create');
   Route::post('/city/store', [App\Http\Controllers\CityController::class, 'store'])->name('city.store');
   Route::get('/city/show', [App\Http\Controllers\CityController::class, 'show'])->name('city.show');
   Route::get('/city/{city}/edit', [App\Http\Controllers\CityController::class, 'edit'])->name('city.edit');
   Route::patch('/city/{city}/update', [App\Http\Controllers\CityController::class, 'update'])->name('city.update');
   Route::get('/city/{city}/view', [App\Http\Controllers\CityController::class, 'view'])->name('city.view');
   //////Cuisine/////////
   Route::get('/cuisine/create', [App\Http\Controllers\CuisineController::class, 'create'])->name('cuisine.create');
   Route::post('/cuisine/store', [App\Http\Controllers\CuisineController::class, 'store'])->name('cuisine.store');
   Route::get('/cuisine/show', [App\Http\Controllers\CuisineController::class, 'show'])->name('cuisine.show');
   Route::get('/cuisine/{cuisine}/edit', [App\Http\Controllers\CuisineController::class, 'edit'])->name('cuisine.edit');
   Route::patch('/cuisine/{cuisine}/update', [App\Http\Controllers\CuisineController::class, 'update'])->name('cuisine.update');
   Route::get('/cuisine/{cuisine}/view', [App\Http\Controllers\CuisineController::class, 'view'])->name('cuisine.view');
    //////Restuarant/////////
    Route::get('/restaurant/create', [App\Http\Controllers\RestaurantController::class, 'create'])->name('restaurant.create');
    Route::post('/restaurant/store', [App\Http\Controllers\RestaurantController::class, 'store'])->name('restaurant.store');
    Route::get('/restaurant/show', [App\Http\Controllers\RestaurantController::class, 'show'])->name('restaurant.show');
    Route::get('/restaurant/{restaurant}/edit', [App\Http\Controllers\RestaurantController::class, 'edit'])->name('restaurant.edit');
    Route::patch('/restaurant/{restaurant}/update', [App\Http\Controllers\RestaurantController::class, 'update'])->name('restaurant.update');
    Route::get('/restaurant/{restaurant}/view', [App\Http\Controllers\RestaurantController::class, 'view'])->name('restaurant.view');
    //////Order/////////
    Route::get('/order/show', [App\Http\Controllers\OrderController::class, 'show'])->name('order.show');
    Route::get('/order/{order}/edit', [App\Http\Controllers\OrderController::class, 'edit'])->name('order.edit');
    Route::patch('/order/{order}/update', [App\Http\Controllers\OrderController::class, 'update'])->name('order.update');
    Route::get('/order/{order}/view', [App\Http\Controllers\OrderController::class, 'view'])->name('order.view');
    //////Discount/////////
    Route::get('/discount/create', [App\Http\Controllers\DiscountController::class, 'create'])->name('discount.create');
    Route::post('/discount/store', [App\Http\Controllers\DiscountController::class, 'store'])->name('discount.store');
    Route::get('/discount/show', [App\Http\Controllers\DiscountController::class, 'show'])->name('discount.show');
    Route::get('/discount/{discount}/edit', [App\Http\Controllers\DiscountController::class, 'edit'])->name('discount.edit');
    Route::patch('/discount/{discount}/update', [App\Http\Controllers\DiscountController::class, 'update'])->name('discount.update');
    Route::get('/discount/{discount}/view', [App\Http\Controllers\DiscountController::class, 'view'])->name('discount.view');
    Route::delete('/discount/{discount}/destroy', [App\Http\Controllers\DiscountController::class, 'destroy'])->name('discount.destroy');






















});



