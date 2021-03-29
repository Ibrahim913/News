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
    return view('frontEnd.index')->withAct('home');
});
Route::get('about', function () {
    return view('frontEnd.about')->withAct('about');
});
Route::get('services', function () {
    return view('frontEnd.services')->withAct('services');
});
Route::get('gallery', function () {
    return view('frontEnd.gallery')->withAct('gallary');
});

Route::get('contact', function () {
    return view('frontEnd.contact')->withAct("contact");
});

Route::get('reserve', function () {
    return view('frontEnd.alexReservation')->withAct('services');
});


// Auth routes
Route::get('/signup','frontEnd\authCtrl@signup');
Route::post('/signup','frontEnd\authCtrl@doSignup');
Route::get('/login','frontEnd\authCtrl@login');
Route::post('/login','frontEnd\authCtrl@doLogin');
Route::get('/logout','frontEnd\authCtrl@logout');






//backEnd routes
Route::get('/dashboard','backEnd\dashCtrl@index');
// ---------------------------------------------------------------------
//users manage
Route::get('/dashboard/users','backEnd\usersCtrl@index');
//add
Route::get('/dashboard/users/add','backEnd\usersCtrl@add');
Route::post('/dashboard/users/add','backEnd\usersCtrl@doAdd');
//edit
Route::get('/dashboard/users/edit/{id}','backEnd\usersCtrl@edit');
Route::post('/dashboard/users/edit/{id}','backEnd\usersCtrl@update');
//delete
Route::post('/dashboard/users/del','backEnd\usersCtrl@delete');
// -----------------------------------------------------------------------
//tourguides
Route::get('/dashboard/tourGuides','backEnd\tourGuidesCtrl@index');
//add
Route::get('/dashboard/tourGuides/add','backEnd\tourGuidesCtrl@add');
Route::post('/dashboard/tourGuides/add','backEnd\tourGuidesCtrl@doAdd');
//edit
Route::get('/dashboard/tourGuides/edit/{id}','backEnd\tourGuidesCtrl@edit');
Route::post('/dashboard/tourGuides/edit/{id}','backEnd\tourGuidesCtrl@update');
//delete
Route::post('/dashboard/tourGuides/del','backEnd\tourGuidesCtrl@delete');
// -----------------------------------------------------------------------------
//locations
Route::get('/dashboard/locations','backEnd\locationsCtrl@index');













//FrontEnd Routes

