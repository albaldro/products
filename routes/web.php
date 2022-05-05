<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Dealers\ProductsDealerController::class, 'index'])->name('realHome'); 

Route::get('/home', [App\Http\Controllers\Queries\ApiProductsController::class, 'crear'])->name('form');

Route::get('/insertProd', [App\Http\Controllers\Dealers\InsertProdDealerController::class, 'index'])->name('insertProd');

Route::get('/insertResult', [App\Http\Controllers\Inserts\InsertProdController::class, 'crear'])->name('insertForm');

Route::get('/updateResult', [App\Http\Controllers\Updates\UpdateProdController::class, 'update'])->name('updateForm');

Route::get('/deleteResult', [App\Http\Controllers\Deletes\DeleteProdController::class, 'delete'])->name('deleteForm');

Route::get('/trash', [App\Http\Controllers\Dealers\TrashDealerController::class, 'index'])->name('trashHome');

Route::get('/trashView', [App\Http\Controllers\Queries\ApiTrashProductsController::class, 'crear'])->name('trashView');

Route::get('/trashDeleteResult', [App\Http\Controllers\Deletes\TrashDeleteProdController::class, 'delete'])->name('trashForm');

Route::get('/trashRestoreResult', [App\Http\Controllers\Deletes\TrashRestoreProdController::class, 'restore'])->name('trashRestForm');

Route::get('/insertProvResult', [App\Http\Controllers\Inserts\InsertProvController::class, 'crear'])->name('insertProvForm');