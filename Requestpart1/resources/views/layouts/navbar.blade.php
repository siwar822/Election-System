<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>
</head>



  <body>
  <style>
  

  
  
  </style>
    
    <div class="wrapper d-flex align-items-stretch">

      <nav id="sidebar">
        <div class="img bg-wrap text-center py-4" style="background-image: url(/images/bg_1.jpg);">
          <div class="user-logo">
            <div class="img" style="background-image: url(/images/logo.jpg);"></div>
            <h3> {{ Auth::user()->username }}</h3>
          </div>
        </div>
              @auth
        <ul class="list-unstyled components mb-5">
        @admin
          <li class="active">
            <a href="#"><span class="fa fa-home mr-3"></span> Dashboard</a>
          </li>
         
          <div class="dropdown show">
          <li>


  <a class="dropdown-toggle" href="{{ route('demande.index') }}"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Check Requests</a>
 

  <div class="dropdown-menu" style="background:#32373d;max-width:300px;min-width:300px" aria-labelledby="dropdownMenuLink">

    <a class="dropdown-item" href="{{ url('admin/requests/all') }}">All  Requests </a>
    <a class="dropdown-item" href="{{ url('admin/requests/waiting') }}"> Waiting for approval requests</a>
    <a class="dropdown-item" href="{{ url('admin/requests/approved') }}">Accepted requests </a>
    <a class="dropdown-item" href="{{ url('admin/requests/rejected') }}"> Rejected requests </a>
    
  </div>

  </li>

</div>

         
          <li>
            <a href="#"><span class="fa fa-trophy mr-3"></span> Announce Result</a>
          </li>
          <li>
            <a href="candidates"><span class="fa fa-cog mr-3"></span> Manage Candidates</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-cog mr-3"></span> Manage Voters</a>
          </li>
          <li>
            <a href="#"><span class=" glyphicon glyphicon-plus mr-3"></span> Add Admin</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-cog mr-3"></span> Manage Admins</a>
          </li>
        
<li>
          <a  href="{{ route('logout') }}" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       
                                       <span class="fa fa-sign-out mr-3"> {{ __('Logout') }}</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
</li>
        
@else
<li class="active">
            <a href="#"><span class="fa fa-home mr-3"></span> Dashboard</a>
          </li>
      
          <li>
            <a href="#"><span class="fa fa-trophy mr-3"></span>  Result</a>
          </li>
          <li>
            <a href=""><span class="fa fa-cog mr-3"></span> Vote here</a>
          </li>
       
          
<li>
          <a  href="{{ route('logout') }}" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       
                                       <span class="fa fa-sign-out mr-3"> {{ __('Logout') }}</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
</li>
         
         
          @endadmin
        </ul>
        @endauth
      </nav>
    
   <div>
   
   

   

     
      	
        @yield('content')


</div>
   </body>
</html>