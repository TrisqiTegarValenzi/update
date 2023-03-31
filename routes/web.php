<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\HewanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LahirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MatiController;
use App\Http\Controllers\SakitController;
use App\Http\Controllers\WahanaController;
use App\Models\Sakit;

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
// Route::get('/', function (){
//     return view
// }
// );

//pekerjaan
Route::get('/pekerjaan', [PekerjaanController::class, 'index'])->name('pekerjaan');

Route::get('/tambahpekerjaan', [PekerjaanController::class, 'tambahpekerjaan'])->name('tambahpekerjaan');
Route::post('/insertpekerjaan', [PekerjaanController::class, 'insertpekerjaan'])->name('insertpekerjaan');

Route::get('/tampilpekerjaan/{id}', [PekerjaanController::class, 'tampilpekerjaan'])->name('tampilpekerjaan');
Route::post('/updatepekerjaan/{id}', [PekerjaanController::class, 'updatepekerjaan'])->name('updatepekerjaan');

Route::get('/deletepekerjaan/{id}', [PekerjaanController::class, 'deletepekerjaan'])->name('deletepekerjaan');

//pegawai
Route::get('/pegawai', [PegawaiController::class, 'index2'])->name('pegawai');

Route::get('/tambahpegawai', [PegawaiController::class, 'tambahpegawai'])->name('tambahpegawai');
Route::post('/insertpegawai', [PegawaiController::class, 'insertpegawai'])->name('insertpegawai');

Route::get('/tampilpegawai/{id}', [PegawaiController::class, 'tampilpegawai'])->name('tampilpegawai');
Route::post('/updatepegawai/{id}', [PegawaiController::class, 'updatepegawai'])->name('updatepegawai');

Route::get('/deletepegawai/{id}', [PegawaiController::class, 'deletepegawai'])->name('deletepegawai');

//hewan
Route::get('/hewan', [HewanController::class, 'index3'])->name('hewan');

Route::get('/tambahhewan', [HewanController::class, 'tambahhewan'])->name('tambahhewan');
Route::post('/inserthewan', [HewanController::class, 'inserthewan'])->name('inserthewan');

Route::get('/tampilhewan/{id}', [HewanController::class, 'tampilhewan'])->name('tampilhewan');
Route::post('/updatehewan/{id}', [HewanController::class, 'updatehewan'])->name('updatehewan');

Route::get('/deletehewan/{id}', [HewanController::class, 'deletehewan'])->name('deletehewan');

//hewan lahir
Route::get('/lahir', [LahirController::class, 'index4'])->name('lahir');

Route::get('/tambahlahir', [LahirController::class, 'tambahlahir'])->name('tambahlahir');
Route::post('/insertlahir', [LahirController::class, 'insertlahir'])->name('insertlahir');

Route::get('/tampillahir/{id}', [LahirController::class, 'tampillahir'])->name('tampillahir');
Route::post('/updatelahir/{id}', [LahirController::class, 'updatelahir'])->name('updatelahir');

Route::get('/deletelahir/{id}', [LahirController::class, 'deletelahir'])->name('deletelahir');

//hewan mati
Route::get('/mati', [MatiController::class, 'index5'])->name('mati');

Route::get('/tambahmati', [MatiController::class, 'tambahmati'])->name('tambahmati');
Route::post('/insertmati', [MatiController::class, 'insertmati'])->name('insertmati');

Route::get('/tampilmati/{id}', [MatiController::class, 'tampilmati'])->name('tampilmati');
Route::post('/updatemati/{id}', [MatiController::class, 'updatemati'])->name('updatemati');

Route::get('/deletemati/{id}', [MatiController::class, 'deletemati'])->name('deletemati');

//hewan mati
Route::get('/sakit', [SakitController::class, 'index6'])->name('sakit');

Route::get('/tambahsakit', [SakitController::class, 'tambahsakit'])->name('tambahsakit');
Route::post('/insertsakit', [SakitController::class, 'insertsakit'])->name('insertsakit');

Route::get('/tampilsakit/{id}', [SakitController::class, 'tampilsakit'])->name('tampilsakit');
Route::post('/updatesakit/{id}', [SakitController::class, 'updatesakit'])->name('updatesakit');

Route::get('/deletesakit/{id}', [SakitController::class, 'deletesakit'])->name('deletesakit');

//wahana
Route::get('/wahana', [WahanaController::class, 'index7'])->name('wahana');

Route::get('/tambahwahana', [WahanaController::class, 'tambahwahana'])->name('tambahwahana');
Route::post('/insertwahana', [WahanaController::class, 'insertwahana'])->name('insertwahana');

Route::get('/tampilwahana/{id}', [WahanaController::class, 'tampilwahana'])->name('tampilwahana');
Route::post('/updatewahana/{id}', [WahanaController::class, 'updatewahana'])->name('updatewahana');

Route::get('/deletewahana/{id}', [WahanaController::class, 'deletewahana'])->name('deletewahana');

//kategori
Route::get('/kategori', [KategoriController::class, 'index8'])->name('kategori');

Route::get('/tambahkat', [KategoriController::class, 'tambahkat'])->name('tambahkat');
Route::post('/insertkat', [KategoriController::class, 'insertkat'])->name('insertkat');

Route::get('/tampilkat/{id}', [KategoriController::class, 'tampilkat'])->name('tampilkat');
Route::post('/updatekat/{id}', [KategoriController::class, 'updatekat'])->name('updatekat');

Route::get('/deletekat/{id}', [KategoriController::class, 'deletekat'])->name('deletekat');

//login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
