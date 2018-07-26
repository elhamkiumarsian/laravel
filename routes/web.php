<?php

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

Route::get('note/{notes}', 'NoteController@show');
Route::get('notes', 'NoteController@index');
Route::get('cards', 'NoteController@index_card');
Route::get('card/{cards}', 'NoteController@card_show');
Route::post('card/{id}/notes','NoteController@store');

Route::get('note/{note}/edit','NoteController@edit');
Route::patch('note/{note}/update','NoteController@update');

