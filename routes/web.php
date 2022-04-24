<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    return view('main');
})->name('main');

// Route::get('/dashboard', function () {
//     return view('product.list');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard',[ProductController::class,'index'])->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';

Route::middleware('auth')->group(function(){
//logout
Route::post('/logout',[AuthenticatedSessionController::class,'logout'])->name('logout');

//create and store
Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::post('/products/store',[ProductController::class,'store'])->name('products.store');

//edit and update
Route::get('/products/edit/{product}',[ProductController::class,'edit'])->name('products.edit');
Route::put('/products/edit/{product}',[ProductController::class,'update'])->name('products.update');

//delete
Route::delete('/products/delete/{product}',[ProductController::class,'destroy'])->name('products.delete');
});
