<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\KaryawanController;


Route::get('/beranda', function () {
    return view ('beranda');
})->name('beranda');

Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

Route::get('/kelas', function () {
    return view('kelas');
})->name('kelas');

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
})->name('tentang-kami');

Route::get('/masuk', function () {
    return view('masuk');
})->name('masuk');

Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');

Route::get('/kelasInggris', function () {
    return view('kelasInggris');
})->name('kelasInggris');

Route::get('/kelasIndonesia', function () {
    return view('kelasIndonesia');
})->name('kelasIndonesia');

Route::get('/kelasMandarin', function () {
    return view('kelasMandarin');
})->name('kelasMandarin');

Route::get('/kelasJepang', function () {
    return view('kelasJepang');
})->name('kelasJepang');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/profilKamu', function () {
    return view('profilKamu');
})->name('profilKamu');

Route::get('/deskripsiKelas', function () {
    return view('deskripsiKelas');
})->name('deskripsiKelas');

Route::get('/jadwalKelas', function () {
    return view('jadwalKelas');
})->name('jadwalKelas');

Route::get('/ubahProfile', function () {
    return view('ubahProfile');
})->name('ubahProfile');

Route::get('/berhasilDaftar', function () {
    return view('berhasilDaftar');
})->name('berhasilDaftar');

Route::get('/historyKamu', function () {
    return view('historyKamu');
})->name('historyKamu');

Route::get('/registeruser', function () {
    return view('registeruser');
})->name('registeruser');

Route::get('/createuser', function () {
    return view('createuser');
})->name('createuser');

Route::get('/berandaAfter', function () {
    return view('berandaAfter');
})->name('berandaAfter');

Route::get('/galeriAft', function () {
    return view('galeryAft');
})->name('galeryAft');

Route::get('/kelasAft', function () {
    return view('kelasAft');
})->name('kelasAft');

Route::get('/tentang-kamiAft', function () {
    return view('tentang-kamiAft');
})->name('tentang-kamiAft');

Route::get('/', [userController::class, 'index']) -> name('index');
Route::get('/createuser', [userController::class, 'create']) -> name('create');
Route::post('/storeuser', [userController::class, 'store']) -> name('store');
Route::get('/ubahProfile', [userController::class, 'showProfile'])->name('ubahProfile');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/updateuser/{id}', [UserController::class, 'update'])->name('update');
