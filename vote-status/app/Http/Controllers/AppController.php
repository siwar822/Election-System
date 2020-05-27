<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Candidat;
class AppController extends Controller
{
    public function home()
    {
        // $candidats = Candidat::all();
        // return view('home', compact('candidats'));
        return view('home');
    }
    
}
