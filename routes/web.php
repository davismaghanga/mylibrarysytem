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
    return view('admin.pages.welcome');
});
//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//this route is for viewing all the books
Route::get('/allbooks','BookController@viewall')->name('allbooks');

//this route gets you to where you can add more books
Route::get('/addpage',function (){
   return view('admin.pages.addpage');
});

//this route actually now posts abook on the form
Route::post('/postbook','BookController@store')->name('postbook');

//this route helps to fetch info about a book from the db and display it on the form for updating
Route::get('/getbook/{id}','BookController@getbook');

//this route now actually updates the value put on the form as indicated in the comment above
Route::post('/getbook/{id}','BookController@update');

//this route shows you all the available books and their statuses whether borrowed or not
Route::get('/allbooks/{id}','BookController@borrow');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
