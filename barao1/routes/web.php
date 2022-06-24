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

#users routes
$router->get('/users','UserController@index'); 
$router->post('/users','UserController@add'); 
$router->get('/users/{userId}','UserController@show'); 
$router->put('/users/{userId}','UserController@update'); 
$router->delete('/users/{userId}','UserController@delete');



#user job routes
$router->get('/usersjob','UserJobController@index');
$router->get('/usersjob/{jobID}','UserJobController@show');