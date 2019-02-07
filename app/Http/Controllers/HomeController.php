<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //Add Verified middleware
        //$this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function noticies()
    {
      return view('noticies');
    }
  
    public function promocions()
    {
      return view("promocions");
    }
    
    public function atraccions()
    {
      return view("atraccions");
    }
  
    public function entrades()
    {
      return view("entrades");
    }
  
    public function login()
    {
      return view("login");
    }
  
    public function contacte()
    {
      return view("contacte");
    }
  
    public function gestio()
    {
      return view("gestio/index");
    }

    public function perfil()
    {
        return view('perfil');
    }

    public function incidencia()
    {
        return view('incidencia');
    }
}
