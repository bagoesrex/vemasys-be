<?php

use App\Http\Controllers\API\AdminBookingHistoryController;
use App\Http\Controllers\API\AdminBookingPendingController;
use App\Http\Controllers\API\AdminBookingRequestController;
use App\Http\Controllers\API\MasterDataController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\API'], function () {
    Route::post('register', 'AuthenticationController@register');
    Route::post('login', 'AuthenticationController@login');

    Route::middleware(['auth:sanctum'])->group(function () {
        Route::get('get-user', 'AuthenticationController@userInfo');
        Route::post('logout', 'AuthenticationController@logOut');

        Route::middleware('role:admin')->group(function () {
            Route::post('admin/bookings/request', [AdminBookingRequestController::class, 'store']);
            Route::get('admin/bookings/pending', [AdminBookingPendingController::class, 'index']);
            Route::get('admin/bookings/history', [AdminBookingHistoryController::class, 'index']);
        });

        Route::get('vehicles', [MasterDataController::class, 'vehicles']);
        Route::get('drivers', [MasterDataController::class, 'drivers']);
        Route::get('regions', [MasterDataController::class, 'regions']);
        Route::get('users', [MasterDataController::class, 'users']);
        Route::get('fuel-logs', [MasterDataController::class, 'fuellogs']);
        Route::get('vehicle-services', [MasterDataController::class, 'services']);
        Route::get('vehicle-owners', [MasterDataController::class, 'owners']);
    });
});
