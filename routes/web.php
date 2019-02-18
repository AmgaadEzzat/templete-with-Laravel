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

Route::get('home',function(){
    return view('home');
});

//Route::get('contact','MyController@contact');
//
//Route::get('aboutus','MyController@aboutus');
//
//Route::get('CV','MyController@CV');
//
//Route::get('members','crudController@Smember');
//
//Route::get('addmember','crudController@Amember');
//
//Route::post('/add','crudController@Imember');
//
//Route::get('/members/{id}/delete','crudController@Dmember');
//
//Route::get('/members/{id}/edit','crudController@Emember');
//
//Route::post('/members/{id}/update','crudController@Umember');

Route::get('/about','TempletController@about');

Route::get('/','TempletController@home');

Route::get('/home','TempletController@home');

Route::get('/samplepost','TempletController@samplepost');

Route::get('/contact','TempletController@contact');

Route::post('/add','TempletController@insertPost');

Route::get('/','TempletController@selectPost');

Route::get('/{id}/deletePost','TempletController@deletePost');

Route::get('/{id}/editPost','TempletController@editPost');

Route::post('/{id}/Upost','TempletController@Upost');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/error',function(){
    return "الاسم محجوز";
});

Route::post('/','TempletController@insertPost')->middleware('CheckEmail');
