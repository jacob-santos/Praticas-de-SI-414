<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmartphoneController;

Route::get('/smartphones', [SmartphoneController::class, 'show']); 
Route::post('/smartphones', [SmartphoneController::class, 'store']); 
Route::put('/smartphones/{id}', [SmartphoneController::class, 'edit']); 
Route::delete('/smartphones/{id}', [SmartphoneController::class, 'delete']); 
