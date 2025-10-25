<?php

use Illuminate\Support\Facades\Route;

// --- CONTROLLER ADMIN (CMS) ---
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController; 
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController; 
use App\Http\Controllers\Admin\SettingController;

// --- CONTROLLER AUTH ---
use App\Http\Controllers\Auth\LoginController;

// --- CONTROLLER CLIENT (MENGGUNAKAN ALIAS UNTUK MENGHINDARI KONFLIK) ---
use App\Http\Controllers\Client\HomeController as ClientHome;
use App\Http\Controllers\Client\ProductController as ProductClientController; 
use App\Http\Controllers\Client\PortfolioController; // BARU: Definisikan PortfolioController

/* -------------------------------------------------------------------
| 1. RUTE PUBLIK COMPANY PROFILE
| -------------------------------------------------------------------*/

// Halaman Utama
Route::get('/', [ClientHome::class, 'index'])->name('home');

// Rute Halaman Statis
Route::view('/about', 'client.about')->name('about');
Route::view('/services', 'client.services')->name('services');
Route::view('/contact', 'client.contact')->name('contact');

// REVISI: Ganti Route::view dengan Route::get yang memanggil Controller
Route::get('/portofolio', [PortfolioController::class, 'index'])->name('portofolio'); 

// --- RUTE DETAIL PRODUK KLIEN ---
Route::prefix('product')->name('product.')->group(function () {
    Route::get('custom-software-development', [ProductClientController::class, 'customSoftware'])->name('custom.software');
    Route::get('integrated-monitoring-solutions', [ProductClientController::class, 'monitoringSolutions'])->name('monitoring.solutions');
    Route::get('enterprise-digital-solutions', [ProductClientController::class, 'digitalSolutions'])->name('digital.solutions');
    Route::get('infrastructure-and-managed-services', [ProductClientController::class, 'infrastructureServices'])->name('infrastructure.services');
});
// ------------------------------


/* -------------------------------------------------------------------
| 2. RUTE AUTENTIKASI (PINTU MASUK CMS)
| -------------------------------------------------------------------*/

Route::middleware('guest')->group(function () {
    // Rute LOGIN
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');


/* -------------------------------------------------------------------
| 3. RUTE ADMIN DASHBOARD (CMS)
| -------------------------------------------------------------------*/

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    // Dashboard Utama: /admin
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // CRUD Resource
    Route::resource('products', ProductController::class)->except(['show'])->names('products');
    Route::resource('partners', PartnerController::class)->except(['show'])->names('partners');
    
    // Rute untuk Projects/Portofolio
    Route::resource('projects', ProjectController::class)->except(['show'])->names('projects');
    
    // Rute Layanan
    Route::resource('services', ServiceController::class)->except(['show'])->names('services');

    // Pengaturan Perusahaan (Single Record)
    Route::controller(SettingController::class)->name('settings.')->group(function () {
        Route::get('settings', 'show')->name('show');
        Route::put('settings', 'update')->name('update');
    });
});
