<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Puesto;
use App\Models\Competencium;
use App\Models\Nivel;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $puesto = Puesto::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('reporta_a', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $puesto = Puesto::latest()->paginate($perPage);
        }

        return view('puestos.index', compact('puesto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $puestos = Puesto::all();
        return view('puestos.create', compact('puestos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
    
        $requestData = $request->all();
        
        Puesto::create($requestData);

        return redirect()->route('puestos.index')->with('flash_message', 'Puesto Agregado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show(Puesto $puesto)
    {
        return view('puestos.show', compact('puesto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    
    public function edit(Puesto $puesto)
    {
        $competencias = Competencium::all();
        $puestos = Puesto::all();
        return view('puestos.edit', compact('puesto','competencias','puestos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        
        $puesto = Puesto::findOrFail($id);
        $puesto->update($requestData);

        return redirect()->route('puestos.index')->with('flash_message', 'Puesto actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Puesto::destroy($id);

        return redirect()->route('puestos.index')->with('flash_message', 'Puesto eliminado');
    }

    public function guardar_cp(Request $request, Puesto $puesto)
    {
        $nivel = $request->nivel;
        $puesto->competencias()->attach($request->competencia, ['nivel' => $nivel]);

        return redirect()->route('puestos.edit', $puesto);
    }

    public function eliminar_cp(Request $request, Puesto $puesto)
    {
        $nivel = $request->nivel;
        $puesto->competencias()->detach($request->competencia, ['nivel' => $nivel]);

        return redirect()->route('puestos.edit', $puesto);
    }
}
