<?php

namespace App\Http\Controllers;

use App\ciudad;
use Illuminate\Http\Request;
use Session;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudad=ciudad::paginate(5);
        return view('ciudad.index',compact('ciudad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ciudad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required'
        ]);
        ciudad::create($request->all());
        Session::flash('message','Ciudad creada');
        return redirect()->route('ciudad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function show(ciudad $ciudad)
    {
        return view('ciudad.show', compact('ciudad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function edit(ciudad $ciudad)
    {
        return view('ciudad.edit', compact('ciudad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ciudad $ciudad)
    {
        $request->validate([
            'nombre'=>'required'
        ]);
        $ciudad->update($request->all());
        Session::flash('message','Ciudad fue modificada correctamente');
        return redirect()->route('ciudad.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function destroy(ciudad $ciudad)
    {
        //
    }
}
