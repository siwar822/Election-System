@extends('layouts.navbar')

@section('head')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
@section('content')
<style>
body{
    background-image:url('{{ asset('images/chaima.jpg') }}');
    background-repeat: no-repeat;
    background-size:100%;
    color:white;
    
    
}
.card{

background-color: rgba(0,0,0,0.5) !important;
}
</style>
<div class="container">
@if (session('voted'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('voted') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if (session('confirmed'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('confirmed') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="wrapper d-flex align-items-stretch">


<div id="content" class="p-4 p-md-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                Welcome
                 <h3>{{ Auth::user()->name}}</h3>

                    You are logged in!</br>
                    NOW YOU CAN VOTE TO YOUR CONDIDAT !!!
                </div>
               
                
                
            </div>
        </div>
        
    </div>
</div>
@endsection