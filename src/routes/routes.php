<?php

Route::group(['prefix' => 'mypackage', 'middleware' => ['web']], function() {

    Route::get('demo', 'Labcoder2019\MyPackage\Controllers\MyPackageController@demo');

});
