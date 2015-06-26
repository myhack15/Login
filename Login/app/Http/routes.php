<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
  'as' => 'show_homepage',
  'uses' => 'HomepageController@showHomepage',
]);

Route::get('/roles/new', [
  'as' => 'show_role_new_form',
  'uses' => 'RoleController@showRoleNewForm',
]);

Route::post('/roles/store', [
  'as' => 'store_new_role',
  'uses' => 'RoleController@storeNewRole',
]);

Route::get('/roles/search/{role_name}', [
  'as' => 'search_role_based_on_role_name',
  'uses' => 'RoleController@searchRoleName',
]);