<?php

namespace App\Http\Controllers;

use App\Temoignage;
use Illuminate\Http\Request;

class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testmon = Temoignage::with('stand')->get();

        return $testmon;

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
        $testmon = new Temoignage();
        $testmon->name = $request->name;
        $testmon->content = $request->content;
        $testmon->stand_id = $request->stand_id;

        if($request->hasFile('avatar')) {
            $testmon->avatar = $request->avatar->store('public/image');
        }


        $testmon->save();

        return $testmon;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testmon = Temoignage::with('stand')->find($id);
        return $testmon;
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
        $testmon = Temoignage::findOrFail($id);
        $testmon->name = $request->name;
        $testmon->content = $request->content;
        $testmon->stand_id = $request->stand_id;

        if($request->hasFile('avatar')) {
            $testmon->avatar = $request->avatar->store('avatar');
        }

        $testmon->save();

        return $testmon;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Temoignage::destroy($id);
        return 'delete !!!!';
    }
}
