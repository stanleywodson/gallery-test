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
    Route::post('makedir', [GalleryController::class, 'makeDirectorie'])->name('gallery.makedir');
    Route::get('show/{directory}', [GalleryController::class, 'showGallery'])->name('gallery.show');
    Route::get('deldir/{directory}', [GalleryController::class, 'destroyFolder'])->name('gallery.deldir'); 
    Route::get('destroy/{nameimg}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
    
    
});



Route::get('/test', function(){
    return view('test');
});

