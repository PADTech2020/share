<?php

Route::group(['namespace' => 'Botble\Demo\Http\Controllers', 'middleware' => 'web'], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'demos', 'as' => 'demo.'], function () {
            Route::resource('', 'DemoController')->parameters(['' => 'demo']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'DemoController@deletes',
                'permission' => 'demo.destroy',
            ]);
        });
    });

});
