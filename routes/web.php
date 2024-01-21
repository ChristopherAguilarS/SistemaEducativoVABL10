<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

/* Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile'); */

Route::middleware(['auth'])->group(function () {
    Route::view('profile', 'profile')
    ->name('profile');
    Route::prefix('/configuracion')->group(function () {
        Route::prefix('/contabilidad')->group(function () {
            Route::get('/cuentas', function () {
                return view('livewire.contable.cuentas.index');
            })->name('cuentas');
        });
    });
});

require __DIR__.'/auth.php';
