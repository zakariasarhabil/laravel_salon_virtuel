<?php

namespace App\Http\Controllers;

use App\LienEx;
use Illuminate\Http\Request;

class LienExController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lien = LienEx::with('stand')->get();
        return $lien;
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
        $lien = new LienEx();
        $lien->name=$request->name;
        $lien->stand_id =  $request->stand_id;

        $lien->save();

        return $lien;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lien = LienEx::with('stand')->findOrFail($id);
        return $lien;
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
        $lien =  LienEx::findOrFail($id);
        $lien->name=$request->name;
        $lien->stand_id =  $request->stand_id;

        $lien->save();

        return $lien;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LienEx::destroy($id);
        return 'delete !!!!';
    }
}
