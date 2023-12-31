<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\KontakController;

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

Route::get('/', function () {
    return view('FrontEnd.TK');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [AccountController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(PageController::class)->group(function() {
    Route::get('/profil', 'profil');
    Route::get('/dataGuru', 'dataGuru');
    Route::get('/galery', 'galery');
    Route::get('/kontak', 'kontak');
    Route::get('/pendaftaran', 'pendaftaran')->middleware(['auth', 'verified'])->name('pendaftaran');
});

Route::get('/admin/dashboard', function() {
    return view('admin.adminPage');
})->middleware(['auth', 'admin'])->name('adminDashboard');

Route::controller(AdminPageController::class)->group(function() {
    Route::get('/admin/menu', 'menu')->middleware(['auth', 'admin']);
    Route::get('/admin/pendaftaran', 'pendaftaran')->middleware(['auth', 'admin']);
});

Route::resource('guru', GuruController::class)->middleware(['auth', 'admin']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/pendaftaran/create', [PendaftaranController::class, 'create']);

Route::controller(KontakController::class)->group(function() {
    Route::post('/addPertanyaan', 'addPertanyaan');
    Route::get('/admin/showPertanyaan', 'showPertanyaan')->middleware(['auth', 'admin']);
});

require __DIR__.'/auth.php';
