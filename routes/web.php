<?php

Route::view('/', 'home')->name('home')->middleware('auth');

Route::resource('categoryexpense','CategoryExpenseController')->names('categoryexpense')->middleware('auth');

Route::resource('categoryincome','CategoryIncomeController')->names('categoryincome')->middleware('auth');

Route::resource('expense','ExpenseController')->names('expense')->middleware('auth');

Route::resource('income','IncomeController')->names('income')->middleware('auth');


Route::view('/contact', 'contact')->name('contact')->middleware('auth');
Route::post('contact', 'ContactController@store')->name('contact.store')->middleware('auth');

Auth::routes();

