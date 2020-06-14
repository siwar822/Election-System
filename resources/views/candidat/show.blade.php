@extends('layouts.navbar')
@section('head')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="wrapper d-flex align-items-stretch">


<div id="content" class="p-4 p-md-5 pt-5">
<fieldset>
        <legend>welecome to {{$candidat->name}} profile</legend>
        <form action="" method="post">
            @csrf
            <div class="row">
            <div class="col">
                    <div class="form-group">
              
                    <img src="{{ asset('storage/'.$candidat->photo) }}" class="img-responsive" alt="{{ $candidat->name }} "style="width:300px;height:150px">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="candidat_name">Candidat name</label>
                      <input type="text" name="candidat_name"value="{{ $candidat->name}}" id="candidat_name" class="form-control" disabled >
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="candidat_cin">CIN</label>
                      <input type="text" name="candidat_cin" value="{{ $candidat->cin}}"id="candidat_cin" class="form-control" disabled >
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="department">department</label>
                      <input type="text" name="department"  value="{{  $candidat->department }}" id="department" class="form-control" disabled >
                      
                    </div>
                </div>
                </br>
                <div class="col">
                    <div class="form-group">
                      <label for="class">class</label>
                      <input type="text" name="class"  value="{{  $candidat->class }}" id="class" class="form-control" disabled >
                      
                    </div>
                </div>
            </div>
        </form>
    </fieldset>
    <div > 
    <div>
      <a href="{{route('candidat.confirmation',$candidat->id)}}" class="btn btn-success">confirmer</a>
    </div>
     <!-- <form action="{{ route('user.update', Auth::user()->id) }}" method="post">
    @csrf
    @method('PATCH')
      <div class="col">
        <div class="form-group">
          <input type="number" name="voting_status" value="1" id="candidat_name" class="form-control" hidden>
        </div>
      </div>
      <div class="row">
        <button type="submit" class="btn btn-outline-primary btn-block">confirm your vote</button>
      </div>
    </form>          -->
    </div>
@endsection