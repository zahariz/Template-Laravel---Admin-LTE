<?php

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

Route::get('/template', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', function (){
    return view('public');
});

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
