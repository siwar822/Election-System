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
    <script src="{{ asset('js/app.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">


    <!-- Styles -->


    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>
    @yield('head')
</head>



  <body>
  <style>
  
h7 {
  font-size:11.5px;
}
  
  
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
            <a href="{{ route('dashboard') }}"><span class="fa fa-home mr-3"></span> Dashboard</a>
          </li>
         
          <div class="dropdown show">
          <li>

          <?php
$dem = DB::table('demandes')->get()->sum('vu');

?>
  <a class="dropdown-toggle" href="{{ route('demande.index') }}"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="fa fa-download mr-3 notif">
  @if($dem > 0)
  <small  class="d-flex align-items-center justify-content-center"><h7>{{$dem}}</h7></small>
  @endif
  </span> Check Requests</a>
 

  <div class="dropdown-menu" style="background:#32373d;max-width:300px;min-width:300px" aria-labelledby="dropdownMenuLink">

    <a class="dropdown-item" href="{{ url('admin/requests/all') }}">All  Requests </a>
    <a class="dropdown-item" href="{{ url('admin/requests/waiting') }}"> Waiting for approval requests</a>
    <a class="dropdown-item" href="{{ url('admin/requests/approved') }}">Accepted requests </a>
    <a class="dropdown-item" href="{{ url('admin/requests/rejected') }}"> Rejected requests </a>
    
  </div>

  </li>

</div>

         
          <li>
            <a href="/result"><span class="fa fa-trophy mr-3"></span> Announce Result</a>
          </li>
          <li>
            <a href="{{ route('candidates.index') }}"><span class="fa fa-cog mr-3"></span> Manage Candidates</a>
          </li>
          <li>
            <a href="{{ route('user.index') }}"><span class="fa fa-cog mr-3"></span> Manage Voters</a>
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
            <a href="{{ route('home') }}"><span class="fa fa-home mr-3"></span> Dashboard</a>
          </li>
      
          <li>
            <a href="/resultat"><span class="fa fa-trophy mr-3"></span>  Result</a>
          </li>
          <li>
            <a href="{{ route('candidat.index') }}"><span class="fa fa-cog mr-3"></span> Vote here</a>
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
      @yield('content')
      

   
   

   

     
      	
    



</html>