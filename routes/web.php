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

Route::middleware('auth')->group(function(){

    Route::get('/', 'ContentsControler@home')->name('home');

    // Clients
    Route::get('/clients', 'ClientController@index')->name('clients');
    Route::get('/clients/new', 'ClientController@newClient')->name('new_client');
    Route::post('/clients/new', 'ClientController@newClient')->name('create_client');
    Route::get('/clients/{client_id}', 'ClientController@show')->name('show_client');
    Route::post('/clients/{client_id}', 'ClientController@modify')->name('update_client');

    // Reservation
    Route::get('/reservations/{client_id}', 'RoomsController@checkAvailableRoom')->name('check_room');
    Route::post('/reservations/{client_id}', 'RoomsController@checkAvailableRoom')->name('check_room');

    // Booking
    Route::get('/book/room/{client_id}/{room_id}/{date_in}/{date_out}', 'ReservationController@bookRoom')->name('book_room');

    Route::get('export', 'ClientController@export');
    Route::get('/upload', 'ContentsControler@upload')->name('upload');
    Route::post('/upload', 'ContentsControler@upload')->name('upload');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/generate/password', function(){
    return bcrypt('123456789');
});
