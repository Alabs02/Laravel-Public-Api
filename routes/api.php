<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function () {
    Route::get('/cases', [\App\Http\Controllers\Api\CaseController::class, 'index']);
});
