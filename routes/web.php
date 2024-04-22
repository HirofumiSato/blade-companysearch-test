<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\CompanyController::class, 'index']);
Route::post('/searchbyprefecture/{prefecture_name}', [App\Http\Controllers\CompanyController::class, 'search_company_by_prefecture']);