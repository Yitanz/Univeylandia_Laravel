<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
//use Illuminate\Support\Facades\Storage;
use Storage;
use File;

use \App\producte;
use \App\Tipus_producte;
use \App\Atributs_producte;

class gestioProductes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$productes = producte::all();
        $productes = DB::table('productes')
            ->join('atributs_producte', 'atributs_producte.id', '=', 'productes.atributs')
            ->join('tipus_producte', 'tipus_producte.id', '=', 'atributs_producte.nom')
            ->get([
              'productes.id as id',
              'tipus_producte.nom as nom',
              'atributs_producte.mida as mida',
              'atributs_producte.tickets_viatges as tickets_viatges',
              'atributs_producte.foto_path as foto_path',
              'atributs_producte.foto_path_aigua as foto_path_aigua',
              'atributs_producte.preu as preu',
              'productes.descripcio as descripcio',
              'productes.estat as estat'
            ]);
        return view('gestio.gestioProductes.index')->with(['productes' => $productes]);
        //['productes' => $productes],
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $tipus_producte = Tipus_producte::all();
      return view('gestio.gestioProductes.create', compact('tipus_producte'));
    }

    /**
     * Store a newly created resource in storage.-
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
      $file = $request->file('image');
      $file_name = time() . $file->getClientOriginalName();
      $file_path = 'storage/productes';
      $file->move($file_path, $file_name);

      $atributs_producte = new Atributs_producte([
          'nom' => $request->get('tipus'),
          'mida' => $request->get('mida'),
          'tickets_viatges' => $request->get('tickets_viatges'),
          'preu' => $request->get('preu'),
          'foto_path' => "/".$file_path."/".$file_name
      ]);
      $atributs_producte->save();
      //dd($Tipus_producte->id);
      //$id = DB::table('tipus_productes')->lastInsertId();;
      $producte = new producte([
          'atributs' => $atributs_producte->id,
          'descripcio' => $request->get('descripcio'),
          'estat' => $request->get('estat')
      ]);
      //dd($request->file('image'));
      /*$uploadedFile = $request->file('image');
      $filename = $uploadedFile->getClientOriginalName();

      Storage::disk('local')->putFile(
        'productes/'.$filename
        $uploadedFile
      );*/

      $producte ->save();
      return redirect('/gestio/productes')->with('success', 'Producte registrat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('gestio/gestioProductes/show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $producte = producte::find($id);
      //dd($producte->$id);
      $atributs_producte = Atributs_producte::find($producte->atributs);
      $tipus_producte = Tipus_producte::find($atributs_producte->nom);
      $tipus_producte_list = DB::table('tipus_producte')
                ->whereRaw('id != ?', [$tipus_producte->id])
                ->get();
        return view('gestio.gestioProductes.edit', compact('producte', 'atributs_producte', 'tipus_producte', 'tipus_producte_list'));
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
      $producte = producte::find($id);
      $producte->descripcio = $request->get('descripcio');
      $producte->estat = $request->get('estat');
      $producte->save();

      $atributs_producte = Atributs_producte::find($producte->atributs);
      $atributs_producte->nom = $request->get('tipus');
      $atributs_producte->mida = $request->get('mida');
      $atributs_producte->tickets_viatges = $request->get('tickets_viatges');
      $atributs_producte->preu = $request->get('preu');
      if ($request->has('image')) {
        $image_path = public_path().$atributs_producte->foto_path;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        request()->validate([

              'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

          ]);
        $file = $request->file('image');
        $file_name = time() . $file->getClientOriginalName();
        $file_path = 'storage/productes';
        $file->move($file_path, $file_name);

        $atributs_producte->foto_path = "/".$file_path."/".$file_name;
      }
      $atributs_producte->save();

      return redirect('/gestio/productes')->with('success', 'Producte modificat correctament');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producte = producte::find($id);
        $atributs_producte = Atributs_producte::find($producte->atributs);
        $producte->delete();
        $atributs_producte->delete();
        return redirect('/gestio/productes') ->with('success', 'Producte eliminat correctament');
    }
}
