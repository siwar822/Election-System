<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Candidat;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidats = Candidat::all();
        return view('admin.candidates')->with('candidats', $candidats);
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
     * @param  \App\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidat = Candidat::find($id);
        return view('admin.show')->with('candidat', $candidat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $candidats = Candidat::find($id);
       return view('admin.editCand')->with('candidats', $candidats);
    }

    public function dashboard()
    {
       $candidats = Candidat::orderBy('votecount', 'desc')->limit(5)->get();
        return view('admin.dashbord')->with('candidats', $candidats);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {


        $request->validate([

            'name' => 'required',
            'cin' => 'required',
            'email' => 'required',
            
            'Sexe' => 'required',
            'Birthday' => 'required',
            'class' => 'required',
            'departement' => 'required'
        ]);
        $candidat = Candidat::find($id);

            $candidat->name = $request->get('name');
            $candidat->cin = $request->get('cin');
            $candidat->email = $request->get('email');
 
            $candidat->sexe = $request->get('Sexe');
            $candidat->birth_date = $request->get('Birthday');
            $candidat->class = $request->get('class');
            $candidat->department = $request->get('departement');
            $candidat->save();
  

  
        return redirect()->route('candidates.index')
                        ->with('msg','Candidat updated successfully');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $candidat = Candidat::find($id);
       $candidat->delete();
  
       return redirect()->route('candidates.index')
       ->with('msg','Candidat deleted successfully');

    }

    
}