<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paginesParc extends Controller
{
  public function inici(){

      return view("vistesparc/index");

    }
    public function noticies(){

      return view("vistesparc/noticies");

    }
    public function promocions(){

      return view("vistesparc/promocions");

    }
    public function atraccions(){

      return view("vistesparc/atraccions");

    }
    public function hotel(){

      return view("vistesparc/hotel");

    }
    public function habitacions(){

      return view("vistesparc/habitacions");

    }
    public function restaurant(){

      return view("vistesparc/restaurant");

    }
    public function parc(){

      return view("vistesparc/entradesParc");

    }
    public function parcHotel(){

      return view("vistesparc/ParcHotel");

    }
    public function login(){

      return view("vistesparc/login");

    }
    public function gestio(){

      return view("vistesparc/atraccions");

    }
}
