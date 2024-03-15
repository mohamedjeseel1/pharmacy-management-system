<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MedicineController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//owner's access
Route::group(['middleware' => 'is.owner'], function () {
    Route::post('/customer', [CustomerController::class, 'store']);
    Route::post('/medicine', [MedicineController::class, 'store']);
});

//manager's access
Route::group(['middleware' => 'is.manager'], function () {
    Route::put('/medicine/{id}', [MedicineController::class, 'update']);
    Route::delete('/medicine/{id}', [MedicineController::class, 'delete']);
});

//chasier's access
Route::group(['middleware' => 'is.chasier'], function () {
    Route::put('/customer/{id}', [CustomerController::class, 'update']);
    Route::delete('/customer/{id}', [CustomerController::class, 'delete']);
});