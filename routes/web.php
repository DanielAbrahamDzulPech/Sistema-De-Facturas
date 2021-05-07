<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacturasUnicasController;
use App\Http\Controllers\FacturasProveedorController;
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

// Route::get('facturas', function () {
//     return view('facturas');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('Facturas', 'App\Http\Controllers\FacturasProveedorController');

Route::resource('facturas', 'App\Http\Controllers\FacturasUnicasController');
