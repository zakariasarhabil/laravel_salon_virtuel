<?php

namespace App\Http\Controllers;

use App\Galerie;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class GalerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galerie = Galerie::with('stand')->get();
        return $galerie;
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
        $galerie = new Galerie();
        $galerie->name = $request->name;
        $galerie->keyword=$request->keyword;
        $galerie->stand_id =  $request->stand_id;


        if($request->hasFile('link')) {
            $galerie->link = $request->link->store('public/image');
        }

        $galerie->save();

        return $galerie;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galerie = Galerie::with('stand')->find($id);
        return $galerie;
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
        $galerie = Galerie::findOrFail($id);
        $galerie->name = $request->name;
        $galerie->keyword=$request->keyword;
        $galerie->stand_id =  $request->stand_id;

        if($request->hasFile('link')) {
            $galerie->link = $request->link->store('public/image');
        }

        $galerie->save();

        return $galerie;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Galerie::destroy($id);
        return 'delete !!!!';
    }
}
