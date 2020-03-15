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
    return view('welcome');
});



Route::get('/about', 'HomeController@about') ;
//Route::get('/about', function () {
//    return view('about');
//});

Route::get('/faq', 'HomeController@faq') ;
Route::get('/contact', 'HomeController@contact') ;

Route::get('/visa-list', function () {
    return view('visa-list');
});
Route::get('/dash', function () {
    return view('layouts.dashboard-layout');
});
Route::get('/visa-detail', function () {
    return view('visa-detail');
});

Route::get('/country-list', function () {
    return view('country-list');
});

Route::get('/country-detail', function () {
    return view('country-detail');
});

Route::get('/school-list', function () {
    return view('school-list');
});

Route::get('/school-detail/{school}', function ($school) {
    if(!$school){
        abort(404, 'sorry, we didnt get that school');
    }

    return view('school-detail', ['school'=> $school]);
});



Route::get('/course-detail', function () {
    return view('course-detail');
});
Route::get('/articles', 'ArticlesController@index') ;
Route::get('/articles/{slug}', 'ArticlesController@show') ;
Route::get('/services', 'ServicesController@index') ;
Route::get('/services/{slug}', 'ServicesController@show') ;
Route::post('/user/avatar', 'UserAvatarController@store');
Route::get('/user/avatar', 'UserAvatarController@getit');
Route::get('/user/destroy', 'UserProfileController@destroy');

Route::post('/tags', 'ArticlesController@searchDisplayTags');

Route::get('/countryservice', 'ServicesController@countryservice') ;
#user study
Route::get('/get-study', 'UserStudyController@get_study')->name('get_study');
Route::post('/store-study', 'UserStudyController@store_study')->name('store_study');


Route::get('/get-edu', 'UserEducationHistoryController@get_education')->name('get_edu');
Route::post('/store-edu', 'UserEducationHistoryController@store')->name('store_edu');
Route::delete('/delete-education/{id}', 'UserEducationHistoryController@delete_education');

Route::get('/get-work', 'UserWorkController@get_work')->name('get_work');
Route::post('/store-work', 'UserWorkController@store_work')->name('store_work');

Route::post('/store-background-info', 'UserBackgroundInfoController@store')->name('store-background-info');
Route::get('/get-background-info', 'UserBackgroundInfoController@get_background_info');

Route::get('/get-work-exp', 'UserWorkExperienceController@getWorkExp')->name('get_work_exp');
Route::post('/store-work-exp', 'UserWorkExperienceController@create')->name('store_work_exp');
Route::delete('/delete-work/{id}', 'UserWorkExperienceController@delete_work');

Route::post('/store-dependant', 'UserDependantsController@store')->name('store_dependants');
Route::get('/get-dependent', 'UserDependantsController@get_dependents')->name('get_dependents');
Route::delete('/delete-dependent/{id}', 'UserDependantsController@delete_dependents');


Route::get('/countries', 'UserProfileController@getCountries');

Route::get('/userProfileGet', 'UserProfileController@userProfileGet');
Route::get('/checkuser', 'UserProfileController@checkUserExisted');
Route::post('/userProfileUpdate', 'UserProfileController@userProfileUpdate')->name('updateUserProfile');

Route::post('/store-finsup', 'UserFinancialPlanController@store')->name('store_finsup');
Route::get('/get-finsup', 'UserFinancialPlanController@get_finsup')->name('get_finsup');

Route::post('/store-countries-visited', 'UserVisitedCountriesController@store')->name('store_countries_visited');
Route::get('/get-countries-visited', 'UserVisitedCountriesController@get_countries_visited')->name('get_countries_visited');
Route::delete('/delete-countries-visited/{id}', 'UserVisitedCountriesController@delete_countries_visited');




Route::post('reset_password_without_token', 'UserController@validatePasswordRequest');
Route::post('reset_password_with_token', 'UserController@resetPassword');

Route::get('/firsttime/{user}', 'ChangePasswordController@index')->name('firstimelogin');
//Route::post('/newsletter', 'UserController@newsletter');
Route::post('/newsletter', 'MailController@newsletter')->name('newsletter');
Route::post('/contact', 'MailController@contact')->name('contact');
Route::get('/threads', 'ThreadsController@index')->name('index');
Route::get('/threads/{thread}', 'ThreadsController@show')->name('show');
Route::get('/testimonials', 'UserTestimonialController@index');
Route::get('/testimonials/{testimonial}', 'UserTestimonialController@index');
Auth::routes(['verify' => true]);
Route::get('/', 'HomeController@index')->name('home');


Route::get('/dashboard', 'SinglePageController@index')->where('any', '^(?!nova-api).*$')->name('dashboard');
//Route::get('/dashboard', 'SinglePageController@index')->where('any', '^(?!nova-api).*$')->name('dashboard');
//Route::get('/{any}', 'SinglePageController@index')->where('any', '^(?!nova-api).*$');
//Route::get('/{any}')->where('any', '^(?!nova).*$');
//Route::get('/{any}', '/nova')->where('any', 'nova.*$');


//Route::post('/userProfileUpdate', 'UserProfileController@userProfileUpdate')->name('updateUserProfile');


#this routes search for any path with the single page dashboard in the vue router and fix the 404 error on refresh
//Route::get('{path}', 'SinglePageController@index')->where( 'path' , '([A-z\d\-\/_.]+)?' );
