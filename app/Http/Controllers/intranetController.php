<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class intranetController extends Controller
{
      public function __construct()
      {
            $this->middleware('auth');
            $this->middleware('is_admin');
      }

      public function inici()
      {
            return view("gestio/inici");
      }
}
