<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource("/employ", EmployController::class);