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
$router->get('/key', function() {
    return str_random(32);
});
/**
 * Routes for resource product
 */
$router->get('product', 'ProductController@all');
$router->get('product/{id}', 'ProductController@get');
$router->post('product', 'ProductController@add');
$router->put('product/{id}', 'ProductController@put');
$router->delete('product/{id}', 'ProductController@remove');
