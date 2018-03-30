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
Route::get('/new', 'PageController@new');
Route::get('/todos', 'TodosController@index')->name('todos');

Route::post('/todos/create','TodosController@create')->name('create');
Route::get('/todos/delete/{id}','TodosController@delete')->name('todo.delete');

Route::get('/todos/update/{id}','TodosController@update')->name('todo.update');
Route::post('/todos/save/{id}','TodosController@save')->name('todo.save');
Route::get('/todos/completed/{id}','TodosController@completed')->name('todo.completed');
Route::get('/todos/mark/{id}','TodosController@mark')->name('todo.markAgain');