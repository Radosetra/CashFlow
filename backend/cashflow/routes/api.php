<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\LimiteController;
use App\Http\Controllers\ExpenseController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

/*-------- customer --------*/
Route::get('/customers',[CustomerController::class, 'index']);
Route::get('/customers/{id}',[CustomerController::class, 'show']);
Route::post('/customers',[CustomerController::class, 'store']);
Route::post('/customers/{id}',[CustomerController::class, 'update']);
Route::delete('/customers/{id}',[CustomerController::class, 'destroy']);


/*-------- income --------*/

Route::get('/incomes', [IncomeController::class, 'index']);
Route::get('/incomes/{id}', [IncomeController::class, 'show']);
Route::post('/incomes', [IncomeController::class, 'store']);
Route::post('/incomes/{id}', [IncomeController::class, 'update']);
Route::delete('/incomes/{id}', [IncomeController::class, 'destroy']);

/*-------- limite ---------*/

Route::resource('limites', LimiteController::class);

// other solution
Route::post('/limites/{id}', [LimiteController::class, 'update']);

/*-------- Categories -------*/ 
Route::get('/cat', [CategorieController::class, 'index']);
Route::post('/cat', [CategorieController::class, 'store']);
Route::post('/cat/{id}', [CategorieController::class, 'update']);
Route::delete('/cat/{id}', [CategorieController::class, 'destroy']);

/*-------- Expenses ---------*/
Route::apiResource('expenses', ExpenseController::class);
Route::post('/expenses', [ExpenseController::class, 'store']);