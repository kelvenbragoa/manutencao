<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\EquipmentFleetController;
use App\Http\Controllers\ExitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use App\Http\Middleware\Sanctum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('login',[AuthController::class,'login']);
Route::middleware([Sanctum::class])->group(function () {

    Route::post('logout',[AuthController::class,'logout']);


    Route::resource('user', UserController::class);
    Route::resource('equipments', EquipmentController::class);
    Route::resource('equipmentfleet', EquipmentFleetController::class);
    Route::resource('entrymovement', EntryController::class);
    Route::resource('exitmovement', ExitController::class);
    Route::resource('vehicles', VehicleController::class);

    Route::post('nextstage/{id}',[EntryController::class,'nextstage']);

    Route::get('dashboard',[DashboardController::class,'dashboard']);
    Route::get('dashboarddisponibilidade',[DashboardController::class,'dashboarddisponibilidade']);
    Route::get('movements',[EntryController::class,'movements']);
    Route::get('statistics',[DashboardController::class,'statistics']);



});