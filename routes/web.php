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

Route::get('/','DashboardController@index')->name('dashboard');
Route::group(['prefix'=>'user'],function (){
        Route::get('/login','UserController@index')->name('login.show');
        Route::post('/login','UserController@login')->name('user.login');
        Route::get('/logout','UserController@logout')->name('logout');

        Route::get('/register','UserController@registershow')->name('register.show');
        Route::post('/register','UserController@register')->name('register.user');
});
Route::group(['prefix'=>'customer'],function (){
    Route::get('/create','CustomerController@index')->name('customer.show');
    Route::post('/register','CustomerController@register')->name('customer.register');

});
Route::group(['prefix'=>'product'],function (){
   Route::get('/create','ProductController@index')->name('product.show');
   Route::post('/create','ProductController@create')->name('product.create');
});
Route::group(['prefix'=>'invoice'],function (){
    Route::get('/show','InvoiceController@index')->name('invoice.show');
    Route::post('/create','InvoiceController@create')->name('invoice.create');

    Route::get('/all','InvoiceController@show')->name('invoices.all');

    Route::get('/PDFExport/{id}','InvoiceController@pdfexport')->name('invoice.pdfexport');



});
