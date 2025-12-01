<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Asset\Controllers\AssetController;
use App\Modules\Asset\Controllers\ItemController;

// GROUP MODULE ITEMS
Route::prefix('items')->name('items.')->middleware('auth')->group(function () {

    Route::get('/', [ItemController::class, 'index'])->name('index');
    Route::get('/create', [ItemController::class, 'create'])->name('create');
    Route::post('/store', [ItemController::class, 'store'])->name('store');

    Route::get('/{id}', [ItemController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [ItemController::class, 'edit'])->name('edit');
    Route::put('/{id}/update', [ItemController::class, 'update'])->name('update');
    Route::delete('/{id}/delete', [ItemController::class, 'destroy'])->name('destroy');
});

// GROUP MODULE ASSETS
Route::prefix('assets')->name('asset.')->middleware('auth')->group(function () {

    Route::get('/', [AssetController::class, 'index'])->name('index');
    Route::get('/create', [AssetController::class, 'create'])->name('create');
    Route::post('/store', [AssetController::class, 'store'])->name('store');

    Route::get('/{id}/edit', [AssetController::class, 'edit'])->name('edit');
    Route::put('/{id}/update', [AssetController::class, 'update'])->name('update');
});
