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
    return view('welcome');
 })->name('');

Route::get('/group', function () {
    return view('group');
})->name('gr');

Route::get('/prepod',function (){
    return view('prepod');

})->name('pr');

Route::get('/prepod/raspisanie',function (){
    return view('rasp_prepod');

})->name('rasp_pr');

Route::get('/aydit',function (){
    return view('aydit');
})->name('ay');

Route::get('/kontakts',function (){
    return view('kont');
})->name('kon');

Route::get('/vhod',function (){
    return view('vhod');
})->name('vhod');

