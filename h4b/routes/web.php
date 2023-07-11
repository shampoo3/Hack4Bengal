<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

    Route::controller(OrderController::class)->prefix('orders')->group(function () {
        Route::get('', 'index')->name('orders');
        Route::get('create', 'create')->name('orders.create');
        Route::post('store', 'store')->name('orders.store');
        Route::get('show/{id}', 'show')->name('orders.show');
        Route::get('edit/{id}', 'edit')->name('orders.edit');
        Route::put('edit/{id}', 'update')->name('orders.update');
        Route::delete('destroy/{id}', 'destroy')->name('orders.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');

    Route::any ( '/search', function () {
        $q = Input::get ( 'q' );
        $user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->get ();
        if (count ( $user ) > 0)
            return view ( 'welcome' )->withDetails ( $user )->withQuery ( $q );
        else
            return view ( 'welcome' )->withMessage ( 'No Details found. Try to search again !' );
    } );
});