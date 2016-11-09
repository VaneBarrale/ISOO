<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Rubro;

class RubroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rubro = Rubro::all(); //creo la lista
        return view('rubro.index')->with('rubros', $rubro); //recorro la lista desde la vista

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rubro.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rubro = new Rubro();
        $rubro->Descripcion = $request->descripcion;
        $rubro->Nombre = $request->nombre;
        $rubro->save();
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rubro = Rubro::findOrFail($id);
        return view('rubro.editar', ['rubro' => $rubro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Rubro::where('Id',$request->id)
                ->update(['Descripcion' => $request->descripcion]);
        Rubro::where('Id',$request->id)
                ->update(['Nombre' => $request->nombre]);
                
                
        return redirect('/rubros');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rubro::destroy($id);
        dd("Eliminado:" . $id);
        
        return redirect('/rubros');
    }
}

