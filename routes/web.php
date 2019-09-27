<?php

//Route::get('/', function () {
//    return view('home');
//})->name('home');

Route::view('/', 'home')->name('home');


Route::resource('categoryexpense','CategoryExpenseController')->names('categoryexpense');

Route::resource('categoryincome','CategoryIncomeController')->names('categoryincome');

Route::resource('expense','ExpenseController')->names('expense');

Route::resource('income','IncomeController')->names('income');


Route::view('/contact', 'contact')->name('contact');
Route::post('contact', 'ContactController@store')->name('contact.store');
