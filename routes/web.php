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
Use App\Http\Controllers\ArticlesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', function () {
    return ArticlesController::index();
});

Route::get('/articles/add', function () {
    return view('/articles/add-articles');
});

Route::post('new-article', array('uses' => 'ArticlesController@add'));