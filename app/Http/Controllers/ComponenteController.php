<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Componente;

class ComponenteController extends Controller
{
    /**
     * Related routes.
     */
    const COMPONENTE_ROUTE = 'componentes/';

    /**
     * Related views.
     */
    const COMPONENTE_INDEX_VIEW  = 'componente.index';
    const COMPONENTE_CREATE_VIEW = 'componente.create';
    const COMPONENTE_EDIT_VIEW   = 'componente.edit';
    const COMPONENTE_SHOW_VIEW   = 'componente.show';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $componente = Componente::all(); //creo la lista
        return view(self::COMPONENTE_INDEX_VIEW)->with('componentes', $componente); //recorro la lista desde la vista
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(self::COMPONENTE_CREATE_VIEW);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $componente = new Componente();
        $componente->Descripcion = $request->descripcion;
        $componente->Importe = $request->importe;
        $componente->IdBien = 1;
        $componente->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $componente = Componente::findOrFail($id);

        return view(self::COMPONENTE_SHOW_VIEW)
            ->with('componentes', $componente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $componente = Componente::findOrFail($id);

        return view(self::BOOKS_EDIT_VIEW)
            ->with('componentes', $componente);
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
        try {
            $componente = Componente::findOrFail($id);
            $componente->setDescripcion($request->descripcion);
            $componente->setImporte($request->importe);
            $componente->save();

            Session::flash('success', trans('componente.updated_message'));
        } catch (Exception $e) {
            Session::flash('error', trans('componente.not_updated_message'));
        }

        return redirect()->to(self::COMPONENTE_ROUTE);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $componente = Componente::findOrFail($id);
            $componente->delete();

            Session::flash('success', trans('componente.removed_message'));
        } catch (Exception $e) {
            Session::flash('error', trans('componente.not_removed_message'));
        }
        
        return redirect()->to(self::BOOK_ROUTE);
    }
}
