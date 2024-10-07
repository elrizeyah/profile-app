<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profiles',[ProfileController::class, 'getProfiles']);
Route::get('/profiles/{1}',[ProfileController::class, 'getProfile']);

