<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StrukturController;
use App\Http\Controllers\Admin\Register\RegisterKTAController;
use App\Http\Controllers\Admin\Master_data\AnggotaController;
use App\Http\Controllers\Admin\Master_data\AdminController;
use App\Http\Controllers\Admin\Master_data\ClubController;
use App\Http\Controllers\Admin\Master_data\KetuaController;
use App\Http\Controllers\Depan\HomeController;
use App\Http\Controllers\Depan\RegistrasiwebController;
use App\Http\Controllers\Depan\Informasi\BeritawebController;
use App\Http\Controllers\Depan\Informasi\EventwebController;
use App\Http\Controllers\Depan\Tentang\SejarahwebController;
use App\Http\Controllers\Depan\Tentang\StrukturwebController;
use App\Http\Controllers\Depan\Tentang\VisimisiwebController;
use App\Http\Controllers\Depan\KontakController;
use App\Http\Controllers\Depan\Media\FotowebController;
use App\Http\Controllers\Ketua\ClubKetuaController;
use App\Models\MasterData\KetuaClub;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Admin
Route::prefix('admin')->middleware('auth:admin')->group(function () {
    // dashboard
    Route::get('dashboard', [DashboardController::class, 'index']);
    // Unduhan
    Route::delete('RegisterKTA/{dokumen}',[RegisterKTAController::class,'destroy']);
    Route::put('RegisterKTA/{dokumen}',[RegisterKTAController::class, 'update']);
    Route::resource('RegisterKTA', RegisterKTAController::class);
    // Struktur Organisasi
    Route::resource('struktur', StrukturController::class);
    // data berita start
    Route::delete('berita/{berita}', [BeritaController::class, 'delete']);
    Route::put('berita/{berita}', [BeritaController::class, 'update']);
    Route::resource('berita', BeritaController::class);
    // data event start
    Route::resource('event', EventController::class);
    // data Galeri start
    Route::resource('galeri', GaleriController::class);
    // data Galeri start
    Route::resource('profil', ProfilController::class);
    // data Admin Start
    Route::resource('admin', AdminController::class);
    // club
    Route::resource('club', ClubController::class);
    // Anggota
    Route::get('anggota', [AnggotaController::class,'indexAnggota']);
    // Ketua
    Route::put('ketua_club/{ketua}', [KetuaController::class,'update']);
    Route::delete('ketua_club/{ketua}', [KetuaController::class,'destroy']);
    Route::resource('ketua_club', KetuaController::class);
    // Anggota
    Route::put('anggota/{anggota}', [AnggotaController::class, 'update']);
    Route::resource('anggota', AnggotaController::class);
    Route::put('anggota/tolak/{anggota}',[AnggotaController::class, 'tolak']);
    Route::put('anggota/terima/{anggota}',[AnggotaController::class, 'terima']);
});

Route::prefix('ketua')->middleware('auth:ketua')->group(function () {
    Route::get('profil', [DashboardController::class, 'profil']);
    Route::get('dashboard', [DashboardController::class, 'dashboardKetua']);
    Route::resource('anggota', ClubKetuaController::class);
});

// Tampilan Depan
Route::get('/', [HomeController::class, 'index']);
// beranda
Route::get('beranda', [HomeController::class, 'index']);
// galeri
Route::get('foto', [FotowebController::class, 'galeri']);
// berita
Route::get('berita', [BeritawebController::class, 'berita']);
Route::get('beritaall', [BeritawebController::class, 'beritaall']);
Route::get('berita/detail/{berita}', [BeritawebController::class, 'beritadetail']);
// Event
Route::post('pendaftar', [EventwebController::class, 'tambahpendaftar']);
Route::get('event', [EventwebController::class, 'event']);
Route::get('event_detail/{event}', [EventwebController::class, 'eventDetail']);
// Sejarah
Route::get('sejarah', [SejarahwebController::class, 'sejarah']);
// Visi-Misi
Route::get('visi_misi', [VisimisiwebController::class, 'visi_misi']);
// Struktur Pengurus
Route::get('struktur_organisasi', [StrukturwebController::class, 'struktur_organisasi']);
// Kontak
Route::get('kontak', [KontakController::class, 'kontak']);
// registerKTA
Route::get('register', [RegistrasiwebController::class,'informasi']);
