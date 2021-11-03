<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;
use Illuminate\Routing\Route as RoutingRoute;

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

// Route::get('dashboard', function () {
//     return view('admindashboard');
// });

Route::get('table', function () {
    return view('table');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
->name('dashboard');


Route::get('/produk', [ProdukController::class, 'index'])
->name('dataProduk');

Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy'])->name('produkDelete');