<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demande;
use App\Candidat;

class AppController extends Controller

{

    
    public function home()
    {
        return view('home');
    }
    public function accept($id)
    {
        $demande = Demande::where('id',$id)->get();
        
        $candidat = new Candidat;
    
        foreach ($demande as $dem) {
          
          
             $candidat->name = $dem->name;
             
             $candidat->birth_date = $dem->birth_date;
             
             $candidat->cin = $dem->cin;
             
             $candidat->sexe = $dem->sexe;
             
             $candidat->email = $dem->email;
             
             $candidat->photo = $dem->photo;
             $candidat->department = $dem->department;
             
             $candidat->class = $dem->class;
             
             $candidat->description = $dem->description;
             

             $candidat->save();
             $dem->status = 1;
             $dem->save();
           
         
        }
        return redirect()->route('demande.index');
       
    }
    public function refuse($id)

    {
        $demande = Demande::where('id',$id)->get();
        foreach ($demande as $dem) {
            $dem->status = 2;
            $dem->save();
            return redirect()->route('demande.index');
    }
}
  
}
