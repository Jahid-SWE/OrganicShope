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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[
   'uses'=> 'OganiShopController@index',
   'as'  => 'home'
]);
Route::get('/shop-category',[
    'uses'=> 'OganiShopController@ShopCategory',
    'as'  => 'shop-category'
]);
Route::get('/shop-details',[
    'uses'=> 'OganiShopController@shopeDetails',
    'as'  => 'shop-details'
]);
Route::get('/shopping-card',[
    'uses'=> 'OganiShopController@shoppingCard',
    'as'  => 'shopping-card'
]);
Route::get ('/check-out',[
    'uses'=>'OganiShopController@checkOut',
    'as' => 'chek-out'
]);
Route::get ('/blog-details',[
    'uses'=>'OganiShopController@blogDetails',
    'as' => 'blog-details'
]);
Route::get ('/blog',[
    'uses'=>'OganiShopController@blog',
    'as' => 'blog'
]);
Route::get ('/contact',[
    'uses'=>'OganiShopController@contact',
    'as' => 'contact'
]);





