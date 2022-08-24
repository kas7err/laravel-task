<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', [InquiryController::class, 'index']);
Route::post('/contact', [InquiryController::class, 'create']);

