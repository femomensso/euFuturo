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

Route::get('/', 'PrincipalController@Index')->name('index');
Route::get('/enviar', 'PrincipalController@Enviar')->name('enviar');
Route::post('/enviar', 'PrincipalController@Enviar')->name('enviar');
Route::get('/revelar', 'PrincipalController@Revelar')->name('revelar');
Route::post('/revelar', 'PrincipalController@Revelar')->name('revelar');
