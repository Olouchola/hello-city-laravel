<?php

use Illuminate\Support\Facades\Route;
//Route::get('/', function(){
//	return view('pages/welcome');
//})->name('welcome');
Route::view('/','pages.welcome')->name('welcome');

Route::get('/about-us',function(){
	return view('pages/about');
})->name('about');
Route::get('/help',function(){
	return view('pages.help');
});


