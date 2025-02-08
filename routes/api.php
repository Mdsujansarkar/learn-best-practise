<?php 
declare(strict_types=1);

use App\Http\Controllers\PostController;
use App\Http\Controllers\UrlShortnerController;
use Illuminate\Support\Facades\Route;

Route::post('/url/short', [UrlShortnerController::class, 'store']);
Route::get('url/short', [UrlShortnerController::class, 'index']);
