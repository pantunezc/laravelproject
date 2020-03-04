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
        $programes = Programa::paginate();

        return view('programes.index', compact('programes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $graellas = Graella::all()->pluck('nombre','id');
        $canals = Canal::all()->pluck('nombre','id');
        return view('programes.create', compact('graellas', 'canals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $programa = Programa::create($request->all());


        return redirect()->route('programes.index')
            ->with('info', 'Cliente guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Programa $programa)
    {
        return view('programes.show', compact('programa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Programa $programa)
    {
        $graellas = Graella::all()->pluck('nombre','id');
        $canals = Canal::all()->pluck('nombre','id');
        return view('programes.edit', compact('programa','graellas','canals'));
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
        $programa->update($request->all());
        return redirect()->route('programes.edit',$programa->id)
        ->with('info','Cliente actualizado con éxito');
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
