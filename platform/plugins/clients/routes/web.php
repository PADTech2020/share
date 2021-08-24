<?php

Route::group(['namespace' => 'Botble\Clients\Http\Controllers', 'middleware' => 'web'], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'clients', 'as' => 'clients.'], function () {
            Route::resource('', 'ClientsController')->parameters(['' => 'clients']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'ClientsController@deletes',
                'permission' => 'clients.destroy',
            ]);
        });
    });

});
