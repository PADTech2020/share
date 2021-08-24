<?php
Route::group([
    'middleware' => 'api',
    'prefix'     => 'api/v1',
    'namespace'  => 'Botble\Campaigns\Http\Controllers\API',
], function () {

    Route::get('campaigns', 'CampaignsControllerAPI@getCampaigns');
    Route::get('campaign/{slug}', 'CampaignsControllerAPI@getCampaign');


});
Route::group(['namespace' => 'Botble\Campaigns\Http\Controllers', 'middleware' => 'web'], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'campaigns', 'as' => 'campaigns.'], function () {
            Route::resource('', 'CampaignsController')->parameters(['' => 'campaigns']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'CampaignsController@deletes',
                'permission' => 'campaigns.destroy',
            ]);
        });
    });

});
