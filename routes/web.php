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
        Route::prefix('/financiero')->group(function () {
            Route::get('/tipo-transaccion', function () {
                return view('livewire.configuracion.financiero.tipo-transaccion.index');
            })->name('tipo-transaccion');
            Route::get('/generica', function () {
                return view('livewire.configuracion.financiero.generica.index');
            })->name('generica');
            Route::get('/sub-generica-nivel-1', function () {
                return view('livewire.configuracion.financiero.sub-generica-nivel-1.index');
            })->name('sub-generica-nivel-1');
            Route::get('/sub-generica-nivel-2', function () {
                return view('livewire.configuracion.financiero.sub-generica-nivel-2.index');
            })->name('sub-generica-nivel-2');
            Route::get('/especifica-nivel-1', function () {
                return view('livewire.configuracion.financiero.especifica-nivel-1.index');
            })->name('especifica-nivel-1');
            Route::get('/especifica-nivel-2', function () {
                return view('livewire.configuracion.financiero.especifica-nivel-2.index');
            })->name('especifica-nivel-2');
        });
        Route::prefix('/contabilidad')->group(function () {
            Route::get('/cuentas', function () {
                return view('livewire.configuracion.contable.cuentas.index');
            })->name('cuentas');
        });
    });
    Route::prefix('/contable')->group(function () {
        Route::get('/caja-bancos', function () {
            return view('livewire.contable.caja-bancos.index');
        })->name('caja-bancos');
    });
});

require __DIR__.'/auth.php';
