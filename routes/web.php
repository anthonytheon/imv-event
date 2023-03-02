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

Route::get('/', 'HomeController@index');
// Route::get('/', function () {
//     return view('maintenance');
// });

//Sendmail request
Route::post('/contact', 'HomeController@sendMail');

// Events
Route::get('/qr', 'EventController@generate');
// Handle Guest
Route::post('/guest', 'HomeController@guest');
// All events
Route::get('/event', 'EventController@events');
// Specific event
Route::get('/event/{url}_{id}', 'EventController@event');
// Short url
Route::get('/s/{url}', 'EventController@short');

// Datatables needs
Route::middleware('auth')->group(function () {
    Route::get('/databatam', 'GuestController@batam');
    Route::get('/datajogja', 'GuestController@jogja');
});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::resource('event', 'EventController');
    Route::resource('item', 'ItemController');
    Route::resource('guest', 'GuestController');

    // Admin Dashboard
    Route::get('/dashboard', 'HomeController@dashboard');

    // - Event - \\
    Route::post('/event/store', 'EventController@storeEvent')->name('event.storeEvent');

    // - Item - \\
    Route::get('/item/event/{event}', 'ItemController@upload')->name('item.upload');
});

Route::resource('document', 'DocumentController');

Auth::routes([
    'register' => true,
    'password.request' => false,
    'password.email' => false,
    'password.reset' => false
]);