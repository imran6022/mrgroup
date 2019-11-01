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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Raw Cotton
Route::get('/raw-cot-purchase', 'RawcottonController@rawCottonPurchases')->name('rawcotPurchase');
Route::get('/raw-cot-purchase/add', 'RawcottonController@rawCottonPurchasesAdd')->name('rawcotpurchaseAdd');
Route::post('/raw-cot-purchase/create', 'RawcottonController@rawCottonPurchasescreate')->name('rawCottonPurchasescreate');
Route::get('/rawcotton/edit{id}', 'RawcottonController@rawCottonEdit')->name('rawCottonEdit');
Route::post('/rawcotton/update{id}', 'RawcottonController@rawCottonPurchaseUpdate')->name('rawCottonPurchaseUpdate');
Route::get('/rawcotton/delete{id}', 'RawcottonController@rawCottonDelete')->name('rawCottonDelete');

//count
Route::get('/count', 'settingController@count')->name('count');
Route::get('/count/add', 'settingController@count_add')->name('count_add');
Route::post('/count/create', 'settingController@create_count')->name('create_count');
Route::get('/count/edit{id}', 'settingController@edit_count')->name('edit_count');
Route::post('/count/update{id}', 'settingController@update_count')->name('update_count');
Route::get('/count/delete{id}', 'settingController@delete_count')->name('delete_count');

// Raw cotton type Setteng
Route::get('/rawcottontype', 'settingController@rawcottontype')->name('rawcottontype');
Route::get('/rawcottontype/add', 'settingController@rawcottontype_add')->name('rawcottontype_add');
Route::post('/rawcottontype/create', 'settingController@create_rowtype')->name('create_rowtype');

// Party 
Route::get('/party', 'settingController@party')->name('party');
Route::get('/party/add', 'settingController@party_add')->name('party_add');
Route::post('/party/create', 'settingController@create_party')->name('create_party');
Route::get('/party/edit{id}', 'settingController@edit_party')->name('edit_party');
Route::post('/party/update{id}', 'settingController@update_party')->name('update_party');
Route::get('/party/delete{id}', 'settingController@delete_party')->name('delete_party');
