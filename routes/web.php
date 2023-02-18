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

// Route::get('lang/{lang}', 'Frontend\HomeController@lang');

// ************* Fronted Route *****************

Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
    
    // ************* Home Page Route *****************

    Route::get('/', 'Frontend\HomeController@index');
   
    // ************* Doctor Route *****************
    
    Route::get('/doctor_profile/{id}', 'Frontend\DoctorController@doctor_detail');
    
    // ************* Article Route *****************
    
    Route::get('/articles', 'Frontend\ArticleController@index');
    Route::get('/article_detail/{id}', 'Frontend\ArticleController@article_detail');
    
    // ************* News Route *****************
    
    Route::get('/news', 'Frontend\NewsController@index');
    Route::get('/news_detail/{id}', 'Frontend\NewsController@news_detail');

    // ************* Service Route *****************
    
    Route::get('/services', 'Frontend\HomeController@services');

    // ************* About Us Route *****************
    
    Route::get('/about_us', 'Frontend\HomeController@about_us');

    // ************* Career Route *****************
    
    Route::get('/career', 'Frontend\CareerController@index');
    Route::get('/career_detail/{id}', 'Frontend\CareerController@show');
    
});
// ************* Rooms Route *****************

Route::get('/room_category', 'RoomController@index');
Route::get('/vip_all', 'RoomController@vip_rooms');
Route::get('/normal_all', 'RoomController@normal_rooms');

Route::get('/booking',function(){
    return view('project.booking');
});
Route::get('/contact_us',function (){
    return view('project.contact_us');
});
Route::get('/appointment',function(){
    return view('project.appointment');
});

Route::get('/department',function(){
    return view('project.department');
});
Route::get('/schedules',function(){
    return view('project.schedules');
});
Route::get('/payment',function(){
    return view('project.payment');
});
Route::get('/find_doctor',function(){
    return view('project.find_doctor');
});


Route::prefix('admin')->group(function () {
    Route::get('dashboard', 'Backend\PageController@dashboard');

    // ************* Doctor Route *****************

    Route::get('doctors', 'Backend\DoctorController@index');

    // ************* Article Route *****************

    Route::get('articles', 'Backend\ArticleController@index');
    Route::get('add_new_article', 'Backend\ArticleController@create');
    Route::post('add_new_article', 'Backend\ArticleController@store');
    Route::get('article/edit/{id}', 'Backend\ArticleController@edit');
    Route::post('article/edit/{id}', 'Backend\ArticleController@update');
    Route::get('article_detail/{id}', 'Backend\ArticleController@show');
    Route::get('article/{id}', 'Backend\ArticleController@destroy');
    

    // ************* News Route *****************

    Route::get('news', 'Backend\NewsController@index');
    Route::get('add_news', 'Backend\NewsController@create');
    Route::post('add_news', 'Backend\NewsController@store');
    Route::get('news/edit/{id}', 'Backend\NewsController@edit');
    Route::post('news/edit/{id}', 'Backend\NewsController@update');
    Route::get('news_detail/{id}', 'Backend\NewsController@show');
    Route::get('news/{id}', 'Backend\NewsController@destroy');

});
