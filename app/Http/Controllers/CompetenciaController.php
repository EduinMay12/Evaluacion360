<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Competencium;
use Illuminate\Http\Request;

class CompetenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {
            $competencia = Competencium::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('basicocorto1', 'LIKE', "%$keyword%")
                ->orWhere('basicocorto2', 'LIKE', "%$keyword%")
                ->orWhere('basicocorto3', 'LIKE', "%$keyword%")
                ->orWhere('basicoaccion1', 'LIKE', "%$keyword%")
                ->orWhere('basicoaccion2', 'LIKE', "%$keyword%")
                ->orWhere('basicoaccion3', 'LIKE', "%$keyword%")
                ->orWhere('calificadocorto1', 'LIKE', "%$keyword%")
                ->orWhere('calificadocorto2', 'LIKE', "%$keyword%")
                ->orWhere('calificadocorto3', 'LIKE', "%$keyword%")
                ->orWhere('calificadoaccion1', 'LIKE', "%$keyword%")
                ->orWhere('calificadoaccion2', 'LIKE', "%$keyword%")
                ->orWhere('calificadoaccion3', 'LIKE', "%$keyword%")
                ->orWhere('experimentadocorto1', 'LIKE', "%$keyword%")
                ->orWhere('experimentadocorto2', 'LIKE', "%$keyword%")
                ->orWhere('experimentadocorto3', 'LIKE', "%$keyword%")
                ->orWhere('experimentadoaccion1', 'LIKE', "%$keyword%")
                ->orWhere('experimentadoaccion2', 'LIKE', "%$keyword%")
                ->orWhere('experimentadoaccion3', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $competencia = Competencium::latest()->paginate($perPage);
        }

        return view('competencia.index', compact('competencia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('competencia.create');
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
        
        Competencium::create($requestData);

        return redirect('competencia')->with('flash_message', 'Competencium added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $competencium = Competencium::findOrFail($id);

        return view('competencia.show', compact('competencium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $competencium = Competencium::findOrFail($id);

        return view('competencia.edit', compact('competencium'));
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
        
        $competencium = Competencium::findOrFail($id);
        $competencium->update($requestData);

        return redirect('competencia')->with('flash_message', 'Competencium updated!');
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
        Competencium::destroy($id);

        return redirect('competencia')->with('flash_message', 'Eliminar competencia!');
    }
}
