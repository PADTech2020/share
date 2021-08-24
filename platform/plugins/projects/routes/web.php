<?php
Route::group([
    'middleware' => 'api',
    'prefix'     => 'api/v1',
    'namespace'  => 'Botble\Projects\Http\Controllers\API',
], function () {

    Route::get('projects', 'ProjectsControllerAPI@getProjects');
    Route::get('project/{slug}', 'ProjectsControllerAPI@getProject');

});

Route::group(['namespace' => 'Botble\Projects\Http\Controllers', 'middleware' => 'web'], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'projects', 'as' => 'projects.'], function () {
            Route::resource('', 'ProjectsController')->parameters(['' => 'projects']);

            Route::get('categories',
                [
                    'as'         => 'categories.index',
                    'uses'       => 'ProjectsController@categoriesIndex',
                    'permission' => 'projects.categories',
                ]);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'ProjectsController@deletes',
                'permission' => 'projects.destroy',
            ]);
        });
    });

});
