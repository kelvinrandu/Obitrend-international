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
  //get all announcements
  Route::post('my/country/{id}', [
  'uses' => 'API\PassportController@getDetailsCountry',
  'as' => 'client.api.index'
  ]);
  //get my country announcements
  Route::post('get-user', [
  'uses' => 'API\PassportController@getDetails',
  'as' => 'client.my.country'
  ]);
  //get each announcement
  Route::post('get/each/{id}', [
  'uses' => 'API\PassportController@eachAnnouncement',
  'as' => 'client.each.announcement'
  ]);
  //create announcement
  Route::post('create/announcement', [
  'uses' => 'API\PassportController@createAnnouncement',
  'as' => 'create.announcement'
  ]);
  //create comment
  Route::post('create/comment', [
  'uses' => 'API\PassportController@createComment',
  'as' => 'client.comments'
  ]);
  //create tribute
  Route::post('create/tribute', [
  'uses' => 'API\PassportController@createTributes',
  'as' => 'client.tributes'
  ]);
  Route::get('storage/downloads/{id}', [
  'uses' => 'AnnouncementController@download',
  'as' => 'client.download'
  ]);
  //client Death announcement
  // Route::post('get/deathannouncement', [
  // 'uses' => 'API\PassportController@deathannouncement',
  // 'as' => 'client.deathannouncement'
  // ]);
  //client public announcement
  // Route::post('get/public', [
  // 'uses' => 'API\PassportController@public',
  // 'as' => 'client.public'
  // ]);
  //client missing person
  // Route::post('get/missing', [
  // 'uses' => 'API\PassportController@missing',
  // 'as' => 'client.missing'
  // ]);
  //client
  // Route::post('get/anniversaries', [
  // 'uses' => 'API\PassportController@anniversaries',
  // 'as' => 'client.anniversaries'
  // ]);
  /*updates the avatar*/
     Route::post('/profile/update/avatar',[
    'uses' => 'API\PassportController@update',
    'as' => 'profile.avatar'
    ]);
  //routes to extract images from storage
  Route::get('storage/upload/{id}','API\PassportController@upload');//returns image
  Route::get('storage/id/{id}','API\PassportController@id');//returns image
  Route::get('storage/defaults/avatars/{id}','API\PassportController@avatar');//returns image

});
