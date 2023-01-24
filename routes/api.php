<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PartnerController;
use App\Http\Controllers\Api\UnitController;

Route::apiResource('partners', PartnerController::class)->names('api.partners');

Route::apiResource('units', UnitController::class)->names('api.units');
