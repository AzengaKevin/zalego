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

Route::get('/', 'PagesController@index');

Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::resource('students', 'StudentsController');
Route::resource('courses', 'CoursesController');

Route::get('/student-register-course', 'StudentCoursesController@index')->name('student.register.course');
Route::post('/student-register-course', 'StudentCoursesController@store')->name('student.register.course');
Route::get('/student/{student}/courses', 'StudentCoursesController@courses')->name('student.courses');
