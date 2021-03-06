<?php

use App\Http\Controllers\KreditursController;
use App\Http\Controllers\testController;
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
//Route::resource('/Kreditur', 'KrediturController');
Route::resource('/', 'DashboardController',  ['only'=>['index']]);

Route::resource('Krediturs', 'KreditursController');

Route::resource('Jaminan', 'JaminanController');

Route::resource('Bunga', 'BungaController');
