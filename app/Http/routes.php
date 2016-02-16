<?php
Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::resource('Persoane', 'Mycontrol');
    Route::get('home', 'Mycontrol@index');
    Route::get('Persoane/{id}/delete', 'Mycontrol@delete');
    
    Route::get('Persoane/create', 'Mycontrol@create');

    
});
