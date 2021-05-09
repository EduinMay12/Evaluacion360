<?php

namespace App\Http\Controllers;

use App\Models\Competencia;
use Illuminate\Http\Request;

class CompetenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datos['competencias']=Competencia::paginate(2);
        return view('competencia.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('competencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosCompetencia = request()->except('_token');
        Competencia::insert($datosCompetencia);
        //return response()->json($datosCompetencia);
        return redirect('competencia');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Competencia  $competencia
     * @return \Illuminate\Http\Response
     */
    public function show(Competencia $competencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Competencia  $competencia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $competencia=Competencia::findOrFail($id);
        return view('competencia.edit', compact('competencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Competencia  $competencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosCompetencia= $request->except(['_token', '_method']);

        Competencia::where('id','=', $id)->update($datosCompetencia);
        $ejemplo=Competencia::findOrFail($id);
        return redirect('competencia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Competencia  $competencia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $competencia=Competencia::findOrFail($id);
        Competencia::destroy($id);
        return redirect('competencia');
    }
}
