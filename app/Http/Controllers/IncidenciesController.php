<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Incidencia;
use \App\PrioritatIncidencia;
use \App\User;
use Auth;

class IncidenciesController extends Controller
{
    public function __construct(){
        $this->middleware(['auth', 'is_admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incidencies = Incidencia::all();

        return view('gestio/incidencies/index', compact('incidencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prioritats = PrioritatIncidencia::all();

        return view('gestio/incidencies/create', compact('prioritats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'priority' => 'required'
        ]);

        $user = Auth::user();

        $incidencia = new Incidencia([
            'titol' => $request->get('title'),
            'descripcio' => $request->get('description'),
            'id_prioritat' => $request->get('priority'),
            'id_estat' => 1,
            'id_usuari_reportador' => $user->id,
        ]);
        $incidencia->save();
        return redirect('/gestio/incidencies')->with('success', 'Incidència creada correctament');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $incidencia = Incidencia::findOrFail($id);

        $prioritats = PrioritatIncidencia::all();

        $treballadors = User::where('id_rol', 3)
        ->where('actiu', 1)
        ->get();

        return view('gestio/incidencies/show', compact(['incidencia', 'prioritats', 'treballadors']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $incidencia = Incidencia::findOrFail($id);

        $prioritats = PrioritatIncidencia::all();

        $treballadors = User::where('id_rol', 3)
        ->where('actiu', 1)
        ->get();

        return view('gestio/incidencies/edit', compact(['incidencia', 'prioritats', 'treballadors']));
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
        $request->validate([
            'title'=>'required',
            'description'=> 'required',
            'priority' => 'required',
            'assigned-employee' => 'required'
        ]);

        $incidencia = Incidencia::findOrFail($id);

        $incidencia->titol = $request->get('title');
        $incidencia->descripcio = $request->get('description');
        $incidencia->id_prioritat = $request->get('priority');
        $incidencia->id_estat = 2;
        $incidencia->id_usuari_assignat = $request->get('assigned-employee');
        $incidencia->save();

        return redirect('gestio/incidencies')->with('success', 'Incidència assignada correctament');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $incidencia = Incidencia::findOrFail($id);

        $incidencia->delete();

        return redirect('gestio/incidencies')->with('success', 'Incidència eliminada correctament');
    }

    /**
     * Change the status of the specified resource to 'Done'.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function conclude($id)
    {
        $incidencia = Incidencia::findOrFail($id);

        $incidencia->id_estat = 3;

        $incidencia->save();

        return redirect('gestio/incidencies')->with('success', 'Incidència finalitzada correctament');
    }
}
