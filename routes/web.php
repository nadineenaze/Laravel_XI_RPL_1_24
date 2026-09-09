<?php

use App\Http\Controllers\HalamanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
 Route::get('/', function () {
     return view('welcome');
 });
 Route::get('/', function () {
     return "Selamat Datang";
 });
 Route::get("/hello", function () {
     return "Ini adalah halaman hello";
 });

Route::get("/", [HalamanController::class, "halamanPertama"]);