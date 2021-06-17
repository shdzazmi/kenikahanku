<?php

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
    return view('welcome');
});

Route::get('/{query?}', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->where('query', '(.*)');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->where('query', '(.*)');

Route::post('put', [App\Http\Controllers\InvitationController::class, 'put'])->name('ucapan.put');

Auth::routes();
