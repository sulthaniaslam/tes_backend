<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SalesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/item',[ItemController::class,'getItem'])->name('get.item');
Route::post('/item',[ItemController::class,'insertItem'])->name('insert.item');

Route::get('/customer',[CustomerController::class,'getCustomer'])->name('get.customer');
Route::post('/customer',[CustomerController::class,'insertCustomer'])->name('insert.customer');

Route::get('/sales',[SalesController::class,'getSales'])->name('get.sales');
Route::post('/sales',[SalesController::class,'insertSales'])->name('insert.sales');
Route::get('/cek_stok/{id}/{qty}',[SalesController::class,'cekStok'])->name('cek.stok');





Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
