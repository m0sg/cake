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

Route::get('/', ['uses'=>'IndexController@execute','as'=>'home']);

Route::post('/', ['uses'=>'IndexController@send_form','as'=>'mail']);

Route::get('/home',['uses'=>'IndexController@execute','as'=>'home']);

Route::get('/shop',['uses'=>'ShopController@execute', 'as'=>'shop']);

Route::get('/blog',['uses'=>'BlogController@execute', 'as'=>'blog']);

Route::get('/blog/{alias}',['uses'=>'PostController@execute', 'as'=>'post']);

Route::get('/shop/{alias}',['uses'=>'ProductController@execute', 'as'=>'product']);

Route::get('/showroom',['uses'=>'ShowroomController@execute','as'=>'showroom']);

Route::get('/about',['uses'=>'AboutController@execute','as'=>'about']);

Route::get('/contacts',['uses'=>'ContactsController@execute','as'=>'contacts']);

Route::get('search','SearchController@execute');


Route::auth();

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Кэш очищен.";
});

Route::post('send-mail', 'MailSetting@send_form');


