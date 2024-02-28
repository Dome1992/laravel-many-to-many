<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// IMPORTIAMO IL SUO CONTROLLER
use App\Http\Controllers\ApiController;

Route::group(['prefix' => '/v1'], function() {

    Route::get('test', [ApiController::class, 'getTest'])
        -> name('api.test');

});
