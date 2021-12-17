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

const PAGINATION_COUNT = 7;
Auth::routes(['verify' => true]);

Route::get('/', function () {

    return view('welcome');//->with($data);
});
Route::get('/', function () {
//    return view('landing');
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return 'not adult';
})->name('not.adult');


Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/fillable', 'CrudController@getOffers');

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::group(['prefix' => 'offers'], function () {
        Route::get('/create', 'CrudController@create');
        Route::post('/store', 'CrudController@store')->name('offers.store');
        Route::get('/all','CrudController@getAllOffers')->name('offers.all');
        Route::get('/edit/{offer_id}', 'CrudController@editOffer');
        Route::post('/update/{offer_id}', 'CrudController@updateOffer')->name('offers.update');
        Route::get('/delete/{offer_id}', 'CrudController@deleteOffer')->name('offers.delete');
        Route::get('/get-all-inactive-offers','CrudController@getAllInactiveOffers')->name('offers.all');

    });

    Route::get('youtube','CrudController@getVideo')->middleware('auth');

});


################################## AJAX ######################################
Route::group(['prefix' => 'ajax-offers'],function(){
    Route::get('/create','OfferController@create');
    Route::post('/store','OfferController@store') -> name('ajax.offers.store');
    Route::get('/all','OfferController@getAllOffers')->name('ajax.offers.all');
    Route::post('/delete', 'OfferController@delete')->name('ajax.offers.delete');
    Route::get('/edit/{offer_id}', 'OfferController@edit')->name('ajax.offers.edit');
    Route::post('/update', 'OfferController@update')->name('ajax.offers.update');


});

################################## END AJAX ##################################

############################## Authentication && Guards ######################
Route::group(['middleware' => 'CheckAge','namespace' =>'Auth'],function(){
    Route::get('adults','CustomAuthController@adult')-> name('adult');

});
Route::get('site','Auth\CustomAuthController@site')-> name('adult:web');
Route::get('admin','Auth\CustomAuthController@admin')-> name('adult:admin');

Route::get('admin/login','Auth\CustomAuthController@adminLogin')-> name('admin.login');
Route::post('admin/login','Auth\CustomAuthController@checkAdminLogin')-> name('save.admin.login');

############################## End Authentication && Guards ######################

######################## Relations Routes ######################

Route::get('has-one','Relation\RelationsController@hasOneRelation');

Route::get('has-one-reverse','Relation\RelationsController@hasOneRelationReverse');

Route::get('get-user-has-phone','Relation\RelationsController@getUserHasPhone');

Route::get('get-user-not-has-phone','Relation\RelationsController@getUserNotHasPhone');

Route::get('get-user-where-has-phone-with-condition','Relation\RelationsController@getUserWhereHasPhoneWithCondition');


######################## One to many RelationShip #######################

Route::get('hospital-has-many','Relation\RelationsController@getHospitalDoctors');

Route::get('hospitals','Relation\RelationsController@hospitals')->name('hospital.all');

Route::get('hospitals/{hospital_id}','Relation\RelationsController@deleteHospital')->name('hospital.delete');

Route::get('doctors/{hospital_id}','Relation\RelationsController@doctors')->name('hospitals.doctors');

Route::get('hospitals-has-doctors','Relation\RelationsController@hospitalsHasDoctors');

Route::get('hospitals-has-doctors-male','Relation\RelationsController@hospitalsHasOnlyMaleDoctors');

Route::get('hospitals-not-has-doctors','Relation\RelationsController@hospitalsNotHasDoctors');

######################### End One to many RelationShip ######################

######################### Many to many RelationShip #########################
Route::get('doctors-services','Relation\RelationsController@getDoctorServices');

Route::get('services-doctors','Relation\RelationsController@getServicesDoctor');

Route::get('doctors/services/{doctor_id}','Relation\RelationsController@getDoctorServicesById')->name('doctor.services');

Route::post('save-services-to-doctor','Relation\RelationsController@SaveServicesToDoctors')->name('save.doctors.services');

######################### EndMany to many RelationShip ######################

######################### Has One Through RelationShip ######################
Route::get('has-one-through','Relation\RelationsController@getPatientDoctor');

Route::get('has-many-through','Relation\RelationsController@getCountryDoctors');
######################### End Has One Through RelationShip ######################


######################## End Relations Routes ######################

######################## Accessors and mutator ####################
Route::get('accessors','Relation\RelationsController@getDoctors'); //get data


######################## Accessors and mutator ####################
