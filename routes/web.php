<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Supplier Routes
    Route::resource('/suppliers', App\Http\Controllers\SupplierController::class, ['names' => 'supplier']);
    // Customer Routes
    Route::resource('/customers', App\Http\Controllers\CustomerController::class, ['names' => 'customer'])->only(['index', 'create', 'edit']);
    // Category routes
    Route::resource('/category', App\Http\Controllers\CategoryController::class, ['names' => 'category']);
    // Product routes
    Route::resource('/product', App\Http\Controllers\ProductController::class, ['names' => 'product']);
    // Unit routes
    Route::resource('/unit', App\Http\Controllers\UnitController::class, ['names' => 'unit']);
    // Purchase routes
    Route::resource('/purchase', App\Http\Controllers\PurchaseController::class, ['names' => 'purchase']);
    Route::get('/category/product/{id}', [App\Http\Controllers\PurchaseController::class, 'getProduct'])->name('product.get');
    // Invoice routes
    Route::resource('/invoice', App\Http\Controllers\InvoiceController::class, ['names' => 'invoice']);
});
