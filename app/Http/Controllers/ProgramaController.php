<?php

namespace App\Http\Controllers;
use App\Programa;
use App\Graella;
use App\Canal;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programes = Programa::paginate(5);
        return view('programes.index', compact('programes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $canals = Canal::all()->pluck('nom','id');
        return view('programes.create', compact('canals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $programa = new Programa;
        $programa->nom=$request->input('nom');
        $programa->descripcio=$request->input('descripcio');
        $programa->tipus=$request->input('tipus');
        $programa->classificacio=$request->input('classificacio');
        $programa->canal_id=$request->input('canal_id');
        
        $programa->save();

        return redirect()->route('programes.index')
            ->with('info', 'Programa guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Programa $programa)
    {
        $canal= Canal::all()->pluck('nom','id');
        return view('programes.show', compact('programa','canal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Programa $programa)
    {
       
        $canals = Canal::all()->pluck('nom','id');
        return view('programes.edit', compact('programa','canals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programa $programa)
    {
        $programa = Programa::findOrFail($programa->id);
        $programa->nom=$request->nom;
        $programa->descripcio=$request->descripcio;
        $programa->tipus=$request->input('tipus');
        $programa->classificacio=$request->classificacio;
        $programa->canal_id=$request->canal_id;
        $programa->update();

        return redirect()->route('programes.edit',$programa->id)
        ->with('info','Programa actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programa $programa)
    {
        $programa->delete();
        return back()->with('info','Eliminado correctamente');
    }
}
