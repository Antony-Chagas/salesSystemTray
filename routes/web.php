<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SendEmailController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

//--

//Route::get('/sellers', [SellerController::class, 'index'])->name('sellers.index');
//Route::get('/sellers/create', [SellerController::class, 'create'])->name('sellers.create');
//Route::post('/sellers', [SellerController::class, 'store'])->name('sellers.store');
//Route::get('/sellers/{seller}', [SellerController::class, 'show'])->name('sellers.show');
//Route::get('/sellers/{seller}/edit', [SellerController::class, 'edit'])->name('sellers.edit');
//Route::put('/sellers/{seller}', [SellerController::class, 'update'])->name('sellers.update');
//Route::delete('/sellers/{seller}', [SellerController::class, 'destroy'])->name('sellers.destroy');

Route::resource('sellers', SellerController::class);

//--

Route::get('/sales?{seller=}', function($seller){
    return 'ID' . $seller;
});

//--

//Route::get('/sales', [SaleController::class, 'index'])->name('sales.index');
//Route::get('/sales/create', [SaleController::class, 'create'])->name('sales.create');
//Route::post('/sales', [SaleController::class, 'store'])->name('sales.store');
//Route::get('/sales/{sale}', [SaleController::class, 'show'])->name('sales.show');
//Route::get('/sales/{sale}/edit', [SaleController::class, 'edit'])->name('sales.edit');
//Route::put('/sales/{sale}', [SaleController::class, 'update'])->name('sales.update');
//Route::delete('/sales/{sale}', [SaleController::class, 'destroy'])->name('sales.destroy');

Route::resource('sales', SaleController::class);

//--

Route::get('/send-email', [SendEmailController::class, 'sendEmail'])->name('sale.send-email');