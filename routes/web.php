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

Route::get('/', 'testController@index');

Route::get('admin',function(){
	return view('admin-dashboard.layout.master');
});


Route::get('ckan','ckanController@ckan');
Route::get('ckanapi','ckanController@ckanapi');

Route::post('search','ckanController@search');

Route::post('datasetcreate','ckanController@datasetcreate');

//************************* Admin Menus Management *******************************************

Route::Resource('menus','MenuController');
Route::post('editmenus','MenuController@editmenus');

Route::Resource('submenus','SubMenuController');
Route::post('editsubmenus','SubMenuController@editsubmenus');