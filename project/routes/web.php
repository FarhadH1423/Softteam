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



Route::get('/','Front\FrontController@index')->name('front.index');
Route::get('/contact','Front\FrontController@contact')->name('front.contact');


Route::post('/contact/store','Front\ContactController@store')->name('front.store');


Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/login/submit', 'Admin\LoginController@login')->name('admin.login.submit');
Route::get('/logout', 'Admin\LoginController@logout')->name('admin.logout');
Route::get('/Admin', 'Admin\DashboardController@index')->name('admin.dashboard');

Route::get('/adv','Admin\AdvertiseController@index')->name('advertise.index');
Route::get('/adv/create','Admin\AdvertiseController@create')->name('advertise.create');
Route::post('/adv/store','Admin\AdvertiseController@store')->name('advertise.store');
Route::get('/adv/edit','Admin\AdvertiseController@edit')->name('advertise.edit');
Route::post('/adv/update','Admin\AdvertiseController@update')->name('advertise.update');

Route::get('/about','Admin\AboutController@index')->name('about.index');
Route::get('/about/create','Admin\AboutController@create')->name('about.create');
Route::post('/about/store','Admin\AboutController@store')->name('about.store');
Route::get('/about/edit','Admin\AboutController@edit')->name('about.edit');
Route::post('/about/update','Admin\AboutController@update')->name('about.update');


Route::get('/service','Admin\ServiceController@index')->name('service.index');
Route::get('/service/create','Admin\ServiceController@create')->name('service.create');
Route::post('/service/store','Admin\ServiceController@store')->name('service.store');
Route::get('/service/edit/{id}','Admin\ServiceController@edit')->name('service.edit');
Route::post('/service/update/{id}','Admin\ServiceController@update')->name('service.update');
Route::get('/service/delete/{id}','Admin\ServiceController@delete')->name('service.delete');


Route::get('/faq','Admin\FaqController@index')->name('faq.index');
Route::get('/faq/create','Admin\FaqController@create')->name('faq.create');
Route::post('/faq/store','Admin\FaqController@store')->name('faq.store');
Route::get('/faq/edit/{id}','Admin\FaqController@edit')->name('faq.edit');
Route::post('/faq/update/{id}','Admin\FaqController@update')->name('faq.update');
Route::get('/faq/delete/{id}','Admin\FaqController@delete')->name('faq.delete');


Route::get('/client','Admin\ClientController@index')->name('client.index');
Route::get('/client/create','Admin\ClientController@create')->name('client.create');
Route::post('/client/store','Admin\ClientController@store')->name('client.store');
Route::get('/client/edit/{id}','Admin\ClientController@edit')->name('client.edit');
Route::post('/client/update/{id}','Admin\ClientController@update')->name('client.update');
Route::get('/client/delete/{id}','Admin\ClientController@delete')->name('client.delete');

Route::get('/latest','Admin\LatestController@index')->name('latest.index');
Route::get('/latest/create','Admin\LatestController@create')->name('latest.create');
Route::post('/latest/store','Admin\LatestController@store')->name('latest.store');
Route::get('/latest/edit/{id}','Admin\LatestController@edit')->name('latest.edit');
Route::post('/latest/update/{id}','Admin\LatestController@update')->name('latest.update');
Route::get('/latest/delete/{id}','Admin\LatestController@delete')->name('latest.delete');
Route::get('/latest/check/','Admin\LatestController@check')->name('latest.check');


Route::get('/contactp','Admin\ContactpController@index')->name('contactp.index');
Route::get('/contactp/create','Admin\ContactpController@create')->name('contactp.create');
Route::post('/contactp/store','Admin\ContactpController@store')->name('contactp.store');

Route::get('/gallery','Admin\GalleryController@index')->name('gallery.index');
Route::get('/gallery/create','Admin\GalleryController@create')->name('gallery.create');
Route::post('/gallery/store','Admin\GalleryController@store')->name('gallery.store');
Route::get('/gallery/edit/{id}','Admin\GalleryController@edit')->name('gallery.edit');
Route::post('/gallery/update/{id}','Admin\GalleryController@update')->name('gallery.update');
Route::get('/gallery/delete/{id}','Admin\GalleryController@delete')->name('gallery.delete');



Route::get('employe/login', 'Employe\EloginController@showLoginForm')->name('employe.login');
Route::post('employe/login/submit', 'Employe\EloginController@login')->name('employe.login.submit');
Route::get('employe/logout', 'Employe\EloginController@logout')->name('employe.logout');
Route::get('/employe', 'Employe\DashboardController@index')->name('employe.dashboard');