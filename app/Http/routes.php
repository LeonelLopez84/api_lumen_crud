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

	$app->get('/', function () use ($app) {
    return $app->version();
	});

$app->group(['prefix' => 'v1'], function ($app) {

	$app->get('/ejecutivo', [
    	'as'   => 'v1.ejecutivo.index',
    	'uses' => 'EjecutivoController@index',
	]);

	$app->get('ejecutivo/{id}', [
        'as'   => 'v1.ejecutivo.show',
        'uses' => 'EjecutivosController@show',
    ]);


    $app->get('/cliente', [
    	'as'   => 'v1.cliente.index',
    	'uses' => 'ClienteController@index',
	]);

	$app->get('ejecutivo/{id}', [
        'as'   => 'v1.cliente.show',
        'uses' => 'ClienteController@show',
    ]);

});
/*$app->group(['prefix' => 'v1'], function ($app) {

    $app->get('ejecutivos', [
        'as'   => 'v1.ejecutivos.index',
        'uses' => 'EjecutivosController@index',
    ]);
    $app->get('ejecutivos/{id}', [
        'as'   => 'v1.ejecutivos.show',
        'uses' => 'EjecutivosController@show',
    ]);
    $app->post('ejecutivos', [
        'as'   => 'v1.ejecutivos.store',
        'uses' => 'EjecutivosController@store',
    ]);
    $app->put('ejecutivos/{id}', [
       'as'   => 'v1.ejecutivos.update',
       'uses' => 'EjecutivosController@update',
   ]);
    $app->delete('ejecutivos/{id}', [
       'as'   => 'v1.ejecutivos.destroy',
       'uses' => 'EjecutivosController@destroy',
   ]);
});*/
