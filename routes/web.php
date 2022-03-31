<?php

use Illuminate\Support\Facades\Route;
use app\HTTP\Controllers\profsController;

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
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', [App\Http\Controllers\PostController::class, 'value'])->name('test');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
Route::get('/addstudent',[App\Http\Controllers\PostController::class, 'value']);
Route::post('upload',[App\Http\Controllers\HomeController::class,'import'])->name('home');
Route::post('/ajouterPFE',[App\Http\Controllers\HomeController::class,'addPfe']);
Route::get('/ajouterPFE',[profsController::class,'value']);

Route::get('/addNiveau',[App\Http\Controllers\HomeController::class,'FormNiveau']);
Route::get('/addSpecialite',[App\Http\Controllers\HomeController::class,'FormSpecialite']);


Route::post('/addNiveau',[App\Http\Controllers\HomeController::class,'addNiveau']);
Route::post('/addSpecialite',[App\Http\Controllers\HomeController::class,'addSpecialite']);

