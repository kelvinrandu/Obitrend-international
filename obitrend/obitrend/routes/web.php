<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//facebook login
Route::get('auth/facebook', 'Auth\LoginController@redirectToProvider')->name('facebook.login');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleProviderCallback');

 Route::get('/about', 'LandingController@index')->name('about');
 Route::get('/pricing', 'LandingController@pricing')->name('pricing');
 Route::get('/', 'LandingController@welcome')->name('welcome');
 //verify email route
 Route::get('verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
 //send email token
 Route::get('verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');



Auth::routes();

Route::get('/view/announcements', 'HomeController@index')->name('view.announcements');
Route::get('/home', 'HomeController@home')->name('home');

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/profile/{slug}',[
    'uses' => 'ProfileController@index',
    'as' => 'profile',
     ]);
//fetches the edit page
     Route::get('/profile/edit/profile',[
    'uses' => 'ProfileController@index',
    'as' => 'profile.edit'
    ]);

  /*updates the avatar*/
     Route::post('/profile/update/avatar',[
    'uses' => 'ProfileController@avatar',
    'as' => 'profile.avatar'
    ]);

//updates user profile
    Route::post('/profile/update/profile',[
    'uses' => 'ProfileController@update',
    'as' => 'profile.update'
    ]);

    Route::get('/admin', [
    'uses' => 'AdminController@index',
    'as' => 'admin.index'
    ]);
    Route::get('/admin/view', [
    'uses' => 'AdminController@get_all_requests',
    'as' => 'admin.view.requests'
    ]);
    /*updates the announcement details of user*/
      Route::post('announcement/update/announcement',[
      'uses' => 'AdminController@updateRequest',
      'as' => 'update.request'
      ]);
  // fetches the make request view
    Route::get('/index', [
    'uses' => 'HomeController@home',
    'as' => 'client.index'
    ]);
    //fetches the request as per the user's country
    Route::get('/announcements/view/myCountry', [
    'uses' => 'HomeController@my_country',
    'as' => 'client.country.view'
    ]);

// sends client request from form data to controller
    Route::post('/announcements/make', [
    'uses' => 'AnnouncementController@create',
    'as' => 'create.announcement'
    ]);

    //updates announcements
    Route::post('/announcements/update/{id}', [
    'uses' => 'AnnouncementController@update',
    'as' => 'update.announcement'
    ]);
    // fetches the request  view
    Route::get('/announcements/make', [
    'uses' => 'AnnouncementController@index',
    'as' => 'client.make'
    ]);

    //fetches each announcement
    Route::get('/announcements/show/{id}', [
    'uses' => 'AnnouncementController@announcements',
    'as' => 'client.view.each'
    ]);
    Route::get('/admin/request/{id}', [
    'uses' => 'AdminController@get_request',
    'as' => 'admin.get.request'
    ]);
    //block user
    Route::get('/admin/block/{id}', [
    'uses' => 'AdminController@block',
    'as' => 'admin.block.user'
    ]);
    //approves user request
    Route::get('/admin/approve/{id}', [
    'uses' => 'AdminController@approve_request',
    'as' => 'admin.approve.request'
    ]);
    //decline user request
    Route::get('/admin/decline/{id}', [
    'uses' => 'AdminController@decline_request',
    'as' => 'admin.decline.request'
    ]);
    Route::get('/administrator', [
    'uses' => 'SuperAdminController@index',
    'as' => 'super.admin.index'
    ]);
    Route::get('super/admin/view', [
    'uses' => 'SuperAdminController@get_all_requests',
    'as' => 'super.admin.view'
    ]);
    //demote  admin
    Route::get('/admin/demote/{id}', [
    'uses' => 'SuperAdminController@demote',
    'as' => 'demote.admin'
    ]);
      //promote user to admin
    Route::get('/admin/promote/{id}', [
    'uses' => 'SuperAdminController@promote',
    'as' => 'promote.user'
    ]);
    //gets each request as selected by the user
    Route::get('announcement/each/{id}', [
    'uses' => 'AnnouncementController@get_each_announcements',
    'as' => 'client.each.announcement'
    ]);
    //posts tributes
    Route::post('/tributes/create', [
    'uses' => 'AnnouncementController@create_comment',
    'as' => 'create.comment'
    ]);
    //posts comment
    Route::post('/comments/create', [
    'uses' => 'AnnouncementController@create_comments',
    'as' => 'create.comments'
    ]);
    // Route::get('downloads/{id}', [
    // 'uses' => 'AnnouncementController@download',
    // 'as' => 'announcement.download'
    // ]);


    //routes to extract images from storage
    Route::get('storage/upload/{id}','AnnouncementController@upload');
    Route::get('storage/id/{id}','AnnouncementController@id');
    Route::get('storage/defaults/avatars/{id}','AnnouncementController@avatar');
    Route::get('downloads/','AnnouncementController@download')->name('announcement.download');


});
