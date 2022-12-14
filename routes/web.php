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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Auth::routes();
});




// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
// Route::get('/admin/categories', [App\Http\Controllers\CategoriesController::class, 'index'])->name('home');
// Route::resource('/admin/categories', [App\Http\Controllers\CategoriesController::class,'index'])->name('home');
Route::resource('/admin/categories', \App\Http\Controllers\CategoriesController::class);
Route::resource('/admin/product',\App\Http\Controllers\ProductController::class);
Route::resource('/admin/slider',\App\Http\Controllers\SliderController::class);
Route::resource('/admin/customer',\App\Http\Controllers\CustomerController::class);
Route::resource('/admin/user',\App\Http\Controllers\UserController::class);
Route::resource('/admin/invoices',\App\Http\Controllers\InvoiceController::class);




