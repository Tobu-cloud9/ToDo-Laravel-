<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

/*
Route::get('/', [HomeController::class, 'index']);
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addFolder', [App\Http\Controllers\HomeController::class, 'addFolder'])->name('addFolder');
Route::post('/addFolder', [App\Http\Controllers\HomeController::class, 'storeFolder'])->name('storeFolder');
