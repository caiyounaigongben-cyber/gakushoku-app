<?php

use App\Http\Controllers\MealController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/meals');
Route::resource('meals', MealController::class)->except('show');