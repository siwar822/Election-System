
@extends('layouts.navbar')
@section('title')
Candidates
@endsection
@section('head')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

    <style>
    
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 11px;
}
/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>

@section('content')
   
<div class="wrapper d-flex align-items-stretch">

  <!-- Page Content  -->

<div id="content" class="p-4 p-md-5 pt-5">
  <h2 class="mb-4">Update {{ $candidats->name }} informations :</h2>
  <br>
   @if ($errors->any())
    <div class="alert alert-danger">
              <ul>
              @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
          @endforeach
       </ul>
       </div>
       @endif
  
    <form action="{{ route('candidates.update',$candidats->id) }}" method="POST">
      <fieldset>
          <legend>{{ $candidats->name }} :</legend>
          <br>
       <div class="col-lg-12">
          @csrf
          @method('PUT')


          <div class="row">
          <div class="col-6">
              <label class=" form-control-label">Name</label>
              <input type="text"  value="{{ $candidats->name }}" class="form-control" name="name" >
          </div>

          <div class="col-6">
              <label  class=" form-control-label">CIN</label>
              <input type="text"  value="{{ $candidats->cin }}" class="form-control" name="cin" >
          </div>
      </div>
      <br>
    
           <div class="row">
              <div class="col-6">
                  <label class=" form-control-label">Email</label>
                  <input type="Email"  value="{{ $candidats->email }}" class="form-control" name="email">
              </div>

              <div class="col-6">
                  <label  class=" form-control-label">Sexe</label>
                  <select id="Sexe" name="Sexe" class="form-control">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                  </select>
              </div>
          </div>
          <br>

   <div class="row">
         
 
          
              <div class="col-6">
                  <label  class=" form-control-label">Class</label>
                  <input type="text"  value="{{ $candidats->class }}" class="form-control" name="class" >
              </div>
            
              <div class="col-6">
                  <label  class=" form-control-label">Departement</label>
                  <input type="text"  value="{{ $candidats->department }}" class="form-control" name="departement" >
              </div>
     
          </div>

          <div class="row">
              <div class="col-12">
                  <label  class=" form-control-label">Birth Date</label>
                  <input type="date"  value="{{ $candidats->birth_date }}" class="form-control" name="Birthday" >
              </div>
          </div>
          <br>
      

  </div>
<div style="text-align: center;">
  <input type="submit" value="Submit" class="btn btn-default">
</div>
<br>
</div>
</fieldset>
</form>

@endsection
</body>
