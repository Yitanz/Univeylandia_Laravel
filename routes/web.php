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

 Route::any('/', array('as' => 'inici','uses' => 'paginesParc@inici'));
 Route::any('/noticies', array('as' => 'noticies','uses' => 'paginesParc@noticies'));
 Route::any('/promocions', array('as' => 'promocions','uses' => 'paginesParc@promocions'));
 Route::any('/atraccions', array('as' => 'atraccions','uses' => 'paginesParc@atraccions'));
 Route::any('/habitacions', array('as' => 'habitacions','uses' => 'paginesParc@habitacions'));
 Route::any('/restaurant', array('as' => 'restaurant','uses' => 'paginesParc@restaurant'));
 Route::any('/parc', array('as' => 'parc','uses' => 'paginesParc@parc'));
 Route::any('/parcHotel', array('as' => 'parcHotel','uses' => 'paginesParc@parcHotel'));
 Route::any('/login', array('as' => 'login','uses' => 'paginesParc@login'));
 Route::any('/gestio', array('as' => 'gestio','uses' => 'intranetController@inici'));
  Route::get('/gestio/clients',"intranetController@gestioClients");
  Route::get('/gestio/clients/inserir',"intranetController@inserirClients");

  Route::get('/gestio/atraccions',"intranetController@gestioAtraccions");
  Route::get('/gestio/atraccions/inserir',"intranetController@inserirAtraccions");

  Route::get('/gestio/empleats',"intranetController@gestioEmpleats");
  Route::get('/gestio/empleats/inserir',"intranetController@inserirEmpleats");

  Route::get('/gestioIncidencia',"intranetController@gestioIncidencia");
  Route::get('/inserirIncidencia',"intranetController@inserirIncidencia");

  Route::get('/gestioNoticies',"intranetController@gestioNoticies");
  Route::get('/inserirNoticia',"intranetController@inserirNoticia");

  Route::get('/gestioServeis',"intranetController@gestioServeis");
  Route::get('/inserirServei',"intranetController@inserirServei");
  Route::any('/gestioClients', array('as' => 'gestioClients','uses' => 'intranetController@gestioClients'));
  Route::any('/inserirClients', array('as' => 'inserirClients','uses' => 'intranetController@inserirClients'));

  Route::any('/gestioAtraccions', array('as' => 'gestioAtraccions','uses' => 'intranetController@gestioAtraccions'));
  Route::any('/inserirAtraccions', array('as' => 'inserirAtraccions','uses' => 'intranetController@inserirAtraccions'));

  Route::any('/gestioEmpleats', array('as' => 'gestioEmpleats','uses' => 'intranetController@gestioEmpleats'));
  Route::any('/inserirEmpleats', array('as' => 'inserirEmpleats','uses' => 'intranetController@inserirEmpleats'));

  Route::any('/gestioIncidencia', array('as' => 'gestioIncidencia','uses' => 'intranetController@gestioIncidencia'));
  Route::any('/inserirIncidencia', array('as' => 'inserirIncidencia','uses' => 'intranetController@inserirIncidencia'));

  Route::any('/gestioNoticies', array('as' => 'gestioNoticies','uses' => 'intranetController@gestioNoticies'));
  Route::any('/inserirNoticia', array('as' => 'inserirNoticia','uses' => 'intranetController@inserirNoticia'));

  Route::any('/gestioServeis', array('as' => 'gestioServeis','uses' => 'intranetController@gestioServeis'));
  Route::any('/inserirServei', array('as' => 'inserirServei','uses' => 'intranetController@inserirServei'));

  Auth::routes(['verify' => true]);

  Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('/gestio/incidencies', 'IncidenciesController');

  Route::resource('/gestio/atraccions', 'AtraccionsController');

  Route::resource('/gestio/Clients', 'ClientsController');
  Route::resource('/gestio/productes', 'gestioProductes');
  Route::any('/gestio/atraccions/index',function(){
      $q = Input::get ( 'q' );

      $user = Atraccion::where('nom_atraccio','LIKE','%'.$q.'%')->get();
      if(count($user) > 0)
          return view('gestio/atraccions/index')->withDetails($user)->withQuery ( $q );
      else return view ('gestio/atraccions/index')->withMessage('No Details found. Try to search again !');
  });
//  Route::resource('/gestio/prorductes', 'ProductesController');
    
