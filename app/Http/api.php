<?php
/**
 * Created by PhpStorm.
 * User: hendrikob
 * Date: 4/28/17
 * Time: 4:07 PM
 */



Route::group(['prefix' => 'v1/'], function () {

    // This section requires token authentication
    Route::group(['middleware' => 'auth:api'], function () {

        Route::get('upper/{word}', function ($word) {
            return [
                'original' => $word,
                'upper'    => strtoupper($word)
            ];
        });

        Route::get('profile', function () {
            return auth()->guard('api')->user();
        });
    });
});