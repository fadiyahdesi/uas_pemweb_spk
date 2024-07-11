<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Admin\CriteriaController;
use App\Http\Controllers\Admin\SubCriteriaController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RumahController;
use App\Http\Controllers\Admin\AhpController;
use App\Http\Controllers\LoginController;


    Route::get('/', [CustomerController::class, 'index']);
    Route::post('/postaltuser', [AhpController::class, 'postaltuser'])->name('postaltuser');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/postregister', [LoginController::class, 'postregister'])->name('postregister');
    Route::group(['middleware' => ['auth', 'cekrole:Admin']], function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/user', [UserController::class, 'index']);
    Route::get('/admin/user/form', [UserController::class, 'tampilform']);
    Route::post('/admin/user/form/postuser', [UserController::class, 'postuser'])->name('postuser');
    Route::get('/admin/user/formedit/{id}', [UserController::class, 'tampiledituser'])->name('edituser');
    Route::post('/admin/user/formedit/updateuser/{id}', [UserController::class, 'updateuser'])->name('updateuser');
    Route::get('/admin/user/hapususer/{id}', [UserController::class, 'deluser'])->name('hapususer');
    //RUMAH-OPTIC
    Route::get('/admin/rumah', [RumahController::class, 'index']);
    Route::get('/admin/rumah/form', [RumahController::class, 'tampilform']);
    Route::post('/admin/rumah/form/postrumah', [RumahController::class, 'postrumah'])->name('postrumah');
    Route::get('/admin/rumah/formedit/{id}', [RumahController::class, 'tampileditrumah'])->name('editrumah');
    Route::post('/admin/rumah/formedit/updaterumah/{id}', [RumahController::class, 'updaterumah'])->name('updaterumah');
    Route::get('/admin/rumah/hapusrumah/{tipe}', [RumahController::class, 'delrumah'])->name('hapusrumah');
    Route::get('/admin/kriteria', [CriteriaController::class, 'index']);
    Route::get('/admin/kriteria/form', [CriteriaController::class, 'tampilform']);
    Route::get('/admin/sub', [SubCriteriaController::class, 'index']);
    Route::get('/admin/sub/form', [SubCriteriaController::class, 'tampilform']);
    Route::get('/admin/alternative', [AhpController::class, 'tampilalternative']);
    Route::post('/admin/alternative/postalt', [AhpController::class, 'postalt'])->name('postalt');});
    Route::group(['middleware' => ['auth', 'cekrole:Admin,Customer']], function () {
    Route::get('/home', [CustomerController::class, 'indexlogin']);
    Route::post('/home/postaltuser', [AhpController::class, 'postaltuserlogin'])->name('postaltuserlogin');
    Route::get('/ahp/bobot', [AhpController::class, 'indexbobot']);
    Route::get('/profil/reset', [CustomerController::class, 'tampilmodal']);
    Route::post('/home/{password}', [CustomerController::class, 'ubahpassword'])->name('ubahpassword');});
