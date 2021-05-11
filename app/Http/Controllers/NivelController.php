<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Nivel;
use Illuminate\Http\Request;

class NivelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage =15;

        if (!empty($keyword)) {
            $nivel = Nivel::where('competencia', 'LIKE', "%$keyword%")
                ->orWhere('nivel', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $nivel = Nivel::latest()->paginate($perPage);
        }

        return view('puesto.create', compact('nivel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('nivel.create');
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
        
        Nivel::create($requestData);

        return redirect('nivel')->with('flash_message', 'Nivel added!');
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
        $nivel = Nivel::findOrFail($id);

        return view('nivel.show', compact('nivel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function niveledit($id)
    {
        $nivel = Nivel::findOrFail($id);

        return view('nivel.edit', compact('nivel'));
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
        
        $nivel = Nivel::findOrFail($id);
        $nivel->update($requestData);

        return redirect('nivel')->with('flash_message', 'Nivel updated!');
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
        Nivel::destroy($id);

        return redirect('nivel')->with('flash_message', 'Nivel deleted!');
    }
}
