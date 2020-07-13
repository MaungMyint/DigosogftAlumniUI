<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::resource('/','MainController');

Route::get('/detail','StudentController@mydetail');
Route::get('/import','ImportexcelController@import');
Route::get('/createusers','UseraccountController@createuser');
Route::get('/loginusers','UseraccountController@loginuser');
Route::get('/profile','StudentprofileController@profile');
Route::get('/password','ChangepasswordController@password');
Route::get('/course','CourseController@createCourse');
Route::get('/phase','PhaseController@createphase');
Route::get('/studentprofile','StudentPerProfileController@studentaccount');
Route::get('/editstudentprofile','StudentPerProfileController@editbystudent');
Route::get('/editbyadmin','ProfileEditAdminController@Editbyadmin');
Route::get('/chartview','ChartViewController@chartviews');
Route::get('/traing','TrainingController@trainging');
