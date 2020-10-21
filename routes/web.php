<?php

use App\Http\Controllers\CareerController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RolesController;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

//CRUD Statuses
Route::get('/statuses', 'StatusController@statuses')->name('status');

Route::post('/POST/statuses', 'StatusController@crear')->name('statuses.crear');

Route::post('/POST/eliminar/Statuses', 'StatusController@eliminar')->name('statuses.eliminar');

Route::get('/statuses/editar/{id}', 'StatusController@editar')->name('statuses.vistaEditar');

Route::put('/POST/editar/statuses/{id}', 'StatusController@update')->name('statuses.editar');

//CRUD Roles
Route::get('/roles', 'RolesController@roles')->name('rol');

Route::post('/POST/roles', 'RolesController@crear')->name('roles.crear');

Route::post('/POST/eliminar/roles', 'RolesController@eliminar')->name('roles.eliminar');

Route::get('/roles/editar/{id}', 'RolesController@editar')->name('roles.vistaEditar');

Route::put('POST/update/roles/{id}', 'RolesController@update')->name('roles.editar');

//CRUD Careers
Route::get('/career', 'CareerController@career')->name('carrera');

Route::post('/POST/career', 'CareerController@crear')->name('career.crear');

Route::post('/POST/eliminar/career', 'CareerController@eliminar')->name('career.eliminar');

Route::get('/carrer/editar/{id}', 'CareerController@editar')->name('career.vistaEditar');

Route::put('/POST/editar/roles/{id}', 'CareerController@update')->name('career.editar');


//CRUD Users
Route::get('/users', 'UsersController@users')->name('usuarios');

Route::post('/POST/users', 'UsersController@crear')->name('users.crear');

Route::post('/POST/eliminar/users', 'UsersController@eliminar')->name('users.eliminar');

Route::get('/users/editar/{id}', 'UsersController@editar')->name('users.vistaEditar');

Route::put('/POST/editar/users/{id}', 'UsersController@update')->name('users.editar');

//
Route::get('/media', 'MediaController@media')->name('medias');

Route::get('/mediable', 'MediableController@mediable')->name('mediables');

