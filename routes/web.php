<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;


Route::get('/', function () {
    return view('welcome');
});


require __DIR__ . '/auth.php';

Route::prefix('galeria')->middleware(['auth'])->group(function () {

    Route::get('/', function(){
        return view('admin.dashboard.home');
    });

    Route::get('adicionarfoto', [GalleryController::class, 'showFormImages'])->name('gallery.showFormImages');
    Route::post('adicionarfoto', [GalleryController::class, 'addimages'])->name('gallery.addimages');
    Route::get('makedir', [GalleryController::class, 'showDir'])->name('gallery.showdir');
    Route::post('makedir', [GalleryController::class, 'makeDirectorie'])->name('gallery.makedir');
    Route::get('folders', [GalleryController::class, 'delfoto'])->name('gallery.folders');
    Route::get('show/{directory}', [GalleryController::class, 'showGallery'])->name('gallery.show');
    Route::get('deldir/{directory}', [GalleryController::class, 'destroyFolder'])->name('gallery.deldir'); 
    Route::get('destroy/{nameimg}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
    
    
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');



// Route::get('/test', function(){
//     return view('test');
// });

