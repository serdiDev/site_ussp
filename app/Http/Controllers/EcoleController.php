<?php

namespace App\Http\Controllers;

use App\Models\Ecole;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EcoleController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ecoles = DB::table('ecoles')
        ->select('ecoles.*')
        ->get();

        return view('pages.departments',compact('ecoles'));
    }

    public function EcoleProg($id)
    {
        $ecoles = DB::table('ecoles')
        ->where('ecoles.id','=',$id)
        ->select('ecoles.*')
        ->get();

        $programmes = DB::table('programmes')
        ->where('programmes.eco_id','=',$id)
        ->select('programmes.*')
        ->get();

        return view('pages.departmentdetail',compact('ecoles','programmes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ecole  $ecole
     * @return \Illuminate\Http\Response
     */
    public function show(Ecole $ecole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ecole  $ecole
     * @return \Illuminate\Http\Response
     */
    public function edit(Ecole $ecole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ecole  $ecole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ecole $ecole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ecole  $ecole
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ecole $ecole)
    {
        //
    }
}
