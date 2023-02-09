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
    return view('project.home');
});
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
Route::get('/room_category',function(){
    return view('project.room_category');
});
Route::get('/all_room',function (){
    return view('project.all_room');
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
Route::get('/doctor_profile',function(){
    return view('project.doctor_profile');
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
Route::get('/normal_room',function(){
    return view('project.normal_room');
});