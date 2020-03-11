<?php

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/', function () {
    return [
        'app' => 'Laravel 6 API Boilerplate',
        'version' => '1.0.0',
    ];
});


Route::group(['namespace' => 'Auth'], function () {

    Route::post('auth/login', ['as' => 'login', 'uses' => 'AuthController@login']);

    Route::post('auth/register', ['as' => 'register', 'uses' => 'RegisterController@register']);
    // Send reset password mail
    Route::post('auth/recovery', 'ForgotPasswordController@sendPasswordResetLink');
    // handle reset password form process
    Route::post('auth/reset', 'ResetPasswordController@callResetPassword');
});

Route::group(['middleware' => ['jwt', 'jwt.auth']], function () {

    Route::group(['namespace' => 'Profile'], function () {

        Route::get('profile', ['as' => 'profile', 'uses' => 'ProfileController@me']);

        Route::put('profile', ['as' => 'profile', 'uses' => 'ProfileController@update']);

        Route::put('profile/password', ['as' => 'profile', 'uses' => 'ProfileController@updatePassword']);
    });

    Route::group(['namespace' => 'Auth'], function () {

        Route::post('logout', ['as' => 'logout', 'uses' => 'LogoutController@logout']);
    });
    Route::group(['namespace' => 'Api'], function () {

        Route::post('event', ['as' => 'events', 'uses' => 'EventController@store']);
        Route::put('event/{id}', ['as' => 'events', 'uses' => 'EventController@update']);
        Route::get('event', ['as' => 'events', 'uses' => 'EventController@index']);
        Route::get('event/{id}', ['as' => 'events', 'uses' => 'EventController@show']);
        Route::delete('event/{id}', ['as' => 'events', 'uses' => 'EventController@destroy']);

        Route::get('host', ['as' => 'hosts', 'uses' => 'HostController@index']);
        Route::get('host/{id}', [ 'as' => 'hosts', 'uses' => 'HostController@show']);
        Route::post('host', ['as' => 'hosts', 'uses' => 'HostController@store']);
        Route::put('host/{id}', ['as' => 'hosts', 'uses' =>  'HostController@update']);

        Route::get('client', ['as' => 'clients', 'uses' => 'ClientController@index']);
        Route::get('client/{id}', ['as' => 'clients', 'uses' => 'ClientController@show']);
        Route::post('client', ['as' => 'clients', 'uses' => 'ClientController@store']);
        Route::put('client/{id}', ['as' => 'clients', 'uses' => 'ClientController@update']);

        Route::get('ticket', ['as' => 'tickets', 'uses' => 'TicketController@index']);
        Route::get('ticket/{id}', ['as' => 'tickets', 'uses' => 'TicketController@show']);
        Route::post('ticket', ['as' => 'tickets', 'uses' => 'TicketController@store']);
        Route::put('ticket/{id}', ['as' => 'tickets', 'uses' => 'TicketController@update']);
    });
});
