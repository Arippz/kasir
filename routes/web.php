<?php

use App\Http\Controllers\Admin\CashierController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



    Route::get('/tes', function () {
        return view ('pages.admin.cashier.edit');
    });


Route::middleware('auth')->group(function(){
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/kasir', [CashierController::class, 'index'])->name('cashier.index');
    Route::get('/create', [CashierController::class, 'create']);
    Route::get('/cashier/{id}/edit', [CashierController::class, 'edit'])->name('cashier.edit');
    

    // CSRF

    Route::post('/cashier', [CashierController::class, 'store'])->name('cashier.store');
    Route::put('/cashier/{id}', [CashierController::class, 'update'])->name('cashier.update');
    Route::get('/cashier/{id}', [CashierController::class, 'destroy'])->name('cashier.destroy');
});

Auth::routes(['register' =>false]);

