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

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

/**
 * @api {get} /ejecutivo listar Ejecutivos
 * @apiName APICrudLumen
 * @apiGroup Ejecutivos
 * @apiSuccess {String} data of the Ejecutivo.
 */

	$api->get('/ejecutivo', [
    	'as'   => 'ejecutivo.index',
    	'uses' => 'App\Http\Controllers\EjecutivoController@index',
	]);
	/**
 * @api {post} /ejecutivo/new Guardar nuevo ejecutivo
 * @apiName APICrudLumen
 * @apiGroup Ejecutivos
 * @apiSuccess {String} data of the Ejecutivo.
 */

	$api->post('/ejecutivo/new', [
    	'as'   => 'ejecutivo.store',
    	'uses' => 'App\Http\Controllers\EjecutivoController@store',
	]);
	/**
 * @api {put} /ejecutivo/:id Editar ejecutivo
 * @apiName APICrudLumen
 * @apiGroup Ejecutivos
 * @apiSuccess {String} data of the Ejecutivo.
 */

	$api->put('/ejecutivo/{id}', [
    	'as'   => 'ejecutivo.update',
    	'uses' => 'App\Http\Controllers\EjecutivoController@update',
	]);
/**
 * @api {delete} /ejecutivo/:id Request User information
 * @apiName GetEjecutivos
 * @apiGroup Ejecutivos
 * @apiSuccess {String} data of the Ejecutivo.
 */
	$api->delete('/ejecutivo/{id}', [
    	'as'   => 'ejecutivo.destroy',
    	'uses' => 'App\Http\Controllers\EjecutivoController@destroy',
	]);
/**
 * @api {get} /ejecutivo/:id Obtener un ejecutivo
 * @apiName APICrudLumen
 * @apiGroup Ejecutivos
 * @apiSuccess {String} data of the Ejecutivo.
 */
	$api->get('/ejecutivo/{id}', [
    	'as'   => 'ejecutivo.show',
    	'uses' => 'App\Http\Controllers\EjecutivoController@show',
	]);

/**
 * @api {get} /cliente Listar Clientes
 * @apiName APICrudLumen
 * @apiGroup Clientes
 * @apiSuccess {String} data of the Cliente.
 */
    $api->get('/cliente', [
    	'as'   => 'cliente.index',
    	'uses' => 'App\Http\Controllers\ClienteController@index',
	]);
/**
 * @api {get} /cliente/:id Obtener un Cliente
 * @apiName APICrudLumen
 * @apiGroup Clientes
 * @apiSuccess {String} data of the Cliente.
 */
	$api->get('cliente/{id}', [
        'as'   => 'cliente.show',
        'uses' => 'App\Http\Controllers\ClienteController@show',
    ]);
});

//app('Dingo\Api\Routing\UrlGenerator')->version('v1')->route('ejecutivo.index');

Dingo\Api\Http\Response::addFormatter('json', new Dingo\Api\Http\Response\Format\Jsonp);

