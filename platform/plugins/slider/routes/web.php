<?php
Route::group([
    'middleware' => 'api',
    'prefix'     => 'api/v1',
    'namespace'  => 'Botble\Slider\Http\Controllers\API',
], function () {

    Route::get('get-slider', 'APIController@getSlider');


});
Route::group(['namespace' => 'Botble\Slider\Http\Controllers', 'middleware' => 'web'], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'sliders', 'as' => 'slider.'], function () {
            Route::resource('', 'SliderController')->parameters(['' => 'slider']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'SliderController@deletes',
                'permission' => 'slider.destroy',
            ]);
        });
    });

});
