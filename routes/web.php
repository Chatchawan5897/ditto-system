<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\UserOrgsController;

use App\Http\Controllers\UserController;

foreach (glob(app_path('Modules/*/routes.php')) as $routeFile) {
    require $routeFile;
}

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login')
    ->middleware('guest');

Route::post('/login', [AuthController::class, 'doLogin'])
    ->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');


Route::get('/', function () {
    return auth()->check()
        ? redirect()->route('dashboard.index')
        : redirect()->route('login');
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [HomeController::class, 'index'])
        ->name('dashboard.index');


    // ทำการ  Load routes ของ Modules Asset
    require base_path('app/Modules/Asset/routes.php');

    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('user-orgs', [UserOrgsController::class, 'index'])->name('user_orgs.index');
});
