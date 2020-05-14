@extends('layouts.app')

@section('titre', 'Voters List')

@section('content')
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