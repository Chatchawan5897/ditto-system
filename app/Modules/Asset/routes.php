<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Asset\Controllers\AssetController;

// GROUP MODULE
Route::prefix('assets')->name('asset.')->middleware('auth')->group(function () {

    Route::get('/', [AssetController::class, 'index'])->name('asset.index');
    Route::get('/create', [AssetController::class, 'create'])->name('asset.create');
    Route::post('/store', [AssetController::class, 'store'])->name('asset.store');

    Route::get('/{id}/edit', [AssetController::class, 'edit'])->name('asset.edit');
    Route::put('/{id}/update', [AssetController::class, 'update'])->name('asset.update');
});
