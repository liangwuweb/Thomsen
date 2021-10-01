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

//Route::get('cat/{id}', 'PagesController@getCat')->where('id', '(1|2|3)');

Route::get('category', 'CategoryController@getIndex')->name('category');

Route::get('product/{id}', 'ProductController@getProduct')->name('product');

Route::get('subcategory/{id}',
  [
    'as' => 'subcategory.menu',
    'uses' => 'CategoryController@getSubcatgory'
  ]
);

// Route::get('product', 'PagesController@getProduct');

Route::get('contact', 'PagesController@getContact');

Route::get('about', 'PagesController@getAbout');

Route::get('/', 'PagesController@getIndex');

Route::resource('posts', 'PostController');
