<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\dades_Empleat;

class EmpleatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestio/empleats/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $dadesEmpleat = new dades_Empleat;

        $dadesEmpleat-> codi_seg_social=$request->codi_seg_social;
        $dadesEmpleat-> num_nomina=$request->num_nomina;
        $dadesEmpleat-> IBAN=$request->IBAN;
        $dadesEmpleat-> especialitat=$request->especialitat;
        $dadesEmpleat-> carrec=$request->carrec;
        $dadesEmpleat-> data_inici_contracte=$request->data_inici_contracte;
        $dadesEmpleat-> data_fi_contracte=$request->data_fi_contracte;
        //$dadesEmpleat-> id_horari=$request->1;

        $dadesEmpleat->save();

        return view('gestio/empleats/create');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
         return view('gestio/empleats/index');
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
        return view('gestio/empleats/update');
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
        return view('gestio/empleats/delete');
    }
}
