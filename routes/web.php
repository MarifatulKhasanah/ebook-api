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

Route::get('/', function () {
    return "Kelas => XII RPL 3";
});

Route::get('/me', function (){
    return["NIS" => "3103118085", "Name" => "Marifatul Khasanah", "Gender" => "Perempuan",
    "Phone" => "0895377044585", "Class" => "XII RPL 3"];
});

Route::get('/kontrol', function(){
    return "latihan control";
});
