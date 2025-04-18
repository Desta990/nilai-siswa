<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\Users\SiswaUserController;
use App\Http\Controllers\Users\GaleriUserController;



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


Route::get('/galeri-user', [GaleriUserController::class, 'index'])->name('user.galeri.index');
Route::get('/galeri-user/{id}', [GaleriUserController::class, 'show'])->name('user.galeri.show');


Route::get('/siswaa', [SiswaUserController::class, 'index'])->name('user.siswa.index');
Route::get('/siswaa/{nisn}', [SiswaUserController::class, 'show'])->name('user.siswa.show');




Route::get('/', function () {
    return view('welcome'); 
})->name('home');

Route::get('/about', function () {
    return view('about'); 
})->name('about');



Route::get('/contact', function () {
    return view('contact'); 
})->name('contact');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('siswa', SiswaController::class);



Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai.index');
Route::get('/nilai/create/{siswa_id?}', [NilaiController::class, 'create'])->name('nilai.create');
Route::post('/nilai/store', [NilaiController::class, 'store'])->name('nilai.store');
Route::get('/nilai/{nilai}/edit', [NilaiController::class, 'edit'])->name('nilai.edit');
Route::put('/nilai/{nilai}', [NilaiController::class, 'update'])->name('nilai.update');
Route::delete('/nilai/{nilai}', [NilaiController::class, 'destroy'])->name('nilai.destroy');

Route::resource('galeri', GaleriController::class);

Route::resource('guru', GuruController::class);




require __DIR__.'/auth.php';
