<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Edit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/style.css">
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
        <div class="img bg-wrap text-center py-4" style="background-image: url(../../images/bg_1.jpg);">
          <div class="user-logo">
            <div class="img" style="background-image: url(../../images/logo.jpg);"></div>
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
                        <label  class=" form-control-label">Phone</label>
                        <input type="text"  value="{{ $candidats->phone }}" class="form-control" name="phone">
                    </div>
                </div>
                <br>

         <div class="row">
                <div class="col-6">
                        <label  class=" form-control-label">Username</label>
                        <input type="text"  value="{{ $candidats->username }}" class="form-control" name="Username">
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
                <br>

                <div class="row">
                    <div class="col-12">
                        <label  class=" form-control-label">Birthday</label>
                        <input type="date"  value="{{ $candidats->birthday }}" class="form-control" name="Birthday" >
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


      </div>
    </div>

   </body>
</html>
  

