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

Route::get('/', 'MonitroController@monitor1');


Route::get('/monitor2', 'MonitroController@monitor2');
Route::get('/settingshift', 'UserController@settingshift');
Route::post('/settingshift/simpan', 'UserController@settingsimpan');

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, //
]);

// Route AJAX
Route::get('/server_side/scripts/{id}', 'MonitroController@ajax');

Route::get('/dashboard', 'HomeController@dashboard');

Route::get('/karyawan', 'HomeController@karyawan');
Route::get('/karyawan/plus', 'HomeController@karyawanplus');
Route::get('/karyawan/minus/{id}', 'HomeController@karyawanminus');
Route::get('/karyawan/alter/{id}', 'HomeController@karyawanalter');
Route::post('/karyawan/alter/simpan', 'HomeController@karyawanalters');
Route::post('/karyawan/simpan', 'HomeController@karyawansimpan');

Route::get('/jadwal', 'HomeController@jadwal');
Route::get('/jadwal/alter/{id}', 'HomeController@jadwalalter');
Route::get('/jadwal/plus', 'HomeController@jadwalplus');
Route::get('/jadwal/minus/{id}', 'HomeController@jadwalminus');
Route::post('/jadwal/alter/simpan', 'HomeController@jadwalalters');
Route::post('/jadwal/simpan', 'HomeController@jadwalsimpan');

Route::get('/makanan', 'HomeController@makanan');
Route::get('/makanan/plus', 'HomeController@makananplus');
Route::get('/makanan/minus/{id}', 'HomeController@makananminus');
Route::get('/makanan/alter/{id}', 'HomeController@makananalter');
Route::post('/makanan/alter/simpan', 'HomeController@makananalters');
Route::post('/makanan/simpan', 'HomeController@makanansimpan');

Route::get('/data', 'HomeController@data');
Route::get('/data/{id}', 'HomeController@dataid');
Route::get('/data/makan', 'HomeController@datamakan');
