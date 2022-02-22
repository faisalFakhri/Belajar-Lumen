<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/key', function (){
    return str_random(32);  
});

$router->group(['prefix' => 'api/'], function() use ($router) {
    $router->post('learninsert','LearnController@create');
    $router->get('learn','LearnController@index');
    $router->get('learn/{id}','LearnController@show');
    $router->put('learn/{id}','LearnController@update');
    $router->delete('learn/{id}','LearnController@destroy');
});