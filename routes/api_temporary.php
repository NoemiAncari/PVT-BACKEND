<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\AuthenticationException;

Route::group([
    'middleware' => 'api',
    'prefix' => 'temporary'
], function () {
    // Rutas autenticadas con token
    Route::group([
        'middleware' => ['auth:sanctum']
    ], function () {
        Route::post('upload_copy_person_senasir', [App\Http\Controllers\Temporary\CopyPersonSenasirController::class, 'upload_copy_person_senasir']);
        Route::post('data_senasir_type_spouses', [App\Http\Controllers\Temporary\CopyPersonSenasirController::class, 'data_senasir_type_spouses']);
        Route::post('data_senasir_type_affiliate', [App\Http\Controllers\Temporary\CopyPersonSenasirController::class, 'data_senasir_type_affiliate']);
    });
});

