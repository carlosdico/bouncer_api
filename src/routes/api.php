<?php

use carlosdico\BouncerApi\Controllers\BouncerController;
use Illuminate\Support\Facades\Route;

Route::prefix('bouncer')->middleware('auth:sanctum')->group(function () {
    Route::post('/assign-role', [BouncerController::class, 'assignRole']);
    Route::post('/revoke-role', [BouncerController::class, 'revokeRole']);
    Route::post('/give-permission', [BouncerController::class, 'givePermission']);
    Route::post('/revoke-permission', [BouncerController::class, 'revokePermission']);
});
