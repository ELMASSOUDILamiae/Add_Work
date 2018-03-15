<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\entreprise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){   
        // geting the coreseponding Entreprise object to the current user
        $user = Auth::user();
        $entreprise = $user->entreprises[0];

        // preparing data:
        // counting the entreprise's annonces
        $annances = $entreprise ->eannonces()
                                ->get()
                                ->count();

        // counting the entreprise's tests
        $tests = $entreprise ->tests()
                             ->get()
                             ->count();

        // counting the entreprise's collections
        $collections = $entreprise  ->collections()
                                    ->get()
                                    ->count();

        // returning the coresponding view with the prepared data
        return View('EntrepriseViews\index')
                ->with('annonces',$annances)
                ->with('tests',$tests)
                ->with('collections',$collections)
                ->with('user',$user);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Recuperation des annonces propre à l'entreprise en question
     *
     * @param   $resoponse
     */
    public function show_annonces(){
        $user = Auth::user();
        $entreprise = $user->entreprises[0];

        // preparing data:
        // counting the entreprise's annonces
        $annances = $entreprise ->eannonces()
                                ->get();
        return View('EntrepriseViews\MesAnnonces')
                ->with('annonces',$annances);

    }
}
