<?php

namespace App\Http\Controllers;
use App\Programa;
use App\Graella;
use App\Canal;
use App\GraellaPrograma;
use Illuminate\Http\Request;

class GraellaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dia = $request ->get('dia');
        $hora = $request ->get('hora');
        $programas = Programa::all()->pluck('nom','id');
        $graelles = Graella::dia($dia)->hora($hora)->paginate(5);
        return view('graelles.index', compact('graelles','programas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programas = Programa::all()->pluck('nom','id');
        $canals = Canal::all()->pluck('nom','id');
        return view('graelles.create', compact('canals','programas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        $graella = new Graella;     
        $graella->dia=$request->input('dia');
        $graella->hora=$request->input('hora');
        $graella->save();
        $graella->programas()->attach($request->programas);
        return redirect()->route('graelles.index')
            ->with('info', 'Graella guardada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Graella $graella)
    {
        $programas= Programa::all()->pluck('nom','id');
        return view('graelles.show', compact('graella','programas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Graella $graella)
    {
        $programas = Programa::all()->pluck('nom','id');
        $canals = Canal::all()->pluck('nom','id');
        return view('graelles.edit', compact('graella','canals','programas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Graella $graella)
    {
        $graella = Graella::findOrFail($graella->id);
        $graella->dia=$request->input('dia');
        $graella->hora=$request->input('hora');
        $graella->save();
        $graella->programas()->sync($request->programas);
        return redirect()->route('graelles.edit',$graella->id)
        ->with('info','Graella actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Graella $graella)
    {
        $graella->delete();
        return back()->with('info','Eliminado correctamente');
    }
}
