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
Route::get('/tickets','TicketController@index')->name('tickets.index');
Route::get('/tickets/create','TicketController@create')->name('ticket.create');
Route::post('/tickets/store','TicketController@store')->name('ticket.store');
Route::get('/tickets/show/{id}','TicketController@show')->name('ticket.show');
Route::post('/tickets/update/{id}','TicketController@update')->name('ticket.update');
Route::get('/tickets/delete/{id}','TicketController@destroy')->name('ticket.delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
