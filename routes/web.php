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
 Route::get('/',"paginesParc@inici");
 Route::get('/noticies',"paginesParc@noticies");
 Route::get('/promocions',"paginesParc@promocions");
 Route::get('/atraccions',"paginesParc@atraccions");
 Route::get('/hotel',"paginesParc@hotel");
 Route::get('/habitacions',"paginesParc@habitacions");
 Route::get('/restaurant',"paginesParc@restaurant");
 Route::get('/parc',"paginesParc@parc");
 Route::get('/parcHotel',"paginesParc@parcHotel");
 Route::get('/gestio',"paginesParc@gestio");
 Route::get('/login',"paginesParc@login");
/**
*Links pagines parc
*/
 Route::any('/', array('as' => 'inici','uses' => 'paginesParc@inici'));
 Route::any('/noticies', array('as' => 'noticies','uses' => 'paginesParc@noticies'));
 Route::any('/promocions', array('as' => 'promocions','uses' => 'paginesParc@promocions'));
 Route::any('/atraccions', array('as' => 'atraccions','uses' => 'paginesParc@atraccions'));
 Route::any('/habitacions', array('as' => 'habitacions','uses' => 'paginesParc@habitacions'));
 Route::any('/restaurant', array('as' => 'restaurant','uses' => 'paginesParc@restaurant'));
 Route::any('/parc', array('as' => 'parc','uses' => 'paginesParc@parc'));
 Route::any('/parcHotel', array('as' => 'parcHotel','uses' => 'paginesParc@parcHotel'));
 Route::any('login', array('as' => 'login','uses' => 'paginesParc@login'));
 Route::any('/gestio', array('as' => 'gestio','uses' => 'intranetController@inici'));

  /* RUTES GRUP 1 */
  Auth::routes(['verify' => true]);

  Route::get('/home', 'HomeController@index')->name('home');

  Route::get('gestio/incidencies/assign', 'IncidenciesController@assigned')->name('incidencies.assign');
  Route::resource('gestio/incidencies', 'IncidenciesController');

  Route::resource('gestio/empleats', 'EmpleatsController');

  Route::resource('gestio/zones', 'ZonesController');

  Route::resource('gestio/serveis', 'ServeisController');

  Route::get('promocions/promocio_x', ['as' => 'promocio_x', function(){
    $title = "Promoció X";
    return view ('vistesparc/promocio_x', compact('title'));
  }]);

  Route::get('cistella',['as' => 'promocio_x', function(){
    $title = "Cistella";
    return view ('vistesparc/cistella', compact('title'));
  }])->middleware('auth');


  /* RUTES GRUP 2 */
  Route::resource('/gestio/atraccions', 'AtraccionsController');

  Route::get('/gestio/atraccions/image', 'AtraccionsController@store')->name('image.upload');
  Route::post('/gestio/atraccions/image', 'AtraccionsController@store')->name('image.upload.post');
