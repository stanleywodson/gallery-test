<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::prefix('galeria')->group(function () {

    Route::get('/', [GalleryController::class, 'index'])->name('gallery.index');
    Route::post('/', [GalleryController::class, 'uploadimages'])->name('gallery.uploadimages');
    
    Route::get('{directory}/deldir', [GalleryController::class, 'destroyFolder'])->name('gallery.deldir'); 
    Route::get('{id}/destroy', [GalleryController::class, 'destroy'])->name('gallery.destroy');
    Route::post('makedir', [GalleryController::class, 'makeDirectorie'])->name('gallery.makedir');
});

Route::get('/show/{directory}', [GalleryController::class, 'showGallery']); //rota teste tenho que voltar ela pra gallery

