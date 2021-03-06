<?php

use Illuminate\Support\Facades\Auth;
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
    return view('explanation');
});

Auth::routes();

Route::group(['prefix'=>'Office','middleware'=>'auth'], function (){

Route::get('home','OfficeController@home')->name('Office/home');
Route::get('index','OfficeController@index')->name('Office/index');
Route::get('formcreate','OfficeController@formcreate')->name('Office/formcreate');
Route::get('start_create','OfficeController@start_create')->name('Office/start_create');
Route::get('break_create','OfficeController@break_create')->name('Office/break_create');
Route::get('return_create','OfficeController@return_create')->name('Office/return_create');
Route::get('reave_create','OfficeController@reave_create')->name('Office/reave_create');
Route::post('store','OfficeController@store')->name('Office/store');
Route::post('start_store','OfficeController@start_store')->name('Office/start_store');
Route::post('break_store','OfficeController@break_store')->name('Office/break_store');
Route::post('return_store','OfficeController@return_store')->name('Office/return_store');
Route::post('reave_store','OfficeController@reave_store')->name('Office/reave_store');
Route::get('show/{id}','OfficeController@show')->name('Office/show');

});
