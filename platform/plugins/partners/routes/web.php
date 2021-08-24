<?php
Route::group([
    'middleware' => 'api',
    'prefix'     => 'api/v1',
    'namespace'  => 'Botble\Partners\Http\Controllers\API',
], function () {

    Route::get('get-partners', 'APIController@getPartners');


});
Route::group(['namespace' => 'Botble\Partners\Http\Controllers', 'middleware' => 'web'], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'partners', 'as' => 'partners.'], function () {
            Route::resource('', 'PartnersController')->parameters(['' => 'partners']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'PartnersController@deletes',
                'permission' => 'partners.destroy',
            ]);
        });
    });

});
