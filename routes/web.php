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

// Route::get('/', function () {
//     return view('welcome');
// });

// Pages
Route::get('/', 'PagesController@index')->name('main');
Route::get('/blog', 'PagesController@blog')->name('blog.index');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/downloads', 'PagesController@downloads')->name('downloads');
Route::get('/news/tenders', 'PagesController@tenders')->name('tenders');
Route::get('/news/jobs', 'PagesController@jobs')->name('jobs');
////////////////////////

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

///// Admin ////////
Route::prefix('manage')->middleware('role:superadministrator|administrator')
->group(function () {

  Route::get('/', 'ManageController@index');
  Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
  Route::resource('/users', 'UserController');
  Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
  Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
  Route::resource('/posts', 'PostController');
  Route::resource('/tenders-admin', 'TenderAdminController');
  Route::resource('/cate_tenders-admin', 'CateTendersAdminController');

});

///// Website ////////
Route::prefix('manage-website')->middleware('role:superadministrator|administrator|editor')
->group(function () {

  Route::get('/', 'Manage_websiteController@index');
  Route::get('/dashboard', 'Manage_websiteController@dashboard')->name('manage_website.dashboard');
  Route::resource('/tenders', 'TenderController');
  Route::resource('/cate_tenders', 'CateTenderController');
});
