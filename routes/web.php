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



Route::get('/', 'HomeController@index');

 Route::group(['middleware' => 'auth', 'prefix' => 'admin' ], function () {

 	  Route::get('/', 'BackController@index');

		//Careers
		Route::get('/carreras', 'CareerController@index')->name('indexCareer');
		Route::get('/carreras/editar/{career}', 'CareerController@edit')->name('editCareer');
		Route::put('/career/update/{career}', 'CareerController@update')->name('updateCareer');




		////Programs
		Route::get('/programas', 'ProgramController@index')->name('indexProgram');
		Route::get('/programas/editar/{program}', 'ProgramController@edit')->name('editProgram');
		Route::put('/program/update/{program}', 'ProgramController@update')->name('updateProgram');


		///Test
		Route::get('/testimonios', 'TestimonyController@edit')->name('indexTestimony');
		Route::put('/testimony/update/{testimony}', 'TestimonyController@update')->name('updateTestimony');


		//Leads
		Route::get('/leads', 'LeadController@index')->name('indexLead');


		//Content

		Route::get('/contenidos', 'ContentController@index')->name('indexContent');
		Route::put('/content/update/{content}', 'ContentController@update')->name('updateContent');


		//Slider

		Route::get('/sliders', 'SliderController@index')->name('indexSlider');
		Route::put('/slider/update/', 'SliderController@update')->name('updateSlider');



});



Auth::routes();
