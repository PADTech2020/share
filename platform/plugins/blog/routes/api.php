<?php

Route::group([
    'middleware' => 'api',
    'prefix'     => 'api/v1',
    'namespace'  => 'Botble\Blog\Http\Controllers\API',
], function () {

    Route::get('search', 'PostController@getSearch');
    Route::get('posts', 'PostController@index');
    Route::get('categories', 'CategoryController@index');
    Route::get('tags', 'TagController@index');

    Route::get('posts-by-category', 'PostController@findPostsByCategory');
    Route::get('posts-by-category-slug', 'PostController@findPostsByCategorySlug');

    Route::get('posts/filters', 'PostController@getFilters');
    Route::get('posts/{slug}', 'PostController@findBySlug');
    Route::get('categories/filters', 'CategoryController@getFilters');
    Route::get('categories/{slug}', 'CategoryController@findBySlug');

    Route::get('latest-posts', 'PostController@latestPosts');

});
