<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Demande;
use App\Candidat;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewRequest;
use App\Mail\AcceptRequest;
use App\Mail\RefuseRequest;


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
        $dem= Demande::where('vu','=', 1)->get();
        foreach ($dem as $d) {
            $d->vu = 0;
            $d->save();
        }
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
     * @param  \App\Demande $demande
     * @return \Illuminate\Http\Response
     */
    public function edit(Demande $demande)
    {
        return view('admin.demandes.edit', compact('demande'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demande $demande)
    {
        $validatedData = $request->validate($this->validationRules());
        $validatedphoto = $request->validate($this->validationphoto());
             if( $validatedphoto ){
        $validatedphoto['photo'] = $request->photo->store('uploads', 'public');
        

        $demande->update($validatedphoto);
 
             }
             else{
                $demande->update($validatedData);
             }

        return redirect()->route('demande.show', $demande->id)->with('updaterequest', 'request updated successfully');
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
        return redirect()->route('demande.index')->with('deleterequest', 'the request deleted sucessfuly');

   

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
             $email = $dem->email;
           
        }
        Mail::to($email)->send(new AcceptRequest($demande));
  
        return redirect()->route('demande.index')->with('acceptrequest', 'new candidat added  successfuly and an email is sent to this candidat');
        
       
    }
    public function refuse($id)

    {
        $demande = Demande::where('id',$id)->get();
        foreach ($demande as $dem) {
            $dem->status = 2;
            $dem->save();

            $email = $dem->email;
           
        }
        Mail::to($email)->send(new RefuseRequest($demande));

    return redirect()->route('demande.index')->with('refuserequest', 'the request is rejected successfuly and an email is sent to the applicant');;
}
public function photo($id,Request $request)
    {
        $demande = Demande::where('id',$id)->get();
        foreach ($demande as $dem) {
             $ID = $dem->id;
        $dem->photo = $request->photo->store('uploads', 'public');
        $dem->save();
        }
       
 


        return redirect()->route('demande.show', $ID)->with('updatephoto', 'photo updated successfully');
    }
    private function validationRules()
    {
        return [
            'name' => 'required|string',
            'birth_date' => 'required|date',
            'cin' => 'required|string|min:8',
            'sexe' => 'required|string',
            'email' => 'required|string|email',
            'photo' => 'file|image',
            'department' => 'required|string',
            'class' => 'required|string',
            'description' => 'required|string',
          
        ];
    }
        private function validationphoto()
        {
            return [
             
                'photo' => 'file|image',
               
            ];
    }

    
   
    }

