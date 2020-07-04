<?php

namespace App\Http\Controllers;

use App\Stand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class StandController extends Controller
{
    public function __construct()
    {
     $this->middleware('auth:sanctum');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $stand = Stand::with('user','reseau','video','galerie','temoignage','document','lienex','theme','espace')->get();

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

        // $this->authorize("post.stand", $stand);

        $stand->description = $request->description;
        $stand-> name = $request->name;
        $stand->theme_id = $request->theme_id;
        $stand->espace_exposant_id = $request->espace_exposant_id;
         $stand->user_id = $request->user()->id;



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

    //    if (Gate::denies('stand.update', $stand)) {
    //        abort(403, "you can't edit stand");
    //    }

    // $this->authorize("stand.update", $stand);



       $stand->description = $request->description;
       $stand-> name = $request->name;
       $stand->theme_id = $request->theme_id;
       $stand->espace_exposant_id = $request->espace_exposant_id;
       $stand->user_id = $request->user()->id;

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
       $stand = Stand::findOrfail($id);
       $this->authorize("stand.delete", $stand);

       $stand->delete();

        return 'delete !!!!';
    }
}
