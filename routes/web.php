<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Dealers\ProductsDealerController::class, 'index'])->name('realHome'); 

Route::get('/home', [App\Http\Controllers\Queries\ApiProductsController::class, 'crear'])->name('form');

Route::get('/insertProd', [App\Http\Controllers\Dealers\InsertProdDealerController::class, 'index'])->name('insertProd');

Route::get('/insertResult', [App\Http\Controllers\Inserts\InsertProdController::class, 'crear'])->name('insertForm');

Route::get('/updateResult', [App\Http\Controllers\Updates\UpdateProdController::class, 'update'])->name('updateForm');
