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

//Route::get('/', function () {
//
//    return view('welcome');//->with($data);
//});
//
//Route::get('/landing', function () {
//
//    return view('landing');//->with($data);
//});
//Route::get('/admin/login', function () {
//
//    return view('login');
//});
//Route::get('/admin/register', function () {
//    return view('register');
//});
//
//Route::get('/test', function () {
//    return 'welcome';
//});
//
//Route::get('index','Front\UserController@getIndex');
//
//// route parameters
//Route::get('/test2/{id}', function ($id) {
//    return $id;
//});
//Route::get('/test3/{id?}', function () {
//    return 'welcome';
//});
//
//// route names
//Route::get('/show-number/{id}', function ($id) {
//    return $id;
//}) -> name('a');
//
//Route::get('/show-string/{id?}', function () {
//    return 'welcome';
//}) -> name('b');
//
//Route::namespace('Front')->group(function (){
//    //all routes only access controller in folder front
//    Route::get('users','UserController@showUserName');
//});
//
///*Route::prefix('users')->group(function (){
//    Route::get('show','UserController@showUserName');
//    Route::get('delete','UserController@showUserName');
//    Route::get('edit','UserController@showUserName');
//    Route::get('update','UserController@showUserName');
//});*/
//
//Route::group(['prefix' =>'users','middleware'=> 'auth'],function (){
//    Route::get('/',function (){
//        return 'work';
//    });
//    Route::get('show','UserController@showUserName');
//    Route::get('delete','UserController@showUserName');
//    Route::get('edit','UserController@showUserName');
//    Route::get('update','UserController@showUserName');
//});
//
//Route::get('check',function (){
//   return 'middleware';
//})-> middleware('auth');
//
//Route::group(['namespace'=> 'Admin','middleware'=> 'auth'],function (){
//    Route::get('second','SecondController@showString0');
//});
//
//Route::resource('news','NewsController');
//
//
//Route::get('login',function (){
//    return 'must login first!';
//}) -> name('login');
//
//Route::get('second','Admin\SecondController@showString');

Auth::routes(['verify'=>true]);

Route::get('/', function (){
//    return view('landing');
    return 'home';
});

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
