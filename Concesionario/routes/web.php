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

Route::get('/', 'Coche@inicio')->name('index');

Route::get('/datos/{id}', 'Coche@datos')->name('coches.detalle');

Route::get('/precio', 'Coche@precio')->name('coches.precio');

Route::get('/precioB', 'Coche@precioB')->name('coches.precioB');

Route::get('/id', 'Coche@id')->name('coches.id');

Route::get('/az', 'Coche@az')->name('coches.az');

Route::get('/za', 'Coche@za')->name('coches.za');

Route::get('/modelos', 'Coche@modelos')->name('coches.modelos');

Route::post('/', 'Coche@crear')->name('coches.crear');

Route::post('/crear', 'Coche@crear2')->name('coches.crear2');

Route::get('/editar/{id}','Coche@editar')->name('coches.editar');

Route::put('/editar/{id}', 'Coche@update')->name('coches.update');

Route::delete('/eliminar/{id}', 'Coche@eliminar')->name('coches.eliminar');

Route::get('/buscardatos', 'Coche@buscardatos');

Route::get('/buscar', 'Coche@buscar')->name('coches.buscar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
