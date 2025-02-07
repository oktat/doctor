<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PatientController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('patients', [PatientController::class, 'index']);
Route::get('patient', [PatientController::class, 'show']);
Route::post('newpatient', [PatientController::class, 'store']);
Route::put('modpatient', [PatientController::class, 'update']);
Route::delete('destpatient', [PatientController::class, 'destroy']);

