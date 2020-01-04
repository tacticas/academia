<?php

use GuzzleHttp\Client;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', 'UserController@index')->name('users');

Route::get('/usuarios/{user}', 'UserController@show')
        ->where('user','[0-9]+')
        ->name('user.show');

Route::get('/usuarios/nuevo', 'UserController@create')->name('users.create');

Route::post('/usuarios', 'UserController@store');

Route::get('/usuarios/{user}/editar', 'UserController@edit')->name('user.edit');

Route::put('/usuarios/{user}', 'UserController@update');

Route::delete('/usuarios/{user}','UserController@destroy')->name('user.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//coach
Route::get('/coach', 'CoachController@index')->name('coachs');

Route::get('/coach/{coach}', 'CoachController@show')
        ->where('coach','[0-9]+')
        ->name('coach.show');

Route::get('/dashboard/editar','PerfilController@index')->middleware('auth')->name('coach.editar');
Route::get('/dashboard/editar/logro','PerfilController@logro')->middleware('auth')->name('coach.logro');

Route::put('/dashboard/editar/update','PerfilController@update')->middleware('auth');

Route::post('/logros', 'PerfilController@logroCreate');

Route::delete('/logros/{logro}','PerfilController@logroDestroy')->name('logro.destroy');

//citas

Route::get('/agendar/{coach}', 'AgendarController@index')->middleware('auth')->name('agendar');

Route::get('/agendar/{coach}/get', 'AgendarController@getPrice')->middleware('auth');

//apis
Route::get('precio/{coach}', 'PrecioController@index');

//api riot
/*
Route::get('/', function () {
        

        $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'https://la1.api.riotgames.com/lol/summoner/v3/summoners/by-name/',
        // You can set any number of default request options.
        'timeout'  => 2.0,
        ]);
        $response = $client->request('GET', 'Odonju?api_key=RGAPI-dd310522-922c-4d65-b154-2fdcb6fc0534');
        $response = json_decode($response->getBody()->getContents());
               //       dd($response);
        return $response->accountId;
    
});*/