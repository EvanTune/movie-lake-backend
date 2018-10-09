<?php

use Illuminate\Http\Request;
use GuzzleHttp\Client;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// MOVIES
Route::get('/movies/popular', 'MovieController@getPopularMovies');
Route::get('/movies/upcoming', 'MovieController@getUpcomingMovies');
Route::get('/movies/theatres', 'MovieController@getTheatresMovies');
Route::get('/movies/{id}', 'MovieController@getMovie');

// TV
Route::get('/tv/popular', 'TvController@getPopularTv');
Route::get('/tv/upcoming', 'TvController@getUpcomingTv');
Route::get('/tv/theatres', 'TvController@getTheatresTv');
Route::get('/tv/{id}', 'TvController@getTv');

// PEOPLE
Route::get('/people/popular', 'PersonController@getPopularPeople');
Route::get('/people/{id}', 'PersonController@getPerson');