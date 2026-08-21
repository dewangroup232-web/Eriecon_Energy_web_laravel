<?php

use App\Http\Controllers\Api\ContentController;
use Illuminate\Support\Facades\Route;

Route::get('/hero-banners', [ContentController::class, 'banners']);
Route::get('/blogs', [ContentController::class, 'blogs']);
Route::get('/blogs/{slug}', [ContentController::class, 'blog']);
