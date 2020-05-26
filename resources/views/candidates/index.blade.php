@extends('layouts.navbar')

@section('content')

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">photos</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($candidates as $candidat)            
            <tr>
                <td scope="row"> {{ $candidat->id }}</td>
                <td> {{ $candidat->name }}</td>
                <td> {{ $candidat->email }}</td>
                <td> {{ $candidat->photos }}</td>
                <td>
                   
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
  @endsection
