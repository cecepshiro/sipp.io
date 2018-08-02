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
Route::group(['middleware' => 'web'], function(){
    //redirect to login
    Route::auth();
});

Route::group(['middleware' => ['web','auth']], function(){
    //redirect to login
    Route::get('/home','HomeController@index');
    Route::get('/', function(){
      if(Auth::user()->akses==0){
        return view('admin.home');
      }elseif(Auth::user()->akses==1){
        return view('atasan.home');
      }elseif(Auth::user()->akses==2){
        return view('personil.home');
      }
    });
});

Route::resource('agama','AgamaController');
Route::resource('personil','PersonilController');
Route::get('profilpersonil','PersonilController@profil');
Route::get('ubahprofil','ProfileController@ubahprofil');
Route::post('simpanfoto','PersonilController@foto');
Route::resource('profile','ProfileController');
Route::resource('registeruser', 'Auth\RegisterController');
Route::get('/daftarpersonil', 'Auth\RegisterController@daftar');
Route::resource('bidang','BidangProfesiController');
Route::resource('jenjang','JenjangController');
Route::resource('pendidikan','PendidikanController');