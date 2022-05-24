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
|background-image:url({{url('front/img/img_1.jpg')}})
*/
Route::get('/', 'FrontController\SiteController@index');
Route::get('/rooms', 'FrontController\SiteController@rooms');
Route::get('/getRoom/{id}', 'FrontController\SiteController@getroomById');
Route::get('/about', 'FrontController\SiteController@about');
Route::get('/thanks', 'FrontController\SiteController@thanksPage');
Route::post('/makeReservation', 'FrontController\SiteController@makeReservation');
Route::get('/search','FrontController\SiteController@search')->name('get.recherche');

Route::group(['namespace'=>'dashboardcontroller'], function () {
    Route::resource('room', 'RoomController');
    Route::get('delete_room\{id}', 'RoomController@destroy')->name('room.delete');
 

}); 
//  End rooms

//  Begin Reservation 
Route::group(['namespace'=>'dashboardcontroller'], function () {
    Route::resource('reservation', 'ReservationController');
    Route::get('delete_reservation\{id}', 'ReservationController@destroy')->name('reservation.delete');
 
    
}); 

//  End Reservation


//  Begin RoomType
Route::group(['namespace'=>'dashboardcontroller'], function () {
    Route::resource('roomType', 'RoomTypeController');
    Route::get('delete_roomType\{id}', 'RoomTypeController@destroy')->name('roomType.delete');
 

}); 

//  End RoomType

// end dashboard controllers 


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
