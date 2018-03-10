<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('login', 'API\PassportController@login');
Route::post('register', 'API\PassportController@register');
Route::group(['middleware' => 'auth:api'], function()
{
  Route::post('get-user', [
  'uses' => 'API\PassportController@getDetails',
  'as' => 'client.api.index'
  ]);
  Route::post('get/each/{id}', [
  'uses' => 'API\PassportController@eachAnnouncement',
  'as' => 'client.each.announcement'
  ]);
  Route::post('create/announcement', [
  'uses' => 'API\PassportController@createAnnouncement',
  'as' => 'create.announcement'
  ]);
  Route::post('create/comment', [
  'uses' => 'API\PassportController@createComment',
  'as' => 'client.comments'
  ]);
  Route::post('create/tribute', [
  'uses' => 'API\PassportController@createTributes',
  'as' => 'client.tributes'
  ]);

});
