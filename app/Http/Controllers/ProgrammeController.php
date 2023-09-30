<?php

namespace App\Http\Controllers;

use App\Models\Programme;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programmes = DB::table('programmes')
        ->join('ecoles', 'ecoles.id', '=', 'programmes.eco_id')
        ->select('ecoles.*', 'programmes.*')
        ->orderBy('programmes.id','desc')
        ->paginate(6);

        return view('pages.courses',compact('programmes'));
    }

    public function ProgOpt($id)
    {
        $formations = DB::table('programmes')
        ->join('ecoles', 'ecoles.id', '=', 'programmes.eco_id')
        ->where('programmes.id','=',$id)
        ->select('programmes.*','ecoles.*')
        ->get();

        $options = DB::table('options')
        ->where('options.prog_id','=',$id)
        ->select('options.*')
        ->get();

        $autres = DB::table('programmes')
        ->join('ecoles', 'ecoles.id', '=', 'programmes.eco_id')
        ->where('programmes.id','!=',$id)
        ->select('ecoles.*', 'programmes.*')
        ->orderBy('programmes.id','desc')
        ->get();

        return view('pages.coursdetail',compact('options','formations','autres'));
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
     * @param  \App\Models\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function show(Programme $programme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function edit(Programme $programme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programme $programme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programme $programme)
    {
        //
    }
}
