@extends('layouts.app')

@section('titre', 'Voters List')

@section('content')
@if (session('deleteUser'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('deleteUser') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<h1>Voters List </h1>

    <ul class="list-group">
        @foreach ($users as $user)
        <a href="{{ route('user.show' , $user->id ) }}">
            <li class="list-group-item">
                {{$user->name}}
            </li>
        </a>
            
        @endforeach
    </ul>

@endsection