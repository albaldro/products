<?php

use Illuminate\Support\Facades\Route;

//Products
Route::get('/', [App\Http\Controllers\Dealers\ProductsDealerController::class, 'index'])->name('realHome'); 

Route::get('/Update/home', [App\Http\Controllers\Queries\ApiProductsController::class, 'crear'])->name('form');

Route::get('/Insert/insertProd', [App\Http\Controllers\Dealers\InsertProdDealerController::class, 'index'])->name('insertProd');

Route::get('/Result/insertResult', [App\Http\Controllers\Inserts\InsertProdController::class, 'crear'])->name('insertForm');

Route::get('/Result/updateResult', [App\Http\Controllers\Updates\UpdateProdController::class, 'update'])->name('updateForm');

Route::get('/Result/deleteResult', [App\Http\Controllers\Deletes\DeleteProdController::class, 'delete'])->name('deleteForm');

Route::get('/trash', [App\Http\Controllers\Dealers\TrashDealerController::class, 'index'])->name('trashHome');

Route::get('/Update//trashView', [App\Http\Controllers\Queries\ApiTrashProductsController::class, 'crear'])->name('trashView');

Route::get('/Result/trashDeleteResult', [App\Http\Controllers\Deletes\TrashDeleteProdController::class, 'delete'])->name('trashForm');

Route::get('/Result/trashRestoreResult', [App\Http\Controllers\Deletes\TrashRestoreProdController::class, 'restore'])->name('trashRestForm');

Route::get('/searchProd', [\App\Http\Controllers\Queries\SearchProdQueryController::class, 'search'])->name('searchProd');

Route::get('/searchProv', [\App\Http\Controllers\Queries\SearchProvQueryController::class, 'search'])->name('searchProv');


//Providers
Route::get('/Update/homeProv', [App\Http\Controllers\Queries\ApiProvidersController::class, 'crear'])->name('provForm');

Route::get('/insert/insertProv', function() {
    return view('Insert.insertProv');
});

Route::get('/insertprov', [App\Http\Controllers\Inserts\InsertProvController::class, 'crear'])->name('insertProvForm');

Route::get('/Result/updateProvResult', [App\Http\Controllers\Updates\UpdateProvController::class, 'update'])->name('updateProvForm');

Route::get('/Result/deleteProvResult', [App\Http\Controllers\Deletes\DeleteProvController::class, 'delete'])->name('deleteProvForm');

Route::get('/trashProv', [App\Http\Controllers\Dealers\TrashDealerController::class, 'indexProv'])->name('trashProvHome');

Route::get('/trashProvView', [App\Http\Controllers\Queries\ApiTrashProvidersController::class, 'crear'])->name('trashProvView');

Route::get('/Result/trashDeleteProvResult', [App\Http\Controllers\Deletes\TrashDeleteProvController::class, 'delete'])->name('trashProvForm');

Route::get('/Result/trashRestoreProvResult', [App\Http\Controllers\Deletes\TrashRestoreProvController::class, 'restore'])->name('trashRestProvForm');