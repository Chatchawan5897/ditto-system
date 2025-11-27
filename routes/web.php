<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

// ทำการ  Load routes ของ Modules Asset
require base_path('app/Modules/Asset/routes.php');

// =============================
// LOGIN / LOGOUT
// =============================
Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login')
    ->middleware('guest');

Route::post('/login', [AuthController::class, 'doLogin'])
    ->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');


// =============================
// DEFAULT ROUTE
// =============================
// ถ้ายังไม่ login → ไปหน้า login
// ถ้า login แล้ว → ไป dashboard
Route::get('/', function () {
    return auth()->check()
        ? redirect()->route('dashboard.index')
        : redirect()->route('login');
});


// =============================
// PROTECTED ROUTES
// =============================
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [HomeController::class, 'index'])
        ->name('dashboard.index');
});
