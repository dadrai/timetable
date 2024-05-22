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

Route::get('/group', 'GroupTimetableController@index')->name('gr');

Route::get('/group/{n_gr}', 'GroupTimetableController@show')
    ->name('show');

Route::get('/group/{n_gr}/{week}', 'GroupTimetableController@pred_week')
    ->name('pred_week');



Route::get('/prepod','PrepodController@index')->name('pr');

Route::get('/prepod/{fio}', 'PrepodController@show')
    ->name('pr_show');

Route::get('/prepod/raspisanie/{fio}', 'RaspisaniePrepodController@show')
    ->name('rasp_pr');


Route::get('/aydit', 'AuditTimetableController@index')->name('ay');

Route::get('/aydit/{n_ay}', 'AuditTimetableController@show')
    ->name('ay_show');


Route::get('/kontakts',function (){
    return view('kont');
})->name('kon');

Route::get('/vhod',function (){
    return view('vhod');
})->name('vhod');

//Route::get('/t', 'TimetableController@index')->name('ttt');
//Route::get('/t/{n_gr}', 'TimetableController@show')->name('show');

