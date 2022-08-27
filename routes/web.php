<?php

use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\PaketController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PetaController;
use App\Http\Controllers\Admin\TokoController;
use App\Http\Controllers\PetaController as Peta;

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


Route::get('/', [Peta::class, 'index']);
Route::get('/peta/{peta:nama}',[Peta::class,'show'])->name('peta.show');

Auth::routes();
Route::middleware(['auth'])->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/admin/peta', [PetaController::class, 'index'])->name('adminPeta.index');
    Route::get('/admin/peta/{peta:nama}', [PetaController::class, 'show'])->name('adminPeta.show');

    Route::resource('/admin/toko', TokoController::class);
    Route::resource('/admin/layanan', LayananController::class);
    Route::resource('/admin/paket', PaketController::class);

});
