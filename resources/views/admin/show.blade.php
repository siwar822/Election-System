@extends('layouts.navbar')
@section('title')
Candidates
@endsection



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <style>

 button{
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 11px;
}
/* Darker background on mouse-over */
button {
  background-color: RoyalBlue;
}
</style>

@section('content')

<div class="wrapper d-flex align-items-stretch">
<div id="content" class="p-4 p-md-5 pt-5">	

<div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4">Candidate details :
    <small>{{ $candidat->name }}</small>
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" src="{{ asset('storage/'.$candidat->photo) }}" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-3">Description</h3>
      <p>{{ $candidat->description }}</p>

      <ul>
        <li><strong>Name :</strong> {{ $candidat->name }}</li>
        <li><strong>CIN :</strong> {{ $candidat->cin }}</li>
        <li><strong>Email :</strong> {{ $candidat->email }}</li>
    
        <li><strong>Sexe :</strong> {{ $candidat->sexe }}</li>
        <li><strong>Bith date :</strong> {{ $candidat->birth_date }}</li>
        <li><strong>Departement :</strong> {{ $candidat->department }}</li>
        <li><strong>Class :</strong> {{ $candidat->class }}</li>
        <strong></strong>
      </ul>
    </div>

  </div>
  <!-- /.row -->



  <!-- /.row -->

</div>
<!-- /.container -->    

<br><br>


<div  class="text-center">
     <button onclick="window.print();">
     <span class="glyphicon glyphicon-print"></span> Print 
     </button>

      </div>


    </div>
</div>
 	

 @endsection
  