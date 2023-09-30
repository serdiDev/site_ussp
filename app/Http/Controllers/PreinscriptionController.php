<?php

namespace App\Http\Controllers;
use App\Models\Programme;
use Illuminate\Support\Facades\DB;
use App\Models\Preinscription;
use Illuminate\Http\Request;
use Alert;

class PreinscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programmes = DB::table('programmes')
            ->select('programmes.*')
            ->get();
    
        return view('pages.admissions',compact('programmes'));
    }

    public function listPresc(){

        $preinscriptions = DB::table('preinscriptions')
            ->join('programmes', 'programmes.id', '=', 'preinscriptions.prog_id')
            ->join('ecoles', 'ecoles.id', '=', 'programmes.eco_id')
            ->where('preins_etat', '=', 0)
            ->select('preinscriptions.*','ecoles.*','programmes.*')
            ->limit(5)
            ->get();
    
        return view('dashboard',compact('preinscriptions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'nom' => '',
            'prenom' => '',
            'nation' => '',
            'dateNais' => '',
            'lieuNais' => '',
            'parcours' => '',
            'email' => '',
            'programme' => '',
            'niveau' => '',
            'apropo' => ''
        ]);

        $preinscription = new Preinscription();
        $preinscription->prog_id = request('programme');
        $preinscription->preins_nom = request('nom');
        $preinscription->preins_prenom = request('prenom');
        $preinscription->preins_nation = request('nation');
        $preinscription->preins_datenais = request('dateNais');
        $preinscription->preins_lieunais = request('lieuNais');
        $preinscription->preins_parcours = request('parcours');
        $preinscription->preins_email = request('email');
        $preinscription->preins_niveau = request('niveau');
        $preinscription->preins_desc = request('apropo');
        $preinscription->preins_etat = 0;
        $preinscription->save();

        Alert::success('Pre-inscription succes!')->autoclose(3000);
        return redirect('/pages/admissions');


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
     * @param  \App\Models\Preinscription  $preinscription
     * @return \Illuminate\Http\Response
     */
    public function show(Preinscription $preinscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Preinscription  $preinscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Preinscription $preinscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Preinscription  $preinscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preinscription $preinscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Preinscription  $preinscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preinscription $preinscription)
    {
        //
    }
}
