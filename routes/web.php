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

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();
Route::resource('dashboard','\App\Http\Controllers\root\UserProfileController');
Route::resource('posttask','\App\Http\Controllers\root\JobPostController');
Route::resource('browsetask','\App\Http\Controllers\root\BrowseTaskController');
Route::resource('mytask','\App\Http\Controllers\root\MyTaskController');
Route::resource('viewtask','\App\Http\Controllers\root\ViewJobController');
Route::resource('postoffer','\App\Http\Controllers\root\OfferController');
Route::resource('postskill','\App\Http\Controllers\root\UserSkillController');
Route::resource('viewtask/viewprofile','\App\Http\Controllers\root\ViewProfileController');
Route::get('viewtask/accept_offer/{offer_id}', "AcceptOfferController@Accept");
Route::get('viewtask/finish_offer/{id}', "AcceptOfferController@finish");
Route::get('viewtask/createmessage/{id}',"root\messagecontroller@create");
Route::get('/message',"root\messagecontroller@index");
Route::get('/viewcons/{id}',"root\conversationcontroller@index");
Route::post('/viewcons/send_message/{id}', "root\conversationcontroller@post_message");
//Route::get('/home', 'HomeController@index');
//email
Route::get('/email', function () {
    return view('send_email');
});
Route::post('/sendEmail', 'Email@sendEmail');