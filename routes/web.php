<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use Illuminate\Support\Facades\Route;


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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [ProductoController::class, 'index'])->name('home');


//Route::middleware('auth')->group(function() {
        //Route::get('producto/favoritos', [ProductoController::class, 'favoritos'])->name('producto.favoritos');
        
        Route::resource('producto', ProductoController::class);
        Route::resource('proveedor', ProveedorController::class);
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
