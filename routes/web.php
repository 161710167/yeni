<?php

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
  
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return 'Ini Halaman admin saya';
    });

    Route::get('user', function () {
        return 'Ini Halaman user saya';
    });
    Route::get('karyawan', function () {
        return 'Ini Halaman karyawan saya';
    });
    Route::get('manager', function () {
        return 'Ini Halaman manager saya';
    });
});

Route::group(['prefix' => 'manager', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return 'Ini Halaman admin saya';
    });
    
    Route::get('create', function () {
        return 'Ini halaman create';
     });
    Route::get('update', function () {
        return 'Ini Halaman update saya';
    });
    Route::get('index', function () {
        return 'Ini Halaman index saya';
    });
    Route::get('index', function () {
         return 'Ini Halaman index saya';
        });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
