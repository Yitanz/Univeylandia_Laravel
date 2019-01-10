<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class intranetController extends Controller
{
      public function gestioClients(){

      return view("vistesEmpleats/gestioClients");

      }
      public function inserirClients(){

      return view("vistesEmpleats/inserirClients");

      }
      public function gestioAtraccions(){

      return view("vistesEmpleats/gestioAtraccions");

      }
      public function inserirAtraccions(){

      return view("vistesEmpleats/inserirAtraccions");

      }
      public function gestioEmpleats(){

      return view("vistesEmpleats/gestioEmpleats");

      }
      public function inserirEmpleats(){

      return view("vistesEmpleats/inserirEmpleats");

      }
      public function gestioIncidencia(){

      return view("vistesEmpleats/gestioIncidencia");

      }
      public function inserirIncidencia(){

      return view("vistesEmpleats/inserirIncidencia");

      }
      public function gestioNoticies(){

      return view("vistesEmpleats/gestioNoticies");

      }
      public function inserirNoticia(){

      return view("vistesEmpleats/inserirNoticia");

      }
      public function gestioServeis(){

      return view("vistesEmpleats/gestioServeis");

      }
      public function inserirServei(){

      return view("vistesEmpleats/inserirServei");

      }
}
