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



Route::name('admin.')->prefix('admin')->namespace('Admin')->group(function (){

   Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('index');
   Route::get('/admin/user/create', [App\Http\Controllers\AdminController::class, 'create'])->name('create');
   Route::post('/admin/user/store', [App\Http\Controllers\AdminController::class, 'store'])->name('store');
   Route::get('/admin/user/show', [App\Http\Controllers\AdminController::class, 'show'])->name('show');
   Route::get('/admin/users/{user}/edit', [App\Http\Controllers\AdminController::class, 'edit'])->name('edit');
   Route::patch('/admin/users/{user}/update', [App\Http\Controllers\AdminController::class, 'update'])->name('update');
   Route::get('/admin/users/{user}/view', [App\Http\Controllers\AdminController::class, 'view'])->name('view');
   //////City/////////
   Route::get('/admin/city/create', [App\Http\Controllers\CityController::class, 'create'])->name('city.create');
   Route::post('/admin/city/store', [App\Http\Controllers\CityController::class, 'store'])->name('city.store');
   Route::get('/admin/city/show', [App\Http\Controllers\CityController::class, 'show'])->name('city.show');
   Route::get('/admin/city/{city}/edit', [App\Http\Controllers\CityController::class, 'edit'])->name('city.edit');
   Route::patch('/admin/city/{city}/update', [App\Http\Controllers\CityController::class, 'update'])->name('city.update');
   Route::get('/admin/city/{city}/view', [App\Http\Controllers\CityController::class, 'view'])->name('city.view');
   //////Cuisine/////////
   Route::get('/admin/cuisine/create', [App\Http\Controllers\CuisineController::class, 'create'])->name('cuisine.create');
   Route::post('/admin/cuisine/store', [App\Http\Controllers\CuisineController::class, 'store'])->name('cuisine.store');
   Route::get('/admin/cuisine/show', [App\Http\Controllers\CuisineController::class, 'show'])->name('cuisine.show');
   Route::get('/admin/cuisine/{cuisine}/edit', [App\Http\Controllers\CuisineController::class, 'edit'])->name('cuisine.edit');
   Route::patch('/admin/cuisine/{cuisine}/update', [App\Http\Controllers\CuisineController::class, 'update'])->name('cuisine.update');
   Route::get('/admin/cuisine/{cuisine}/view', [App\Http\Controllers\CuisineController::class, 'view'])->name('cuisine.view');
    //////Restuarant/////////
    Route::get('/admin/restaurant/create', [App\Http\Controllers\RestaurantController::class, 'create'])->name('restaurant.create');
    Route::post('/admin/restaurant/store', [App\Http\Controllers\RestaurantController::class, 'store'])->name('restaurant.store');
    Route::get('/admin/restaurant/show', [App\Http\Controllers\RestaurantController::class, 'show'])->name('restaurant.show');
    Route::get('/admin/restaurant/{restaurant}/edit', [App\Http\Controllers\RestaurantController::class, 'edit'])->name('restaurant.edit');
    Route::patch('/admin/restaurant/{restaurant}/update', [App\Http\Controllers\RestaurantController::class, 'update'])->name('restaurant.update');
    Route::get('/admin/restaurant/{restaurant}/view', [App\Http\Controllers\RestaurantController::class, 'view'])->name('restaurant.view');
    //////Order/////////
    Route::get('/admin/order/show', [App\Http\Controllers\OrderController::class, 'show'])->name('order.show');
    Route::get('/admin/order/{order}/edit', [App\Http\Controllers\OrderController::class, 'edit'])->name('order.edit');
    Route::patch('/admin/order/{order}/update', [App\Http\Controllers\OrderController::class, 'update'])->name('order.update');
    Route::get('/admin/order/{order}/view', [App\Http\Controllers\OrderController::class, 'view'])->name('order.view');
    Route::get('/admin/order/{id}', [App\Http\Controllers\OrderController::class, 'search'])->name('order.search');
    //////Discount/////////
    Route::get('/admin/discount/create', [App\Http\Controllers\DiscountController::class, 'create'])->name('discount.create');
    Route::post('/admin/discount/store', [App\Http\Controllers\DiscountController::class, 'store'])->name('discount.store');
    Route::get('/admin/discount/show', [App\Http\Controllers\DiscountController::class, 'show'])->name('discount.show');
    Route::get('/admin/discount/{discount}/edit', [App\Http\Controllers\DiscountController::class, 'edit'])->name('discount.edit');
    Route::patch('/admin/discount/{discount}/update', [App\Http\Controllers\DiscountController::class, 'update'])->name('discount.update');
    Route::get('/admin/discount/{discount}/view', [App\Http\Controllers\DiscountController::class, 'view'])->name('discount.view');
    Route::get('/admin/discount/{id}', [App\Http\Controllers\DiscountController::class, 'destroy'])->name('discount.delete');
    ///////Permission//////
    Route::get('/admin/permission/create', [App\Http\Controllers\PermissionController::class, 'create'])->name('permission.create');
    Route::post('/admin/permission/store', [App\Http\Controllers\PermissionController::class, 'store'])->name('permission.store');
    Route::get('/admin/permission/show', [App\Http\Controllers\PermissionController::class, 'show'])->name('permission.show');
    Route::get('/admin/permission/{permission}/edit', [App\Http\Controllers\PermissionController::class, 'edit'])->name('permission.edit');
    Route::patch('/admin/permission/{permission}/update', [App\Http\Controllers\PermissionController::class, 'update'])->name('permission.update');
    Route::get('/admin/permission/{permission}/view', [App\Http\Controllers\PermissionController::class, 'view'])->name('permission.view');
    Route::get('/admin/permission/{id}', [App\Http\Controllers\PermissionController::class, 'destroy'])->name('permission.delete');
    ///////Role//////
    Route::get('/admin/role/create', [App\Http\Controllers\RoleController::class, 'create'])->name('role.create');
    Route::post('/admin/role/store', [App\Http\Controllers\RoleController::class, 'store'])->name('role.store');
    Route::get('/admin/role/show', [App\Http\Controllers\RoleController::class, 'show'])->name('role.show');
    Route::get('/admin/role/{role}/edit', [App\Http\Controllers\RoleController::class, 'edit'])->name('role.edit');
    Route::patch('/admin/role/{role}/update', [App\Http\Controllers\RoleController::class, 'update'])->name('role.update');
    Route::get('/admin/role/{role}/view', [App\Http\Controllers\RoleController::class, 'view'])->name('role.view');
    //////Customer/////////
    Route::get('/admin/customer/create', [App\Http\Controllers\AdminController::class, 'customer_create'])->name('customer.create');
    Route::post('/admin/customer/store', [App\Http\Controllers\AdminController::class, 'customer_store'])->name('customer.store');
    Route::get('/admin/customer/show', [App\Http\Controllers\AdminController::class, 'customer_show'])->name('customer.show');
    Route::get('/admin/customer/{customer}/edit', [App\Http\Controllers\AdminController::class, 'customer_edit'])->name('customer.edit');
    Route::patch('/admin/customer/{customer}/update', [App\Http\Controllers\AdminController::class, 'customer_update'])->name('customer.update');
    Route::get('/admin/customer/{customer}/view', [App\Http\Controllers\AdminController::class, 'customer_view'])->name('customer.view');
    //////Restaurant_User/////////
    Route::get('/admin/restaurant_user/create', [App\Http\Controllers\AdminController::class, 'restaurant_user_create'])->name('restaurant_user.create');
    Route::post('/admin/restaurant_user/store', [App\Http\Controllers\AdminController::class, 'restaurant_user_store'])->name('restaurant_user.store');
    Route::get('/admin/restaurant_user/show', [App\Http\Controllers\AdminController::class, 'restaurant_user_show'])->name('restaurant_user.show');
    Route::get('/admin/restaurant_user/{restaurant_user}/edit', [App\Http\Controllers\AdminController::class, 'restaurant_user_edit'])->name('restaurant_user.edit');
    Route::patch('/admin/restaurant_user/{restaurant_user}/update', [App\Http\Controllers\AdminController::class, 'restaurant_user_update'])->name('restaurant_user.update');
    Route::get('/admin/restaurant_user/{restaurant_user}/view', [App\Http\Controllers\AdminController::class, 'restaurant_user_view'])->name('restaurant_user.view');
    //////Driver/////////
    Route::get('/admin/driver/create', [App\Http\Controllers\AdminController::class, 'driver_create'])->name('driver.create');
    Route::post('/admin/driver/store', [App\Http\Controllers\AdminController::class, 'driver_store'])->name('driver.store');
    Route::get('/admin/driver/show', [App\Http\Controllers\AdminController::class, 'driver_show'])->name('driver.show');
    Route::get('/admin/driver/{driver}/edit', [App\Http\Controllers\AdminController::class, 'driver_edit'])->name('driver.edit');
    Route::patch('/admin/driver/{driver}/update', [App\Http\Controllers\AdminController::class, 'driver_update'])->name('driver.update');
    Route::get('/admin/driver/{driver}/view', [App\Http\Controllers\AdminController::class, 'driver_view'])->name('driver.view');

});
    Route::group(['middleware' => ['auth']], function() {
        /**
        * Logout Route
        */  
        Route::get('/logout', [App\Http\Controllers\HomeController::class, 'perform'])->name('logout.perform');
        
    });


    Route::get('/front', [App\Http\Controllers\FrontController::class, 'index'])->name('index');
    Route::get('/signin', [App\Http\Controllers\FrontController::class, 'signin']);
    Route::post('/check', 'App\Http\Controllers\FrontController@check') ->name('check');//signin
    Route::get('/my_home', [App\Http\Controllers\FrontController::class, 'my_home']);

    Route::get('/signup', [App\Http\Controllers\FrontController::class, 'signup']);
    Route::post('/signup_store', [App\Http\Controllers\FrontController::class, 'signup_store']);//signup data store  
    Route::get('/myaccount', [App\Http\Controllers\FrontController::class, 'myaccount']);
    Route::get('/address', [App\Http\Controllers\FrontController::class, 'address']);

    Route::patch('/profile/update', [App\Http\Controllers\FrontController::class, 'profile_update'])->name('profile_update');
    Route::get('/logoutuser', [App\Http\Controllers\FrontController::class, 'logout']);

    Route::get('/forgotpassword', [App\Http\Controllers\FrontController::class, 'forgotpassword']);







