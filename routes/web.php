<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;

Route::get('/', [HalamanController::class, 'halamanSatu']);

Route::get('/halaman-dua', [HalamanController::class, 'halamanDua']);