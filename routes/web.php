<?php

use Illuminate\Support\Facades\Route;

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

// USER SIDE
Route::get('/', 'HomepageController@index');
Route::get('/about-us', function () {
    return view('user-side.about-us');
});


// ADMIN SIDE
// PROJECTS
Route::get('/admin/projects/', 'ProjectsController@index');
Route::post('/admin/projects/add-project', 'ProjectsController@store');
Route::put('/admin/projects/update-project/{id}', 'ProjectsController@update');
Route::get('/admin/projects/delete-project/{id}', 'ProjectsController@destroy');

// USERS
Route::get('/admin/users', 'UsersController@index');
Route::post('/admin/users/add-user', 'UsersController@store');
Route::get('/admin/users/delete-user/{id}', 'UsersController@destroy');
