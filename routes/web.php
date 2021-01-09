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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/categories/{id}', 'CategoryController@detail')->name('categories-detail');
Route::get('/details/{id}', 'DetailController@index')->name('detail');
Route::post('/details/{id}', 'DetailController@add')->name('detail-add');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');

Route::get('/success', 'CartController@success')->name('success');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/products', 'DashboardProductController@index')->name('dashboard-product');
Route::get('/dashboard/products/create', 'DashboardProductController@create')->name('dashboard-product-create');
Route::get('/dashboard/products/{id}', 'DashboardProductController@details')->name('dashboard-product-details');

Route::get('/dashboard/transaction', 'DashboardTransactionController@index')->name('dashboard-product-transaction');
Route::get('/dashboard/transaction/{id}', 'DashboardTransactionController@details')->name('dashboard-product-details');

Route::get('/dashboard/settings', 'DashboardSettingsController@store')->name('dashboard-settings-store');
Route::get('/dashboard/account', 'DashboardSettingsController@account')->name('dashboard-settings-account');

// ->middleware('Auth', 'Admin');
Route::prefix('admin')
    ->namespace('Admin')
    ->group(function() {
        Route::get('/','DashboardController@index')->name('admin-dashboard');
        Route::resource('category', 'CategoryController');
        Route::resource('user', 'UserController');
        Route::resource('product', 'ProductController');
        Route::resource('product-gallery', 'ProductGalleryController');
    });
  



Auth::routes();


