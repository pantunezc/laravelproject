<?php

namespace App\Http\Controllers;
use App\Canal;
use Illuminate\Http\Request;

class CanalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canals = Canal::paginate(5);

        return view('canals.index', compact('canals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('canals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $canal = Canal::create($request->all());


        return redirect()->route('canals.index')
            ->with('info', 'Canal guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Canal $canal)
    {
        return view('canals.show', compact('canal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Canal $canal)
    {
        return view('canals.edit', compact('canal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Canal $canal)
    {
        $canal->update($request->all());
        return redirect()->route('canals.index',$canal->id)
        ->with('info','Canal actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Canal $canal)
    {
        $canal->delete();
        return back()->with('info','Eliminado correctamente');
    }
}
