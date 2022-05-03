<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\ProductsDealerController::class, 'index']);

Route::get('/home', [App\Http\Controllers\ApiProductsController::class, 'crear'])->name('form');

Route::get('/insertProd', [App\Http\Controllers\InsertProdDealerController::class, 'index']);
