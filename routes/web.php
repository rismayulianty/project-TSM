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
    return view('frontend.index');
});
Route::get('/prestasi',function(){
	return view('frontend.Prestasi');
});
Route::get('/kontak',function(){
	return view('frontend.kontak');
});
Route::get('alumni',function(){
	return view('frontend.Alumni');
});
Route::get('kurikulum',function(){
	return view('frontend.Kurikulum');
});
Route::get('perusahaan',function(){
	return view('frontend.perusahaan');
});
Route::get('fasilitas',function(){
	return view('frontend.fasilitas');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']], function(){
	Route::resource('prestasi','prestasiController');
});

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']], function(){
	Route::resource('kurikulum','kurikulumController');
});

Route::get('/settings/profile', 'SettingsController@profile');
Route::get('/settings/profile/edit','SettingsController@editProfile');
Route::post('/settings/profile','SettingsController@updateProfile');
Route::get('/settings/password','SettingsController@editPassword');
Route::post('settings/password','SettingsController@updatePassword');