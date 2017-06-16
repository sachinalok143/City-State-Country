<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['namespace' => 'Admin','prefix' => 'Admin'], function() {

Route::group(['namespace' => 'Location','prefix' => 'Location'], function() {
      Route::group(['namespace'=>'City','prefix'=>'City'],function(){
        Route::get('/', 'BaseController@index');
        Route::post('/search','BaseController@SearchResult');
        Route::post('/Add','BaseController@AddCity');
        Route::post('/delete_city','BaseController@delete_city');
        Route::post('/update','BaseController@Update');
        Route::get('/districts','DistrictController@districts');
        Route::post('/updateditrict','DistrictController@updateditrict');
        Route::post('/delete_district','DistrictController@delete_district');
        Route::post('/AddDistrict','DistrictController@AddDistrict');
        Route::post('/GetState','DistrictController@GetState');
        Route::post('/seachState','DistrictController@seachState');


///======================states========================////////////////////////========================

        Route::get('/state','StateController@state');
        Route::post('/updatestate','StateController@updatestate');
        Route::post('/delete_state','StateController@delete_state');
        Route::post('/AddState','StateController@AddState');
        Route::post('/searchByCountry','StateController@searchByCountry');






             //Controllers Within The "App\Http\Controllers\Admin\Location\City" Namespace
       
      });
 });
});
// 

Route::get('/angularjs',function(){

  return view('index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/operators/all','SearchController@alloperator');
Route::get('/search' ,'SearchController@search');
Route::get('/city/{id}','SearchController@show');
Route::get('/charts','ChartController@showChart');
Route::get('/filtercharts','ChartController@filterChart');
Route::get('/ScatterChart','ChartController@ScatterChart');
// Route::get('angularjs');
Route::get('/quote', function () {
    return view('quotes');
});
Route::get('/test',function(){
  return view('adminpanel.tools.location.cities.micros.form');
});

Route::get('/form',function(){
  return view('layouts.form');
});
Route::get('/newmodule',function(){
  return view('adminpanel1.tools.location.cities.index');
});
Route::get('/newmodule1',function(){
  return view('adminpanel2.tools.location.cities.index');
});

Route::get('/operators', function () {
    return view('layout.operators');
});

Route::get('/operators/charts',function(){
  return view('modulecharts.charts');
});

Route::get('/newmodule2',function(){
  return view('adminpanel3.tools.location.cities.index');
});







Route::post('/getstates/{id}','SearchController@getstates');
Route::post('/getdistricts/{id}','SearchController@getdistricts');