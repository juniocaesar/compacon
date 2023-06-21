<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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


Route::view('/home', 'home', ['content' => 'Home', 'title' => 'Home']);
Route::view('/', 'home', ['content' => 'Home', 'title' => 'Home']);

Route::view('/buku_kas', 'home', ['content' => view('pages/akuntansi/v_buku_kas'), 'title' => 'Buku Kas']);
Route::view('/daftar_akun', 'home', ['content' => view('pages/akuntansi/v_daftar_akun'), 'title' => 'Daftar Akun']);

Route::get('/greeting', function () {
    $results = DB::select('select * from tbl_coba');
    return $results;
});
