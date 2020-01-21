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
Route::resource('forms','FormController');
Route::resource('skills','SkillsController');
Route::resource('portfolios','PortfolioController');
Route::resource('references','ReferencesController');
Route::resource('hiremes','HiremeController');
Route::resource('resumes','ResumeController');
Route::resource('homes','HomeController');
Route::resource('aboutmes','AboutMeController');
Route::resource('blogs','BlogController');
Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');


Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');
 
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');