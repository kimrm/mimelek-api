<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\NounController;
use App\Http\Controllers\Api\V1\AdjectiveController;
use App\Http\Controllers\Api\V1\UserController;

Route::middleware('auth:sanctum')->group(function () {

    Route::apiResource('nouns', NounController::class);
    Route::apiResource('adjectives', AdjectiveController::class);
    Route::apiResource('users', UserController::class);
});
