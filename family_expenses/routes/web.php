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

Route::post('/expenses/updateOrCreate', [ExpensesController::class, 'updateOrCreate'])->name('expenses.updateOrCreate');

Route::post('/expenses', [ExpensesController::class, 'store'])->name('expenses.store');

Route::get('/expenses/{expense}/edit', [ExpensesController::class, 'edit'])->name('expenses.edit');

Route::patch('/expenses/{expense}', [ExpensesController::class, 'update'])->name('expenses.update');

Route::delete('/expenses/{expense}', [ExpensesController::class, 'destroy'])->name('expenses.destroy');

Route::get('/sum', [ExpensesController::class, 'sum'])->name('expenses.sum');

Route::get('/cancel', [ExpensesController::class, 'cancel'])->name('expenses.cancel');







