<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Demande;
use App\Candidat;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewRequest;


class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $demandes = Demande::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.demandes.index', compact('demandes'));
    }



     /**
     * Display the specified resource.
     *
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function create(Demande $demande)
    {
        return view('landing');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate($this->validationRules());
        $data['photo'] = $request->photo->store('uploads', 'public');
    
        $demande = Demande::create($data);
    
        
        Mail::to($demande->email)->send(new NewRequest($demande));

        return redirect()->route('demande.create')->with('alert', 'your request is sent. We sent you an email, please check your inbox.');
    }





  

    /**
     * Display the specified resource.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function show(Demande $demande)
    {
        return view('admin.demandes.show', compact('demande'));
    }
    

     /**
     * Display the specified resource.
     *
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $meal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Demande  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demande $demande)
    {
        $demande->delete();
        return redirect()->route('demande.index')->with('alert', 'the request deleted sucessfuly');

   

    }
        public function all()
    {
        $all = Demande::orderBy('created_at', 'desc')->get()->paginate(10);
                         
                            
        return view('admin.demandes.all', compact('all'));
    }

    public function waiting()
    {
        $waiting = Demande::where('status', '=', 0)
                            ->orderBy('created_at', 'desc')
                            ->paginate(10);
                           
        return view('admin.demandes.waiting', compact('waiting'));
    }

    public function approved()
    {
      
        $approved = Demande::where('status', '=', 1)
                            ->orderBy('created_at', 'desc')
                            ->paginate(10);
                           
        return view('admin.demandes.approved', compact('approved'));
    }
    public function rejected()
    {
       
        $rejected = Demande::where('status', '=', 2)
                            ->orderBy('created_at', 'desc')
                            ->paginate(10);
                          
        return view('admin.demandes.rejected', compact('rejected'));
    }
    


    private function validationRules()
    {
        return [
            'name' => 'required|string',
            'birth_date' => 'required|date',
            'cin' => 'required|string|min:8',
            'sexe' => 'required|string',
            'email' => 'required|string|email',
            'photo' => 'required|file|image',
            'department' => 'required|string',
            'class' => 'required|string',
            'description' => 'required|string',
          
        ];
    }

    
   
    }

