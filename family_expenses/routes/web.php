<?php

use App\Http\Controllers\ExpensesController;
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

Route::get('/expenses', [ExpensesController::class, 'index'])->name('expenses.index');

Route::get('/expenses/create', [ExpensesController::class, 'create'])->name('expenses.create');

Route::post('/expenses', [ExpensesController::class, 'store'])->name('expenses.store');


