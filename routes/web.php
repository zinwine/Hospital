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

Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
    
    // ************* Home Page Route *****************

    Route::get('/', 'Frontend\HomeController@index');
   
    // ************* Doctor Route *****************
    
    Route::get('/doctor_profile/{id}', 'Frontend\DoctorController@doctor_detail');
    
    // ************* Article Route *****************
    
    Route::get('/article_detail/{id}', 'Frontend\ArticleController@article_detail');
    
    // ************* News Route *****************
    
    Route::get('/news_detail/{id}', 'Frontend\NewsController@news_detail');
    
});
// ************* Rooms Route *****************

Route::get('/room_category', 'RoomController@index');
Route::get('/vip_all', 'RoomController@vip_rooms');
Route::get('/normal_all', 'RoomController@normal_rooms');

Route::get('/news',function (){
    return view('project.news');
});
Route::get('/single_new',function(){
    return view('project.single_new');
});
Route::get('/articles',function (){
    return view('project.articles');
});
Route::get('/single_article',function(){
    return view('project.single_article');
});
Route::get('/career',function (){
    return view('project.career');
});
Route::get('/career_detail',function(){
    return view('project.career_detail');
});
Route::get('/booking',function(){
    return view('project.booking');
});
Route::get('/services',function(){
    return view('project.services');
});
Route::get('/about_us',function(){
    return view('project.about_us');
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

    // ************* News Route *****************

    Route::get('news', 'Backend\NewsController@index');

});