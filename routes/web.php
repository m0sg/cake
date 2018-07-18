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

//Route::resource('/', 'IndexController');

Route::get('/',['uses'=>'IndexController@execute','as'=>'home']);
Route::get('/home',['uses'=>'IndexController@execute','as'=>'home']);


Route::get('/shop',['uses'=>'ShopController@execute', 'as'=>'shop']);

Route::get('/blog',['uses'=>'BlogController@execute', 'as'=>'blog']);

Route::get('/blog/{alias}',['uses'=>'PostController@execute', 'as'=>'post']);

//Route::get('/shop/{category_alias}/{alias}',['uses'=>'CakeController@execute', 'as'=>'cake']);

//Route::get('/shop/pastries/{alias}',['uses'=>'PastriesController@execute', 'as'=>'pastries']);

Route::get('/showroom',['uses'=>'ShowroomController@execute','as'=>'showroom']);

Route::get('/about',['uses'=>'AboutController@execute','as'=>'about']);

Route::get('/contacts',['uses'=>'ContactsController@execute','as'=>'contacts']);

Route::auth();

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Кэш очищен.";
});

//Route::match(['get', 'post'], '/',['uses'=>'IndexController@execute','as'=>'home']);

//Route::resource('shop', 'ShopController');
//
//Route::resource('blog', 'BlogsController');

//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');


