<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::post('/upload_doctor',[AdminController::class,'upload']);
Route::get('/add_donor_view',[AdminController::class,'addview2']);

Route::post('/upload_donor',[AdminController::class,'upload2']);
Route::get('/add_medicine_view',[AdminController::class,'addview3']);

Route::post('/upload_medicine',[AdminController::class,'upload3']);
Route::get('/showdoctor',[AdminController::class,'showdoctor']);
Route::get('/showdonor',[AdminController::class,'showdonor']);
Route::get('/showmedicine',[AdminController::class,'showmedicine']);
Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);
Route::get('/deletedonor/{id}',[AdminController::class,'deletedonor']);
Route::get('/deletemedicine/{id}',[AdminController::class,'deletemedicine']);
Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);
Route::get('/updatedonor/{id}',[AdminController::class,'updatedonor']);
Route::get('/updatemedicine/{id}',[AdminController::class,'updatemedicine']);
Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);
Route::post('/editdonor/{id}',[AdminController::class,'editdonor']);
Route::post('/editmedicine/{id}',[AdminController::class,'editmedicine']);
