<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//khoa
Route::get('/khoas',[NgdKhoaController::class,'ngdGetallKhoa'])->name('ngdkhoa.ngdgetallkhoa');
//khoa detail
Route::get('/khoas/detail/{makh}',[NgdKhoaController::class,'ngdGetKhoa'])->name('ngdkhoa.ngdgetkhoa');
//khoa edit
Route::get('/khoas/edit/{makh}',[NgdKhoaController::class,'ngdEdit'])->name('ngdkhoa.ngdEdit');
Route::post('/khoas/edit/{makh}',[NgdKhoaController::class,'ngdEditSubmit'])->name('ngdkhoa.ngdEditSubmit');
   
   
