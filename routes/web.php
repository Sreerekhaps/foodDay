<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrderStore;


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

Route::group(['middleware' => ['auth']], function() {

Route::name('admin.')->prefix('admin')->namespace('Admin')->group(function (){

    
        Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('index');
        Route::get('/user/create', [App\Http\Controllers\AdminController::class, 'create'])->name('create');
        Route::post('/user/store', [App\Http\Controllers\AdminController::class, 'store'])->name('store');
        Route::get('/user/show', [App\Http\Controllers\AdminController::class, 'show'])->name('show');
        Route::get('/users/{user}/edit', [App\Http\Controllers\AdminController::class, 'edit'])->name('edit');
        Route::patch('/users/{user}/update', [App\Http\Controllers\AdminController::class, 'update'])->name('update');
        Route::get('/users/{user}/view', [App\Http\Controllers\AdminController::class, 'view'])->name('view');
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
        Route::get('/order/{id}', [App\Http\Controllers\OrderController::class, 'search'])->name('order.search');
        //////Discount/////////
        Route::get('/discount/create', [App\Http\Controllers\DiscountController::class, 'create'])->name('discount.create');
        Route::post('/discount/store', [App\Http\Controllers\DiscountController::class, 'store'])->name('discount.store');
        Route::get('/discount/show', [App\Http\Controllers\DiscountController::class, 'show'])->name('discount.show');
        Route::get('/discount/{discount}/edit', [App\Http\Controllers\DiscountController::class, 'edit'])->name('discount.edit');
        Route::patch('/discount/{discount}/update', [App\Http\Controllers\DiscountController::class, 'update'])->name('discount.update');
        Route::get('/discount/{discount}/view', [App\Http\Controllers\DiscountController::class, 'view'])->name('discount.view');
        Route::get('/discount/{id}', [App\Http\Controllers\DiscountController::class, 'destroy'])->name('discount.delete');
        ///////Permission//////
        Route::get('/permission/create', [App\Http\Controllers\PermissionController::class, 'create'])->name('permission.create');
        Route::post('/permission/store', [App\Http\Controllers\PermissionController::class, 'store'])->name('permission.store');
        Route::get('/permission/show', [App\Http\Controllers\PermissionController::class, 'show'])->name('permission.show');
        Route::get('/permission/{permission}/edit', [App\Http\Controllers\PermissionController::class, 'edit'])->name('permission.edit');
        Route::patch('/permission/{permission}/update', [App\Http\Controllers\PermissionController::class, 'update'])->name('permission.update');
        Route::get('/permission/{permission}/view', [App\Http\Controllers\PermissionController::class, 'view'])->name('permission.view');
        Route::get('/permission/{id}', [App\Http\Controllers\PermissionController::class, 'destroy'])->name('permission.delete');
        ///////Role//////
        Route::get('/role/create', [App\Http\Controllers\RoleController::class, 'create'])->name('role.create');
        Route::post('/role/store', [App\Http\Controllers\RoleController::class, 'store'])->name('role.store');
        Route::get('/role/show', [App\Http\Controllers\RoleController::class, 'show'])->name('role.show');
        Route::get('/role/{role}/edit', [App\Http\Controllers\RoleController::class, 'edit'])->name('role.edit');
        Route::patch('/role/{role}/update', [App\Http\Controllers\RoleController::class, 'update'])->name('role.update');
        Route::get('/role/{role}/view', [App\Http\Controllers\RoleController::class, 'view'])->name('role.view');
        //////Customer/////////
        Route::get('/customer/create', [App\Http\Controllers\AdminController::class, 'customer_create'])->name('customer.create');
        Route::post('/customer/store', [App\Http\Controllers\AdminController::class, 'customer_store'])->name('customer.store');
        Route::get('/customer/show', [App\Http\Controllers\AdminController::class, 'customer_show'])->name('customer.show');
        Route::get('/customer/{customer}/edit', [App\Http\Controllers\AdminController::class, 'customer_edit'])->name('customer.edit');
        Route::patch('/customer/{customer}/update', [App\Http\Controllers\AdminController::class, 'customer_update'])->name('customer.update');
        Route::get('/customer/{customer}/view', [App\Http\Controllers\AdminController::class, 'customer_view'])->name('customer.view');
        //////Restaurant_User/////////
        Route::get('/restaurant_user/create', [App\Http\Controllers\AdminController::class, 'restaurant_user_create'])->name('restaurant_user.create');
        Route::post('/restaurant_user/store', [App\Http\Controllers\AdminController::class, 'restaurant_user_store'])->name('restaurant_user.store');
        Route::get('/restaurant_user/show', [App\Http\Controllers\AdminController::class, 'restaurant_user_show'])->name('restaurant_user.show');
        Route::get('/restaurant_user/{restaurant_user}/edit', [App\Http\Controllers\AdminController::class, 'restaurant_user_edit'])->name('restaurant_user.edit');
        Route::patch('/restaurant_user/{restaurant_user}/update', [App\Http\Controllers\AdminController::class, 'restaurant_user_update'])->name('restaurant_user.update');
        Route::get('/restaurant_user/{restaurant_user}/view', [App\Http\Controllers\AdminController::class, 'restaurant_user_view'])->name('restaurant_user.view');
        //////Driver/////////
        Route::get('/driver/create', [App\Http\Controllers\AdminController::class, 'driver_create'])->name('driver.create');
        Route::post('/driver/store', [App\Http\Controllers\AdminController::class, 'driver_store'])->name('driver.store');
        Route::get('/driver/show', [App\Http\Controllers\AdminController::class, 'driver_show'])->name('driver.show');
        Route::get('/driver/{driver}/edit', [App\Http\Controllers\AdminController::class, 'driver_edit'])->name('driver.edit');
        Route::patch('/driver/{driver}/update', [App\Http\Controllers\AdminController::class, 'driver_update'])->name('driver.update');
        Route::get('/driver/{driver}/view', [App\Http\Controllers\AdminController::class, 'driver_view'])->name('driver.view');

});

        /**
        * Logout Route
        */  
        Route::get('/logout', [App\Http\Controllers\HomeController::class, 'perform'])->name('logout.perform');
        
    });

