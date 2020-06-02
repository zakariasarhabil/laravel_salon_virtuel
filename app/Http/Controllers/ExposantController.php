<?php

namespace App\Http\Controllers;

use App\Exposant;
use Illuminate\Http\Request;

class ExposantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exposant = Exposant::with('stand')->get();

        return $exposant;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exposant = new Exposant();
        $exposant->nom=$request->nom;
        $exposant->prenom=$request->prenom;

        $exposant->save();

        return $exposant;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exposant = Exposant::with('stand')->findOrFail($id);

        return $exposant;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $exposant = Exposant::findOrFail($id);
        $exposant->nom=$request->nom;
        $exposant->prenom=$request->prenom;

        $exposant->save();

        return $exposant;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Exposant::destroy($id);

        return 'delete !!!!';
    }
}
