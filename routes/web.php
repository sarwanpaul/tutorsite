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
    return view('/homepage');
});

Auth::routes();


Route::group(array('prefix' => 'admin'),function(){
	
	Route::get('/logout', function (){
		Auth::logout();
		return redirect('/login');
	});
	Route::get('/home', 'HomeController@index');
	Route::any('/dashboard', 'AdminController@adminDashboard');
	Route::any('/addquestion', 'AdminController@addQuestion');
	Route::any('/editquestion', 'AdminController@editQuestion');
	Route::any('/deleterecord', 'AdminController@deleteQuestoin');
});



include('front_web.php');