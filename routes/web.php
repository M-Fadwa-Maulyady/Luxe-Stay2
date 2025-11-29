<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenginapanController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/login',  [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register',  [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/', [PenginapanController::class, 'landing'])->name('landing');

Route::get('/stay/{kategori}', [PenginapanController::class, 'stayByCategory'])
        ->name('stay.list');

Route::get('/stay/detail/{id}', [PenginapanController::class, 'detail'])
        ->name('stay.detail');

Route::get('/stay/{id}', [PenginapanController::class, 'detail']);
 

/*
|--------------------------------------------------------------------------
| CHECKOUT WAJIB LOGIN
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    // Checkout tampilan
    Route::get('/stay/checkout/{id}', [PenginapanController::class, 'checkout'])
        ->name('stay.checkout');

    // Checkout simpan booking
    Route::post('/stay/checkout/{id}', [PenginapanController::class, 'checkoutStore'])
        ->name('stay.checkout.store');


    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

});

/*
|--------------------------------------------------------------------------
| STATIC VIEW PAGES
|--------------------------------------------------------------------------
*/
Route::view('/welcome', 'welcome');
Route::view('/hotel', 'detail.hotel');
Route::view('/villa', 'detail.villa');
Route::view('/apartemen', 'detail.apartemen');

Route::view('/hilton', 'check.hilton');
Route::view('/radisson', 'check.radisson');
Route::view('/hawai', 'check.hawai');
Route::view('/tropis', 'check.tropis');
Route::view('/syariah', 'check.syariah');
Route::view('/center', 'check.center');


/*
|--------------------------------------------------------------------------
| USER ROUTES
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/home', [PenginapanController::class, 'landing'])->name('home.user');

    Route::get('/history', [BookingController::class, 'history'])
        ->name('user.history');

    Route::post('/history/rating/{id}', [BookingController::class, 'addRating'])
        ->name('user.history.rating');
});


/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

        // Kategori CRUD
        Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
        Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
        Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
        Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
        Route::put('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
        Route::delete('/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('kategori.delete');

        // Fasilitas CRUD
        Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');
        Route::get('/fasilitas/create', [FasilitasController::class, 'create'])->name('fasilitas.create');
        Route::post('/fasilitas/store', [FasilitasController::class, 'store'])->name('fasilitas.store');
        Route::get('/fasilitas/edit/{id}', [FasilitasController::class, 'edit'])->name('fasilitas.edit');
        Route::put('/fasilitas/update/{id}', [FasilitasController::class, 'update'])->name('fasilitas.update');
        Route::delete('/fasilitas/delete/{id}', [FasilitasController::class, 'destroy'])->name('fasilitas.delete');

        // Penginapan CRUD
        Route::get('/penginapan', [PenginapanController::class, 'index'])->name('penginapan');
        Route::get('/penginapan/create', [PenginapanController::class, 'create'])->name('penginapan.create');
        Route::post('/penginapan/store', [PenginapanController::class, 'store'])->name('penginapan.store');
        Route::get('/penginapan/edit/{id}', [PenginapanController::class, 'edit'])->name('penginapan.edit');
        Route::put('/penginapan/update/{id}', [PenginapanController::class, 'update'])->name('penginapan.update');
        Route::delete('/penginapan/delete/{id}', [PenginapanController::class, 'destroy'])->name('penginapan.delete');

        // Rating List
        Route::get('/rating', [RatingController::class, 'index'])->name('rating.index');

        // Booking Admin
        Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
        Route::post('/booking/status/{id}', [BookingController::class, 'updateStatus'])->name('booking.status');
    });

/*
|--------------------------------------------------------------------------
| CONTACT
|--------------------------------------------------------------------------
*/
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
