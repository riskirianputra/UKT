<?php

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
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


Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/users','UserController');
    
});


Route::resource('users', 'UserController')->middleware('auth');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('posts', 'PostController');

Route::resource('fakultas','FakultasController');

Route::resource('jalur_masuk','JalurmasukController');

Route::resource('pendaftaran','PendaftaranController');

Route::resource('mahasiswa','MahasiswaController');

Route::resource('mappingjalur','MappingJalurController');

Route::resource('mappingprodi','MappingProdiController');

Route::resource('mahasiswa_entry','Mahasiswa_entryController');

Route::resource('programstudi','ProgramstudiController');

Route::resource('jenisbiaya','JenisbiayaController');

Route::resource('upload','UploadController');
Route::get('upload/download/{id}', 'BookController@show')->name('downloadfile');


Route::get('/bobot/cetak_pdf','BobotController@cetak_pdf')->name('bobot.cetak_pdf');

Route::resource('bobot','BobotController');
Route::resource('kategory','KategoryController');

Route::resource('kategory_detail','Kategory_detailController');

//JENJANG
Route::resource('jenjang','JenjangController');

Route::resource('konfirmasi','KonfirmasiController');

//TARIF
Route::resource('tarif','TarifController');

Route::resource('periode','PeriodeController');

Route::resource('informasi','InformasiController');

Route::resource('registrasi','RegistrasiController');

Route::resource('jenisfile','JenisfileController');

Route::get('/pendaftaran', 'PendaftaranController@index')->name('pendaftaran.index');

Route::get('/pendaftaran/export_excel', 'PendaftaranController@export_excel');

Route::post('/pendaftaran/import_excel', 'PendaftaranController@import_excel');

Route::get('/downloadTemplateSnmptn', 'PendaftaranController@downloadTemplateSnmptn');

Route::get('/downloadTemplateSbmptn', 'PendaftaranController@downloadTemplateSbmptn');

// Route::get('/', function(){

// 	$kategory = Kategory::all();

// 	return view::make('index')->with('kategory');
// });


// 	Route::get('/ajax-subcat', function(){
// 	$cat_id = Input::get('cat_id');

// 	$kategory_detail = Kategory_detail::where('idKategory', '=', $cat_id)->get();

// 	return Response::json($kategory_detail);
// 	});


Route::get('/upload','UploadController@index')->name('upload.index');


//Route::get('/upload', 'UploadController@upload')->name('upload');
//Route::post('/upload/proses', 'UploadController@proses_upload');


//Route::get('/create_role_permission', function () {

//	$role = Role::create(['name' => 'Admin']);
  //  $permission = Permission::create(['name' => 'Administer roles & permissions']);
    //auth()->user()->assignRole('Admin');
   // auth()->user()->givePermissionTo('Administer roles & permissions');
//});

