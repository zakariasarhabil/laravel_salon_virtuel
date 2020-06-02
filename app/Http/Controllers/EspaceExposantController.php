<?php

namespace App\Http\Controllers;

use App\EspaceExposant;
use Illuminate\Http\Request;

class EspaceExposantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $espace = EspaceExposant::with('stand','event')->get();

        return $espace;
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
        $espace = new EspaceExposant();
        $espace->name=$request->name;
        $espace->event_id=$request->event_id;

        $espace->save();

        return $espace;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $espace = EspaceExposant::with('stand','event')->findOrFail($id);

        return $espace;
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
        $espace = EspaceExposant::findOrFail($id);
        $espace->name=$request->name;
        $espace->event_id=$request->event_id;

        $espace->save();

        return $espace;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EspaceExposant::destroy($id);
        return 'delete !!!!';
    }
}
