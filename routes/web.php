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
    return view('index');
});

Route::get('/chatBotman', function () {
    return view('chatbot');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/business/{business_id}', function($business_id){

    if($business_id)
    {
        return view('business', compact('business_id'));
    }

    return back();


});


Route::match(['get', 'post'], '/botman', 'BotmanController@handle');