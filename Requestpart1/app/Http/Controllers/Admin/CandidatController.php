<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Demande;
use App\Candidat;
use Illuminate\Support\Facades\Mail;
class CandidatController extends Controller
{
    
    public function all()
    {
        $all = Demande::orderBy('created_at', 'desc')->get()->paginate(10);
                         
                            
        return view('admin.demandes.all', compact('all'));
    }

    public function waiting()
    {
        $waiting = Demande::where('status', '=', 0)
                            ->orderBy('created_at', 'desc')
                            ->paginate(10)
                            ->get();
        return view('admin.demandes.waiting', compact('waiting'));
    }

    public function approved()
    {
      
        $approved = Demande::where('status', '=', 1)
                            ->orderBy('created_at', 'desc')
                            ->paginate(10)
                            ->get();
        return view('admin.demandes.approved', compact('approved'));
    }
    public function rejected()
    {
       
        $rejected = Demande::where('status', '=', 2)
                            ->orderBy('created_at', 'desc')
                            ->paginate(10)
                            ->get();
        return view('admin.demandes.rejected', compact('rejected'));
    }
    
}
