<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/gallery/show',[GalleryController::class, 'showGallery'])->name('gallery.showGallery');
Route::get('/gallery',[GalleryController::class, 'index'])->name('gallery.index');
Route::post('/gallery',[GalleryController::class, 'uploadimages'])->name('gallery.uploadimages');
Route::get('/gallery/{id}/destroy', [GalleryController::class, 'destroy'])->name('gallery.destroy');
Route::get('/gallery/{directory}/deldir', [GalleryController::class, 'destroyFolder'])->name('gallery.deldir');
Route::post('/gallery/makedir', [GalleryController::class, 'makeDirectorie'])->name('gallery.makedir');


