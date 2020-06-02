<?php

namespace App\Http\Controllers;

use App\Stand;
use Illuminate\Http\Request;

class StandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stand = Stand::with('reseau','video','galerie','temoignage','document','lienex','theme','exposant','espace')->get();
        return $stand ;
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
        $stand = new Stand();
        $stand->description = $request->description;
        $stand-> status = $request->status;
        $stand->theme_id = $request->theme_id;
        $stand->espace_exposant_id = $request->espace_exposant_id;
        $stand->exposant_id = $request->exposant_id;

        $stand->save();


        return $stand;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stand = Stand::with('reseau','video','galerie','temoignage','document','lienex','theme','exposant','espace')->find($id);
        return $stand;
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
        $stand = Stand::findOrFail($id);
        $stand->description = $request->description;
        $stand-> status = $request->status;
        $stand->theme_id = $request->theme_id;
        $stand->espace_id = $request->espace_id;
        $stand->exposant_id = $request->exposant_id;

        $stand->save();

        return $stand;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Stand::destroy($id);
        return 'delete !!!!';
    }
}
