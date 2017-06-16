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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Admin','prefix' => 'Admin'], function() {

Route::group(['namespace' => 'Location','prefix' => 'Location'], function() {
      Route::group(['namespace'=>'City','prefix'=>'City'],function(){
        Route::get('/', 'BaseController@index');
        Route::post('/search','BaseController@SearchResult');
        Route::post('/update','BaseController@update');
        // Route::post('/load-edit-city-form','BaseController@load_edit');
             //Controllers Within The "App\Http\Controllers\Admin\Location\City" Namespace
       
      });
 });
});

Route::post('/quote',
	[
	'uses'=>'QuoteController@postQuote'
	]);
Route::get('/quote',
	[
	'uses'=>'QuoteController@getQuote'
	]);
Route::put('/quote/{id}',
	[
	'uses'=>'QuoteController@putQuote'
	]);
Route::delete('/quote/{id}',
	[
	'uses'=>'QuoteController@deleteQuote'
	]);