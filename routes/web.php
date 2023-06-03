<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlShortenerController;

Route::get('/', [UrlShortenerController::class, 'index']);

Route::post('/shorten', [UrlShortenerController::class, 'shorten']);

Route::get('/{code}', [UrlShortenerController::class, 'redirect']);