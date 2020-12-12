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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/apps', 'HomeController@apps')->name('apps');
Route::get('/games', 'HomeController@games')->name('games');
Route::get('/videos', 'HomeController@videos')->name('videos');
Route::get('/i-oasis', 'HomeController@ioasis')->name('ioasis');
Route::get('/library', 'HomeController@library')->name('library');
Route::get('/checkout', 'HomeController@checkout')->name('checkout')->middleware('auth');
Route::get('/game_detail/{game_id}', 'HomeController@game_detail')->name('game_detail');
Route::get('/subscription', 'HomeController@subscription')->name('subscription')->middleware('auth');
Route::get('/confirm', 'HomeController@confirm')->name('confirm')->middleware('auth');
Route::get('/email/verify/{id}', 'HomeController@verify')->middleware('auth');

Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');
Route::post('paypal', 'PayPalController@payment')->name('paypal.post');
Route::get('paypal/cancel', 'PayPalController@cancel')->name('paypal.cancel');
Route::get('paypal/success', 'PayPalController@success')->name('paypal.success');

Route::group(["middleware" => ["checkadmin"], "prefix" => "admin"], function() {
    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/games', 'AdminController@games')->name('admin.games');
    Route::get('/category', 'AdminController@category')->name('admin.category');
    Route::get('/compatible', 'AdminController@compatible')->name('admin.compatible');
    Route::get('/oasis', 'AdminController@oasis')->name('admin.oasis');
});
Route::group(["middleware" => ["checkcompany"], "prefix" => "company"], function() {
    Route::get('/dashboard', 'CompanyController@dashboard')->name('company.dashboard');    
});
// ajax---------------------------------------------------------------------------------------------------------//

Route::post('/postimgupload','AdminController@postimgupload');
Route::post('/postimguploadsub','AdminController@postimguploadsub');
Route::post('/store_game','AdminController@store_game');
Route::get('/change_game_status','AdminController@change_game_status');
Route::post('/store_main_category','AdminController@store_main_category');
Route::get('/edit_main_category','AdminController@edit_main_category');
Route::get('/delete_main_category','AdminController@delete_main_category');

Route::post('/store_sub_category','AdminController@store_sub_category');
Route::get('/edit_sub_category','AdminController@edit_sub_category');
Route::get('/delete_sub_category','AdminController@delete_sub_category');

Route::get('/get_sub_category','AdminController@get_sub_category');
Route::get('/delete_game','AdminController@delete_game');

Route::post('/upload_compatible_img','AdminController@upload_compatible_img');
Route::post('/upload_oasisenjoy_img','AdminController@upload_oasisenjoy_img');

Route::post('/store_compatible','AdminController@store_compatible');
Route::get('/delete_compatible','AdminController@delete_compatible');
Route::get('/resend_link','HomeController@resend_link');

Route::get('/addcart','HomeController@addcart');
Route::get('/get_addcart','HomeController@get_addcart');
Route::get('/delete_addcart','HomeController@delete_addcart');


