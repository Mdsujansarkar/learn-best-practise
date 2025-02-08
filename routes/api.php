<?php 
declare(strict_types=1);

use App\Http\Controllers\PostController;
use App\Http\Controllers\UrlShortnerController;
use Illuminate\Support\Facades\Route;

Route::post('/url/short', [UrlShortnerController::class, 'store']);
Route::get('/url/short/show/{id}', [UrlShortnerController::class, 'show']);
Route::get('/{shortUrl}', [UrlShortnerController::class, 'shortUrlshow']);
Route::get('/url/short', [UrlShortnerController::class, 'index']);
Route::put('/url/short/edit/{id}', [UrlShortnerController::class, 'update']);
Route::delete('/url/short/delete/{id}', [UrlShortnerController::class, 'destroy']);
