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

  route::get('/',"paginesParc@inici");
  route::get('/noticies',"paginesParc@noticies");
  route::get('/promocions',"paginesParc@promocions");
  route::get('/atraccions',"paginesParc@atraccions");
  route::get('/hotel',"paginesParc@hotel");
  route::get('/habitacions',"paginesParc@habitacions");
  route::get('/restaurant',"paginesParc@restaurant");
  route::get('/parc',"paginesParc@parc");
  route::get('/parcHotel',"paginesParc@parcHotel");
  route::get('/gestio',"paginesParc@gestio");
  route::get('/login',"paginesParc@login");

/**
*Links pagines parc
*/
  route::any('/', array('as' => 'inici','uses' => 'paginesParc@inici'));
  route::any('/noticies', array('as' => 'noticies','uses' => 'paginesParc@noticies'));
  route::any('/promocions', array('as' => 'promocions','uses' => 'paginesParc@promocions'));
  route::any('/atraccions', array('as' => 'atraccions','uses' => 'paginesParc@atraccions'));
  route::any('/habitacions', array('as' => 'habitacions','uses' => 'paginesParc@habitacions'));
  route::any('/restaurant', array('as' => 'restaurant','uses' => 'paginesParc@restaurant'));
  route::any('/parc', array('as' => 'parc','uses' => 'paginesParc@parc'));
  route::any('/parcHotel', array('as' => 'parcHotel','uses' => 'paginesParc@parcHotel'));
  route::any('/gestio', array('as' => 'gestio','uses' => 'paginesParc@gestio'));
  route::any('/login', array('as' => 'login','uses' => 'paginesParc@login'));


/**
*routes intranetparc
*/
  route::get('/gestioClients',"intranetController@gestioClients");
  route::get('/inserirClients',"intranetController@inserirClients");

  route::get('/gestioAtraccions',"intranetController@gestioAtraccions");
  route::get('/inserirAtraccions',"intranetController@inserirAtraccions");

  route::get('/gestioEmpleats',"intranetController@gestioEmpleats");
  route::get('/inserirEmpleats',"intranetController@inserirEmpleats");

  route::get('/gestioIncidencia',"intranetController@gestioIncidencia");
  route::get('/inserirIncidencia',"intranetController@inserirIncidencia");

  route::get('/gestioNoticies',"intranetController@gestioNoticies");
  route::get('/inserirNoticia',"intranetController@inserirNoticia");

  route::get('/gestioServeis',"intranetController@gestioServeis");
  route::get('/inserirServei',"intranetController@inserirServei");

/**
*Links intranetparc
*/

route::any('/gestioClients', array('as' => 'gestioClients','uses' => 'intranetController@gestioClients'));
route::any('/inserirClients', array('as' => 'inserirClients','uses' => 'intranetController@inserirClients'));

route::any('/gestioAtraccions', array('as' => 'gestioAtraccions','uses' => 'intranetController@gestioAtraccions'));
route::any('/inserirAtraccions', array('as' => 'inserirAtraccions','uses' => 'intranetController@inserirAtraccions'));

route::any('/gestioEmpleats', array('as' => 'gestioEmpleats','uses' => 'intranetController@gestioEmpleats'));
route::any('/inserirEmpleats', array('as' => 'inserirEmpleats','uses' => 'intranetController@inserirEmpleats'));

route::any('/gestioIncidencia', array('as' => 'gestioIncidencia','uses' => 'intranetController@gestioIncidencia'));
route::any('/inserirIncidencia', array('as' => 'inserirIncidencia','uses' => 'intranetController@inserirIncidencia'));

route::any('/gestioNoticies', array('as' => 'gestioNoticies','uses' => 'intranetController@gestioNoticies'));
route::any('/inserirNoticia', array('as' => 'inserirNoticia','uses' => 'intranetController@inserirNoticia'));

route::any('/gestioServeis', array('as' => 'gestioServeis','uses' => 'intranetController@gestioServeis'));
route::any('/inserirServei', array('as' => 'inserirServei','uses' => 'intranetController@inserirServei'));
