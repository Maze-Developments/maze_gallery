<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\UploadImageController;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [GalleryController::class, 'index'])->name('home');

Route::get('/upload', [UploadImageController::class, 'index'])->name('upload');

Route::post('/upload/photo', [UploadImageController::class, 'upload'])->name('upload_photo');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
