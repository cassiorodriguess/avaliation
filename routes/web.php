<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix'=>'photo'],function() use ($router){

    $router->get('/','ArticleController@index');

    $router->post('/','ArticleController@store');
    
    $router->get('/create','ArticleController@create');
    
    $router->get('/{id}','ArticleController@show');
    
    $router->get('/{id}/edit','ArticleController@edit');
    
    $router->put('/{id}','ArticleController@update');
    
    $router->delete('/{id}','ArticleController@destroy');
    
}); 