Route::get('/front', [App\Http\Controllers\FrontController::class, 'index'])->name('index');
Route::prefix('customer')->name('customer.')->group(function (){
   

    Route::middleware(['guest:customer'])->group(function (){
        
        Route::get('/signin', [App\Http\Controllers\FrontController::class, 'signin'])->name('signin');
        Route::post('/check', [App\Http\Controllers\FrontController::class, 'check'])->name('check');//signin
        Route::get('/signup', [App\Http\Controllers\FrontController::class, 'signup'])->name('signup');
        Route::post('/signup_store', [App\Http\Controllers\FrontController::class, 'signup_store'])->name('signup_store');//signup data store 
    /////////Forgot Password///////
        Route::get('/password/forgot',[FrontController::class,'showforgotForm'])->name('showforgotForm');
        Route::post('/password/forgot',[FrontController::class,'sendresetLink'])->name('sendresetLink');
        Route::get('/password/reset/{token}',[FrontController::class,'showresetForm'])->name('showresetForm');
        Route::post('/password/reset',[FrontController::class,'resetPassword'])->name('resetPassword');


    });

    Route::middleware(['auth:customer'])->group(function (){
        Route::get('/my_home', [App\Http\Controllers\FrontController::class, 'my_home'])->name('my_home');
        //////////////search/////////////
        Route::get('/search', [App\Http\Controllers\FrontController::class, 'search'])->name('search');
        Route::get('/restaurant_listing', [App\Http\Controllers\FrontController::class, 'restaurant_listing'])->name('restaurant_listing');
        Route::get('/restaurant_details/{restaurant}', [FrontController::class, 'restaurant_details'])->name('restaurant_details'); 
        Route::get('/myaccount', [App\Http\Controllers\FrontController::class, 'myaccount'])->name('myaccount'); 
        Route::get('/account', [App\Http\Controllers\FrontController::class, 'account'])->name('account');
        Route::patch('/update/{id}', [App\Http\Controllers\FrontController::class, 'profile_update'])->name('profile_update');
        Route::get('/address', [App\Http\Controllers\FrontController::class, 'address'])->name('address');
        Route::post('/address_store', [App\Http\Controllers\FrontController::class, 'address_store'])->name('address_store');
        Route::get('/edit_address/{id}', [App\Http\Controllers\FrontController::class, 'edit_address'])->name('edit_address');
        Route::get('/address/{id}', [App\Http\Controllers\FrontController::class, 'address_destroy'])->name('address_destroy');
        Route::patch('/update_address/{id}', [App\Http\Controllers\FrontController::class, 'update_address'])->name('update_address');
        Route::get('/show_password', [App\Http\Controllers\FrontController::class, 'show_password'])->name('show_password');
        Route::post('/changePassword',[App\Http\Controllers\FrontController::class, 'change_password'])->name('change_password');
        Route::get('/logoutuser', [App\Http\Controllers\FrontController::class, 'logout'])->name('logout');
        //////////Cart///////////////
        Route::get('/cart',[FrontController::class,'cart'])->name('cart');
        Route::get('/add-to-cart/{id}', [FrontController::class, 'addToCart'])->name('addToCart');
        Route::get('/remove-from-cart/{id}', [FrontController::class, 'removeFromCart'])->name('removeFromCart');
        Route::delete('cartDelete/{id}', [FrontController::class, 'cartDelete'])->name('cartDelete');
        Route::get('/cart2',[FrontController::class,'cart2'])->name('cart2');
        Route::get('/emptycart',[FrontController::class,'emptycart'])->name('emptycart');
        Route::get('/checkout',[FrontController::class,'checkout'])->name('checkout');
        Route::get('/order',[FrontController::class,'order'])->name('order');
        Route::get('/order_tracking',[FrontController::class,'order_tracking'])->name('order_tracking');

        Route::get('/addressStore/{id}', [FrontController::class, 'addressStore'])->name('addressStore');

        Route::post('/order/store', [FrontController::class, 'orderStore'])->name('orderStore');
        Route::get('/orderhistory',[FrontController::class, 'order_history'])->name('order_history');

    });



});
