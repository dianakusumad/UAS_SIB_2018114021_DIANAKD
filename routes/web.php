<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswacontroller;
use App\Http\Controllers\absencontroller;
use App\Http\Controllers\matakuliahcontroller;
use App\Http\Controllers\kontrak_kuliahcontroller;
use App\Http\Controllers\jadwalcontroller;
use App\Http\Controllers\semestercontroller;
use App\Http\Controllers\layoutcontroller;
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

Route::get ('', [layoutcontroller::class, 'index']);

Route::resources([
'mahasiswa' => mahasiswacontroller::class,
'absen' => absencontroller::class,
'matakuliah' => matakuliahcontroller::class,
'kontrak_matakuliah' => kontrak_matakuliahcontroller::class,
'jadwal' => jadwalcontroller::class,
'semester' => semestercontroller::class
]);

