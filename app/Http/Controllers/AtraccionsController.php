<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Atraccion;

class AtraccionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
              $atraccio = Atraccion::all();
        return view('gestio/atraccions/index', compact('atraccio'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('gestio/atraccions/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $atraccio = new Atraccion([
              'nom_atraccio' => $request->get('nom'),
              'tipus_atraccio' => $request->get('tipusatraccio'),
              'data_inauguracio' => $request->get('datainauguracio'),
              'altura_min' => $request->get('alturamin'),
              'altura_max' => $request->get('alturamax'),
              'accessibilitat' => $request->get('accessible'),
              'acces_express' => $request->get('accesexpress')
          ]);

          $atraccio->save();
          return redirect('/gestio/atraccions')->with('success', 'atraccio afegida');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return view('gestio/atraccions/show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
