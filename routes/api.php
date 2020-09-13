<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Regions
    Route::apiResource('regions', 'RegionApiController');

    // Places
    Route::apiResource('places', 'PlaceApiController');

    // Profiles
    Route::apiResource('profiles', 'ProfileApiController');

    // Addresses
    Route::apiResource('addresses', 'AddressApiController');

    // Categories
    Route::apiResource('categories', 'CategoryApiController');

    // Subcategories
    Route::apiResource('subcategories', 'SubcategoryApiController');

    // Products
    Route::post('products/media', 'ProductApiController@storeMedia')->name('products.storeMedia');
    Route::apiResource('products', 'ProductApiController');

    // Featured Products
    Route::apiResource('featured-products', 'FeaturedProductApiController');
});
