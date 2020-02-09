<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/serie', "SerieController@get");
$router->get('/serie/{id}', "SerieController@get");
$router->get('/serie/{id}/episodes', "SerieController@getEpisodes");
$router->post('/serie', "SerieController@post");
$router->put('/serie/{id}', "SerieController@put");
$router->delete('/serie/{id}', "SerieController@delete");

$router->get('/episode', "EpisodeController@get");
$router->get('/episode/{id}', "EpisodeController@get");
$router->post('/episode', "EpisodeController@post");
$router->put('/episode/{id}', "EpisodeController@put");
$router->delete('/episode/{id}', "EpisodeController@delete");
