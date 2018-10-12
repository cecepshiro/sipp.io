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
      //akses admin
      if(Auth::user()->akses==0){
        return view('admin.home');
        //akses kepala dinas
      }elseif(Auth::user()->akses==1){
        return view('atasan.home');
        //akses anggota
      }elseif(Auth::user()->akses==2){
        return view('personil.home');
        //akses infolahta
      }elseif(Auth::user()->akses==3){
        return view('infolahta.home');
      }
    });
});

// Route::resource('agama','AgamaController');
Route::resource('personil','PersonilController');
Route::get('profilpersonil','ProfileController@profil')->name('profile.form');
Route::get('ubahprofil','ProfileController@ubahprofil');
Route::post('simpanfoto','PersonilController@foto');
Route::resource('profile','ProfileController');
Route::resource('registeruser', 'Auth\RegisterController');
Route::get('/daftarpersonil', 'Auth\RegisterController@daftar')->name('registeruser.daftar');
Route::post('/ubahAkses', 'Auth\RegisterController@ubahAkses')->name('registeruser.ubahAkses');
Route::get('/halakses/{id}', 'Auth\RegisterController@halamanubahAkses')->name('registeruser.halakses');
Route::resource('bidang','BidangProfesiController');
Route::get('masterbidang','BidangProfesiController@listbidang')->name('bidang.listbidang');
Route::resource('jenjang','JenjangController');
Route::delete('/deletejenjang/{id}','JenjangController@destroy')->name('jenjang.hapus');
Route::resource('pendidikan','PendidikanController');
Route::resource('pekerjaan','PekerjaanController');
Route::resource('pengalaman','PengalamanController');
Route::post('/simpanbidangprofesipers','BidangProfesiController@simpan');
Route::post('/simpanpekerjaan','PekerjaanController@store');
Route::post('/simpanjenjang','JenjangController@store');
Route::post('/simpanpraktikprofesi','PraktikPsiController@store');
Route::post('/pengembanganpro','PengembanganProController@store');
Route::resource('pengembanganprofesional','PengembanganProController');
Route::post('/ubahpengembanganprofesional','PengembanganProController@update')->name('pempro.update');
Route::get('/getpengembanganpro','PengembanganProController@index');
Route::get('/getbidangpropers','BidangProfesiController@index');
Route::get('/getpraktikpro','PraktikPsiController@index');
Route::get('/getpekerjaan','PekerjaanController@index');
Route::get('/getpendidikan','PendidikanController@index');
Route::post('/simpanpendidikan','PendidikanController@store');
Route::post('/simpanbidangprofesi','BidangProfesiController@store');
// Route::get('/agamaexport','AgamaController@export')->name('agama.export');
Route::get('/pengalamanpers','PengalamanController@formpengalamanpers')->name('pengalaman.formpengalamanpers');
// Route::get('/posts/{id}', 'Auth\RegisterController@destroy')->name('posts-get');
Route::delete('/posts/{id}', 'Auth\RegisterController@destroy')->name('post-delete');
Route::delete('/deletependidikan/{id}', 'PendidikanController@destroy')->name('pendidikan-delete');
Route::delete('/deletepekerjaan/{id}', 'PekerjaanController@destroy')->name('pekerjaan-delete');
Route::delete('/deletebidangpro/{id}', 'BidangProfesiController@destroy')->name('bidangpro-delete');
Route::delete('/deletepraktikpro/{id}', 'PraktikPsiController@destroy')->name('praktikpro-delete');
Route::delete('/deletedatapersonil/{id}', 'PersonilController@destroy')->name('listpersonel-delete');
Route::delete('/deletemasterbidang/{id}', 'BidangProfesiController@hapusmasterbidang')->name('listmasterbidang-delete');
Route::delete('/deletepengembanganpro/{id}', 'PengembanganProController@destroy')->name('pengembanganpro-delete');
// Route::get('/kode','JenjangController@buat_kode');
Route::post('/updateprofilexist', 'ProfileController@updateyangudahdaftar')->name('profile.yangudah');
Route::post('/ubahbidangpropers','BidangProfesiController@updatepers')->name('bidangpropers.updatepers');
Route::get('/editpers/{id}','BidangProfesiController@editpers')->name('bidangpropers.editpers');

//praktikpsi
Route::post('/ubahpraktikpsi','PraktikPsiController@update')->name('praktik.update');
Route::get('/editpraktikpsi/{id}','PraktikPsiController@edit')->name('praktik.edit');

//report
Route::get('/reportpers/{id}','ReportController@report_pers')->name('report.personil');

//kode otomatis pendidikan
Route::get('/buatkode/{id}','PengalamanController@kode_pendidikan')->name('kode.pendidikan');
//kode otomatis pekerjaan
Route::get('/buatkodepekerjaan/{id}','PengalamanController@kode_pekerjaan')->name('kode.pekerjaan');
//kode otomatis bidang profesi pers
Route::get('/buatkodebidangpropers/{id}','PengalamanController@kode_bidangprofesi_pers')->name('kode.bidangprofesipers');
//kode otomatis praktik profesi
Route::get('/buatkodepraktik/{id}','PengalamanController@kode_praktik')->name('kode.praktik');
//kode master bidang
Route::get('/kode_bidangprofesi/{id}','PengalamanController@kode_bidangprofesi')->name('kode.masterbidang');
//kode master jenjang
Route::get('/kode_jenjang/{id}','PengalamanController@kode_jenjang')->name('kode.masterjenjang');
//kode otomatis pengembangan profesional
Route::get('/buatkodepengembanganpro/{id}','PengalamanController@kode_pengembanganpro')->name('kode.pengembanganpro');

//show detail pengalaman

Route::get('/getdetailpengembanganpro','PengembanganProController@lihat');
Route::get('/getdetailbidangpropers','BidangProfesiController@lihat');
Route::get('/getdetailpraktikpro','PraktikPsiController@lihat');
Route::get('/getdetailpekerjaan','PekerjaanController@lihat');
Route::get('/getdetailpendidikan','PendidikanController@lihat');