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

$app->group(['prefix' => 'api','namespace' => 'App\Http\Controllers'], function($app)
{
	$app->post('biodata','BiodataController@createBiodata');
	$app->put('biodata/{id}','BiodataController@updateBiodata'); 
	$app->delete('biodata/{id}','BiodataController@deleteBiodata');
	$app->get('biodata','BiodataController@index');
});
