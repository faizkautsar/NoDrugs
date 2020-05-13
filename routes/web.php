<?php


// Route::get('/', function(){
//     return view('auth.login');
// });

Route::get('/admin', function () {
    return view('templates.admin');
});

//
// //narkotika
Route::group(['prefix' => 'narkotika'], function(){
  Route::get('/', 'NarkotikaController@index')->name('narkotika.index');
  Route::get('tambah','NarkotikaController@create')->name('narkotika.tambah');
  Route::post('tambah','NarkotikaController@store')->name('narkotika.store');
  Route::get('ubah/{id}', 'NarkotikaController@edit')->name('narkotika.ubah');
  Route::patch('ubah/{id}', 'NarkotikaController@update')->name('narkotika.update');
  Route::delete('hapus/{id}', 'NarkotikaController@destroy')->name('narkotika.hapus');
  Route::get('detail/{id}', 'NarkotikaController@show')->name('narkotika.lihat');
});

Route::group(['prefix' => 'psikotropika'], function(){
  Route::get('/','PsikotropikaController@index')->name('ps.index');
  Route::get('tambah','PsikotropikaController@create')->name('ps.tambah');
  Route::post('tambah','PsikotropikaController@store')->name('ps.store');
  Route::get('ubah/{id}','PsikotropikaController@edit')->name('ps.ubah');
  Route::patch('ubah/{id}','PsikotropikaController@update')->name('ps.update');
  Route::get('hapus/{id}','PsikotropikaController@destroy')->name('ps.hapus');
  Route::get('detail/{id}','PsikotropikaController@show')->name('ps.lihat');
});

Route::group(['prefix' => 'zat-adiktif'], function(){
  Route::get('/','BhnAdiktifController@index')->name('bhn_adiktif.index');
  Route::get('tambah','BhnAdiktifController@create')->name('bhn_adiktif.tambah');
  Route::post('tambah','BhnAdiktifController@store')->name('bhn_adiktif.store');
  Route::get('ubah/{id}', 'BhnAdiktifController@edit')->name('bhn_adiktif.ubah');
  Route::patch('ubah/{id}', 'BhnAdiktifController@update')->name('bhn_adiktif.update');
  Route::get('hapus/{id}', 'BhnAdiktifController@destroy')->name('bhn_adiktif.hapus');
  Route::get('detail/{id}', 'BhnAdiktifController@show')->name('bhn_adiktif.lihat');
});


Route::group(['prefix' => 'rehabilitasi'], function(){
  Route::get('/', 'RehabilitasiController@index')->name('rehabilitasi.index');
   Route::get('tambah', 'RehabilitasiController@create')->name('rehabilitasi.tambah');
   Route::post('tambah', 'RehabilitasiController@store')->name('rehabilitasi.store');
   Route::get('ubah/{id}', 'RehabilitasiController@edit')->name('rehabilitasi.ubah');
   Route::patch('ubah/{id}', 'RehabilitasiController@update')->name('rehabilitasi.update');
   Route::get('hapus/{id}', 'RehabilitasiController@destroy')->name('rehabilitasi.hapus');

});


Route::group(['prefix' => 'statistik'], function(){
   Route::get('/', 'StatistikController@index')->name('statistik.index');
   Route::get('tambah', 'StatistikController@create')->name('statistik.tambah');
   Route::post('tambah', 'StatistikController@store')->name('statistik.store');
});

Route::group(['prefix' => 'hukum'], function(){
   Route::get('/', 'StatistikController@index')->name('hukum.index');
   Route::get('tambah', 'StatistikController@create')->name('hukum.tambah');
   Route::post('tambah', 'StatistikController@store')->name('hukum.store');
});


Route::group(['prefix' => 'pencegahan'], function(){
   Route::get('/', 'StatistikController@index')->name('pencegahan.index');
   Route::get('tambah', 'StatistikController@create')->name('pencegahan.tambah');
   Route::post('tambah', 'StatistikController@store')->name('pencegahan.store');
});

Route::group(['prefix' => 'dampak-negatif'], function(){
   Route::get('/', 'StatistikController@index')->name('dampak.index');
   Route::get('tambah', 'StatistikController@create')->name('dampak.tambah');
   Route::post('tambah', 'StatistikController@store')->name('dampak.store');
});
// //Auth
 Route::get('/', 'AuthAdminController@index');
 Route::post('/admin/login','AuthAdminController@login')->name('admin.login');
 Route::get('/admin/logout', 'AuthAdminController@logout')->name('admin.logout');
