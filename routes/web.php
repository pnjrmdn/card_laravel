<?php

use Illuminate\Support\Facades\Route;

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


$folder='App\Http\Controllers\\';
Route::get('/', $folder.'DataController@index');

Route::post('/index/add', $folder.'DataController@add');

Route::get('/index/edit/{id}', $folder.'DataController@edit');



// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/pegawai','PegawaiController@index');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('');
// });

// Route::get('user/{id}', function ($id){
//     return 'User' . $id;
// });
