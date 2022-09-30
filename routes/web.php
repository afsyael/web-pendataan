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
// FRONT
Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/struktur', function () {
    return view('pages.struktur');
})->name('struktur');

Route::get('/pegawai', 'bppdcontroller@pegawai')->name('pegawai');

Route::get('/datacuti', function () {
    return view('pages.datacuti');
})->name('datacuti');

Route::post('/insertcuti', 'bppdcontroller@insertcuti');

Route::get('cari','bppdcontroller@cari')->name('cari');

Route::get('print/{id}', 'bppdcontroller@cetak')->name('print');

Route::get('galeri', function () {
    return view('pages.galeri');
})->name('galeri');

Route::get('kontak', function () {
    return view('pages.kontak');
})->name('kontak');

// ADMIN
Auth::routes();

Route::get('/home', 'bppdcontroller@index')->name('dashboard');
Route::post('/insertkritik', 'bppdcontroller@insertkritik');

Route::get('/adm', 'bppdcontroller@view_admin')->name('admin');
Route::post('/insertadmin', 'bppdcontroller@insertadmin');
Route::get('/editadmin/{id}', 'bppdcontroller@editadmin');
Route::post('/updateadmin', 'bppdcontroller@updateadmin');
Route::get('/deleteadmin/{id}', 'bppdcontroller@deleteadmin');

Route::get('/karyawan', 'bppdcontroller@view_karyawan')->name('karyawan');
Route::post('/insertkaryawan', 'bppdcontroller@insertkaryawan');
Route::get('/editkaryawan/{id}', 'bppdcontroller@editkaryawan');
Route::post('/updatekaryawan', 'bppdcontroller@updatekaryawan');
Route::get('/deletekaryawan/{id}', 'bppdcontroller@deletekaryawan');

Route::get('/cuti', 'bppdcontroller@view_cuti')->name('cuti');
Route::get('/cuti/report', 'bppdcontroller@report');
Route::get('/editcuti/{id}', 'bppdcontroller@editcuti');
Route::post('/updatecuti', 'bppdcontroller@updatecuti');
Route::get('/deletecuti/{id}', 'bppdcontroller@deletecuti');

Route::get('/kritik', 'bppdcontroller@view_kritik')->name('kritik');
Route::get('/deletekritik/{id}', 'bppdcontroller@deletekritik');

Route::get('logout', function(){
	\Auth::logout();
	return redirect('/');

});

