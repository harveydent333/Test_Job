<?php

Auth::routes();
Route::group(['middleware'=>'auth'],function(){
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin',['uses'=>'mainController@admin'])->name('admin');
Route::post('store',['uses'=>'mainController@store'])->name('store');
Route::delete('/{id}/delete',['uses'=>'mainController@delete'])->name('delete');
Route::get('{id}/show',['uses'=>'mainController@show'])->name('show');
Route::get('{id}/edit',['uses'=>'mainController@edit'])->name('edit');
Route::put('{id}/update',['uses'=>'mainController@update'])->name('update');
});
Route::get('/','mainController@index' )->name('welcome');
Route::get('uploaded/{has_user}/{has_file}','mainController@upload')->name('upload');
Route::post('storeFile','mainController@storeFile')->name('storeFile');
