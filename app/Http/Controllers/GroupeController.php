<?php

namespace App\Http\Controllers;

use Auth; 
use App\Groupe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('pages.groupe');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.creation_groupe');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $groupe = new Groupe;
        $groupe->name = $request->groupe_name;
        $groupe->description = $request->description;
        $groupe->user_id = Auth::id();
        $groupe->save();

        return redirect('groupe/'.$groupe->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $groupe = Groupe::find($id);

        return view('pages.groupe', ['groupe'=>$groupe]);


        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $groupe = Groupe::find($id);

        return view('pages.groupe_edit', ['groupe'=>$groupe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $groupe = Groupe::find($id);
        $groupe->name = $request->groupe_name;
        $groupe->description = $request->description;
        $groupe->user_id = Auth::id();
        $groupe->save();

        return redirect('groupe/'.$groupe->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $groupe = Groupe::where('id', $id);
        $groupe->delete();

        return redirect('/home');
    }
}
