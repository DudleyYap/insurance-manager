<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Insurance-20200803 by Jenn
    Route::apiResource('insurances', 'InsuranceApiController');

    //attachment
    Route::apiResource('attachments', 'AttachmentApiController');

    //testpage
    Route::apiResource('testpage', 'TestpageApiController');
});
