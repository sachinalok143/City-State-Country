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
     
///=========================================Routes for Cities===============================

      Route::group(['namespace'=>'City','prefix'=>'City'],function(){
              Route::get('/get-all-cities', 'CityController@getAllCities');
              Route::post('/search-city-by-district','CityController@searchCityByDistrict');
              Route::post('/add-new-city','CityController@AddNewCity');
              Route::post('/delete-city','CityController@deleteCity');
              Route::post('/update-city-detail','CityController@updateCityDetail');
      });
      ///=================================Routes for Districts===============================

      Route::group(['namespace'=>'District','prefix'=>'District'],function(){
              Route::get('/get-all-districts','DistrictController@getAllDistricts');
              Route::post('/update-district-detail','DistrictController@updateDistrictDetail');
              Route::post('/delete-district','DistrictController@deleteDistrict');
              Route::post('/add-district','DistrictController@addDistrict');
              // Route::post('/GetState','DistrictController@GetState');
              Route::post('/seach-state','DistrictController@seachState');
      });

      ///==================================Routes for states===============================
      Route::group(['namespace'=>'State','prefix'=>'State'],function(){
              Route::get('/get-all-states','StateController@getAllStates');
              Route::post('/update-state-detail','StateController@updateState');
              Route::post('/delete-state','StateController@deleteState');
              Route::post('/add-state','StateController@addState');
              Route::post('/search-state-by-country','StateController@searchStateByCountry');
       });
    });
});





//======================To manege the cities===========================//
Route::get('/manage-cities',function(){
  return view('adminpanel.tools.location.cities.angularModule.index');
});

//======================To manege the districts===========================//

Route::get('/manage-districts',function(){
  return view('adminpanel.tools.location.districts.angularModule.index');
});

//======================To manege the states===========================//
Route::get('/manage-states',function(){
  return view('adminpanel.tools.location.states.angularModule.index');
});


/*
Route::post('/getstates/{id}','SearchController@getstates');
Route::post('/getdistricts/{id}','SearchController@getdistricts');*/