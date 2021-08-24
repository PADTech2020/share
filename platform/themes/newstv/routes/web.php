<?php
Route::group([
    'middleware' => 'api',
    'prefix'     => 'api/v1',
    'namespace'  => 'Theme\NewsTv\Http\Controllers\API',
], function () {

    Route::get('get-theme-options', 'APIController@getThemeOptions');
  

});
// Custom routes
// You can delete this route group if you don't need to add your custom routes.
Route::group(['namespace' => 'Theme\NewsTv\Http\Controllers', 'middleware' => 'web'], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {
        Route::get('/splash', 'NewsTvController@splashIndex');
        // Add your custom route here
         Route::get('hello', 'NewsTvController@testIndex');
//         Route::get('/service','NewsTvController@viewService');
//        Route::get('/view-service/{id}', 'NewsTvController@viewService');
//        Route::get('/view-service/', 'NewsTvController@viewService');
        Route::get('/{locale}/view-service/', [
            'as'   => 'public.about',
            'uses' => 'NewsTvController@viewService',
        ]);
        Route::get('/view-service/', [
            'as'   => 'public.about',
            'uses' => 'NewsTvController@viewService',
        ]);
        Route::get('/view-project/', [
            'as'   => 'public.about',
            'uses' => 'NewsTvController@viewProject',
        ]);
        Route::get('/{locale}/view-project/', [
            'as'   => 'public.about',
            'uses' => 'NewsTvController@viewProject',
        ]);
        Route::get('/projects/', [
            'as'   => 'public.about',
            'uses' => 'NewsTvController@projects',
        ]);
        Route::get('/{locale}/projects/', [
            'as'   => 'public.about',
            'uses' => 'NewsTvController@projects',
        ]);
        Route::get('/{locale}/services/', [
            'as'   => 'public.about',
            'uses' => 'NewsTvController@services',
        ]);
        Route::get('/services/', [
            'as'   => 'public.about',
            'uses' => 'NewsTvController@services',
        ]);
        Route::get('/contact-us/', [
            'as'   => 'public.about',
            'uses' => 'NewsTvController@contactPage',
        ]);
        Route::get('/about-us/', [
            'as'   => 'public.about',
            'uses' => 'NewsTvController@aboutusPage',
        ]);
        Route::get('/request-a-quote/', [
            'as'   => 'public.about',
            'uses' => 'NewsTvController@requestAquotePage',
        ]);
    });

});

Theme::routes();

Route::group(['namespace' => 'Theme\NewsTv\Http\Controllers', 'middleware' => 'web'], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {
        Route::get('/', 'NewsTvController@getIndex')->name('public.index');

        Route::get('sitemap.xml', [
            'as'   => 'public.sitemap',
            'uses' => 'NewsTvController@getSiteMap',
        ]);

        Route::get('{slug?}' . config('core.base.general.public_single_ending_url'), [
            'as'   => 'public.single',
            'uses' => 'NewsTvController@getView',
        ]);
    });
});
