<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>dashbord</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">

  </head>
          <!-- scripts -->
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/popper.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>


   
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
  <body>
    
    <div class="wrapper d-flex align-items-stretch">

      <nav id="sidebar">
        <div class="img bg-wrap text-center py-4" style="background-image: url(../images/bg_1.jpg);">
          <div class="user-logo">
            <div class="img" style="background-image: url(../images/logo.jpg);"></div>
            <h3>Karim Joudi</h3>
          </div>
        </div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#"><span class="fa fa-home mr-3"></span> Dashboard</a>
          </li>
          <li>
              <a href="#"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Check Requests</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-trophy mr-3"></span> Announce Result</a>
          </li>
          <li>
            <a href="candidates"><span class="fa fa-cog mr-3"></span> Manage Candidates</a>
          </li>
          <li>
            <a href="#"><span class=" glyphicon glyphicon-plus mr-3"></span> Add Admin</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-cog mr-3"></span> Manage Admins</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-support mr-3"></span> Support</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
          <li>
      
          </li>

        </ul>
      </nav>
    
    <div class="wrapper d-flex align-items-stretch">

        <!-- Page Content  -->

      <div id="content" class="p-4 p-md-5 pt-5">	

<div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4">Candidate details :
    <small>{{ $candidat->name }}</small>
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" src="http://placehold.it/750x500" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-3">Description</h3>
      <p>{{ $candidat->description }}</p>

      <ul>
        <li><strong>Name :</strong> {{ $candidat->name }}</li>
        <li><strong>CIN :</strong> {{ $candidat->cin }}</li>
        <li><strong>Email :</strong> {{ $candidat->email }}</li>
        <li><strong>Phone :</strong> {{ $candidat->phone }}</li>
        <li><strong>Username :</strong> {{ $candidat->username }}</li>
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
     <button onclick="window.print();" class="btn btn-success btn-lg">
     <span class="glyphicon glyphicon-print"></span> Print 
     </button>

      </div>


    </div>
</div>
 	

   </body>
</html>
  