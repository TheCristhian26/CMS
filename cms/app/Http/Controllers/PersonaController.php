<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App/Models/persona;
use redirect;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas=persona::all();
        return view('persona.index',compact(['personas']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('persona.create')
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $personas= persona::create($request->all());
        return redirect()->route('persona.index')
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $personas = Project::findOrFail($id);
        return view('persona.show',compact(["persona"]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $personas = Project::findOrFail($id);
        return view('persona.edit',compact(["persona"]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $personas = Project::findOrFail($id);
        $personas->fill($request->all());
        $personas->save();
        return redirect()->route('persona.index');

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $personas = Project::findOrFail($id);
        $personas->delete();
        return redirect()->route('persona.index');
    }

    public function delete($id)
    {
        $personas = Project::findOrFail($id);
        return view('projects.delete',compact(["persona"]));
    }
}
