<?php

namespace App\Http\Controllers;
use \App\User;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $usuaris= User::all();
       return view("gestio/Clients/index", compact("usuaris"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestio/Clients/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rol=1;
        $actiu=0;
       $usuari=new User;
       $usuari->nom=$request->nom;
       $usuari->cognom1=$request->cognom1;
       $usuari->cognom2=$request->cognom2;
       $usuari->tipus_document=$request->tipus_document;
       $usuari->numero_document=$request->numero_document;
       $usuari->data_naixement=$request->date;
       $usuari->sexe=$request->sexe;
       $usuari->telefon=$request->telefon;
       $usuari->email=$request->email;
       $usuari->adreca=$request->adreca;
       $usuari->ciutat=$request->ciutat;
       $usuari->provincia=$request->provincia;
       $usuari->password=$request->contrasenya;
       $usuari->codi_postal=$request->cp;
       $usuari->id_rol=$rol;
       $usuari->actiu=$actiu;

       $usuari->save();

       return view('gestio/Clients/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $usuari=User::findOrFail($id);

       return view ('gestio/Clients.show', compact('usuari'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $usuari=User::findOrFail($id);
       return view ('gestio/Clients.edit', compact('usuari'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
      $usuaris=User::findOrFail($id);
      $rol=1;
      $actiu=0;
      
      $usuaris->nom=$request->nom;
      $usuaris->cognom1=$request->cognom1;
      $usuaris->cognom2=$request->cognom2;
      $usuaris->tipus_document=$request->tipus_document;
      $usuaris->numero_document=$request->numero_document;
      $usuaris->data_naixement=$request->date;
      $usuaris->sexe=$request->sexe;
      $usuaris->telefon=$request->telefon;
      $usuaris->email=$request->email;
      $usuaris->adreca=$request->adreca;
      $usuaris->ciutat=$request->ciutat;
      $usuaris->provincia=$request->provincia;
      $usuaris->password=$request->contrasenya;
      $usuaris->codi_postal=$request->cp;
      $usuaris->id_rol=$rol;
      $usuaris->actiu=$actiu;
      
      $usuaris->update();

      return redirect('gestio/Clients');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
