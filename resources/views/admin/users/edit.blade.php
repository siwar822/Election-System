@extends('layouts.navbar')

@section('title')
Voters
@endsection
@section('head')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="wrapper d-flex align-items-stretch">


<div id="content" class="p-4 p-md-5 pt-5">
    <fieldset>
        <legend>Edit User</legend>
        <form action="{{ route('user.update', $user->id ) }}" method="post">
            @csrf
            @method('PATCH')
          
            <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label for="name">Name</label>
                        <input type="text" name="name" value="{{$user->name}}" id="name" class="form-control" placeholder="" >
                    </div>
                </div>

                </div>
                <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" name="phone" value="{{$user->phone}}" id="phone" class="form-control" placeholder="" >
                    </div>
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-outline-primary btn-block">Confirm update</button>
            </div>
        </form>
    </fieldset>
@endsection