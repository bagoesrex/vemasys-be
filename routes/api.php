<?php

use App\Http\Controllers\API\MasterDataController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\API'], function () {
    Route::post('register', 'AuthenticationController@register');
    Route::post('login', 'AuthenticationController@login');

    Route::middleware(['auth:sanctum'])->group(function () {
        Route::get('get-user', 'AuthenticationController@userInfo');
        Route::post('logout', 'AuthenticationController@logOut');

        Route::get('vehicles', [MasterDataController::class, 'vehicles']);
        Route::get('drivers', [MasterDataController::class, 'drivers']);
        Route::get('regions', [MasterDataController::class, 'regions']);
        Route::get('users', [MasterDataController::class, 'users']);
        Route::get('fuel-logs', [MasterDataController::class, 'fuellogs']);
        Route::get('vehicle-services', [MasterDataController::class, 'services']);
        Route::get('vehicle-owners', [MasterDataController::class, 'owners']);
    });
});
