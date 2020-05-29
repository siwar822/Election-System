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
 
  
}
