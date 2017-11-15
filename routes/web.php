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

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/get',function (){
//
//$user=Auth::user();
//echo Auth
//
//});



Route::get('/admin/user/roles',['middleware'=>['role'],function(){

  return "";


}]);


Route::get('/admin','AdminController@index');



Route::get('/mail',function (){

$data =['title'=>'laravel','content'=>'great course'];

    Mail::send('emails.test',$data,function($message){

        $message->to('enter mail')->subject('first mail from laravel');

    });
});

