<?php

use Illuminate\Support\Facades\Route;

// === CONTROLLER ADMIN ===
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\SettingController;

// === CONTROLLER AUTH ===
use App\Http\Controllers\Auth\LoginController;

// === CONTROLLER CLIENT ===
use App\Http\Controllers\Client\HomeController as ClientHome;
use App\Http\Controllers\Client\ProductController as ProductClientController;
use App\Http\Controllers\Client\PortfolioController;
use App\Http\Controllers\Client\ServiceController as ClientService;

/*
|--------------------------------------------------------------------------
| 1. RUTE PUBLIK (CLIENT)
|--------------------------------------------------------------------------
*/

// 🏠 Halaman Utama
Route::get('/', [ClientHome::class, 'index'])->name('home');

// ℹ️ Halaman Tentang Kami
Route::view('/about', 'client.about')->name('about');

// 🧰 Halaman Layanan
Route::get('/services', [ClientService::class, 'index'])->name('services');

// ☎️ Halaman Kontak
Route::view('/contact', 'client.contact')->name('contact');

// ======================================================================
// 💼 PORTOFOLIO (Studi Kasus / Project)
// ======================================================================

// Daftar Portofolio
Route::get('/portofolio', [PortfolioController::class, 'index'])->name('portofolio');

// Detail Portofolio berdasarkan slug
Route::get('/portofolio/{slug}', [PortfolioController::class, 'show'])->name('portofolio.show');

// ======================================================================
// 🧩 PRODUK (Products / Solutions)
// ======================================================================
Route::prefix('product')->name('product.')->group(function () {
    Route::get('custom-software-development', [ProductClientController::class, 'customSoftware'])->name('custom.software');
    Route::get('integrated-monitoring-solutions', [ProductClientController::class, 'monitoringSolutions'])->name('monitoring.solutions');
    Route::get('enterprise-digital-solutions', [ProductClientController::class, 'digitalSolutions'])->name('digital.solutions');
    Route::get('infrastructure-and-managed-services', [ProductClientController::class, 'infrastructureServices'])->name('infrastructure.services');
});

/*
|--------------------------------------------------------------------------
| 2. RUTE AUTENTIKASI (LOGIN CMS)
|--------------------------------------------------------------------------
*/

// Login Form (Guest Only)
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// Logout (Authenticated Users Only)
Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');

/*
|--------------------------------------------------------------------------
| 3. RUTE ADMIN DASHBOARD (CMS)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // CRUD Produk
    Route::resource('products', ProductController::class)->except(['show'])->names('products');

    // CRUD Partner
    Route::resource('partners', PartnerController::class)->except(['show'])->names('partners');

    // CRUD Project (Portofolio)
    Route::resource('projects', ProjectController::class)->except(['show'])->names('projects');

    // CRUD Layanan
    Route::resource('services', ServiceController::class)->except(['show'])->names('services');

    // Pengaturan Umum (Single Record)
    Route::controller(SettingController::class)->name('settings.')->group(function () {
        Route::get('settings', 'show')->name('show');
        Route::put('settings', 'update')->name('update');
    });
});
