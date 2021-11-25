<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

Route::get('Admin/login', [AuthController::class, 'showLogin']);
Route::post('Admin/login', [AuthController::class, 'LoginProcess']);
Route::get('Admin/logout', [AuthController::class, 'logout']);

Route::get('Admin/beranda', [BerandaController::class, 'showBeranda']);
Route::prefix('Admin')->group(function(){
	Route::resource('produk', ProdukController::class);
	Route::post('produk/filter', [ProdukController::class, 'filter']);
	Route::resource('user', UserController::class);
});
