<?php
Auth::routes();
Route::get('/admin',['middleware'=>'auth', function () {
    return view('admin/index');
}]);
Route::get('/admin/informasi', 'BeritaController@index');
Route::get('/admin/informasi/tambah', 'BeritaController@create');
Route::post('/admin/informasi', 'BeritaController@store');
Route::get('/admin/informasi/{id}/edit', 'BeritaController@edit');
Route::put('/admin/informasi/{id}', 'BeritaController@update');
Route::get('/admin/informasi/{id}/delete', 'BeritaController@destroy');

Route::get('/admin/pengaturan/logo', 'ProfilController@gantilogo');
Route::post('/admin/pengaturan/logo', 'ProfilController@simpanlogo');
Route::get('/admin/pengaturan/visimisi', 'ProfilController@gantivisimisi');
Route::put('/admin/pengaturan/visimisi/{id}', 'ProfilController@simpanvisimisi');
Route::get('/admin/pengaturan/aboutme', 'ProfilController@gantiaboutme');
Route::put('/admin/pengaturan/aboutme/{id}', 'ProfilController@simpanaboutme');
Route::get('/admin/pengaturan/sosmed', 'ProfilController@gantisosmed');
Route::put('/admin/pengaturan/sosmed/{id}', 'ProfilController@simpansosmed');

Route::get('/admin/pengaturan/slides', 'SlidesController@index');
Route::get('/admin/pengaturan/slides/tambah', 'SlidesController@create');
Route::post('/admin/pengaturan/slides', 'SlidesController@store');
Route::get('/admin/pengaturan/slides/{id}/edit', 'SlidesController@edit');
Route::put('/admin/pengaturan/slides/{id}', 'SlidesController@update');
Route::get('/admin/pengaturan/slides/{id}/delete', 'SlidesController@destroy');

Route::get('/admin/pengaturan/link/{kategori}', 'LinkController@index');
Route::get('/admin/pengaturan/link', 'LinkController@create');
Route::post('/admin/pengaturan/link', 'LinkController@store');
Route::get('/admin/pengaturan/link/{id}/delete', 'LinkController@destroy');

Route::get('/admin/bukutamu', 'BukutamuController@index');
Route::get('/admin/pendaftaran', 'PendaftaranController@index');

Route::get('/', 'HomeController@index');
