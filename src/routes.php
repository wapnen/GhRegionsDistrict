<?php

Route::group(['namespace' => 'Wapnen\GhRegionDistrict\Controllers', 'prefix' => 'ghregiondistrict'], function(){
    Route::get('/', 'GhRegionDistrictController@index');
    Route::get('/getdistricts/{id}', 'GhRegionDistrictController@getDistricts');

  });
?>