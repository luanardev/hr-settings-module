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

Route::prefix('hrsettings')->group(function() {
    Route::get('/', 'HomeController@index')->name('hrsettings.home');


    Route::get('position', 'PositionController@index')->name('position.index');
    Route::get('jobgrade', 'JobGradeController@index')->name('grade.index');
    Route::get('jobscale', 'JobScaleController@index')->name('scale.index');
    Route::get('document', 'DocumentController@index')->name('document.index');
    Route::get('qualification', 'QualificationController@index')->name('qualification.index');
  
});
