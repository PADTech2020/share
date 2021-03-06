<?php
Route::group([
    'middleware' => 'api',
    'prefix'     => 'api/v1',
    'namespace'  => 'Botble\Contact\Http\Controllers',
], function () {

    Route::post('contact-send', [
        'as' => 'public.send.contact',
        'uses' => 'PublicController@postSendContact',
    ]);
});
Route::group(['namespace' => 'Botble\Contact\Http\Controllers', 'middleware' => 'web'], function () {
    Route::post('contact/send', [
        'as'   => 'public.send.contact',
        'uses' => 'PublicController@postSendContact',
    ]);

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'contacts', 'as' => 'contacts.'], function () {

            Route::resource('', 'ContactController')->except(['create', 'store'])->parameters(['' => 'contact']);

            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'ContactController@deletes',
                'permission' => 'contacts.destroy',
            ]);

            Route::post('reply/{id}', [
                'as'   => 'reply',
                'uses' => 'ContactController@postReply',
            ]);
        });
    });
});
