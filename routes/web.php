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

Route::get('/home', 'AdminController@index');

Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'role:admin']], function () {
//route halaman admin
	
});

Route::get('/soal1',function(){
	//mengeluarkan semua data yang ada di table siswa melalui model siswa
	$a=App\siswa::all();
	return $a;
});
//menggunakan find
Route::get('/soal2',function(){
	$a=App\siswa::find(2);
	return $a;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('halaman',function(){
	return view('halaman1');
});

Route::get('halaman1',function(){
	return view('halaman2');
});
Route::get('halaman2',function(){
	return view('halaman3');
});
Route::get('halaman3',function(){
	return view('halaman4');
});
Route::get('halaman4',function(){
	return view('halaman5');
});
Route::get('halaman5',function(){
	return view('halaman6');
});
Route::get('login',function(){
	return view('tampilanlogin,');
});