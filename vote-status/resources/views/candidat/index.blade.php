@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">CHOOSE YOUR CANDIDATt</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">name</th>
                   <th scope="col">cin</th> 
                    <th scope="col">email</th>
                    <th scope="col">operation</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($candidats as $candidat)
                <tr>
                    <td> {{ $candidat->name }}</td>
                     <td> {{ $candidat->cin }}</td>
                    <td> {{ $candidat->email }}</td>
                    <td>
                        <a href="{{route('candidat.show',$candidat->id)}}" class="btn btn-success">voter</a>
                        
                        
                    </td>                
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
    </div>
</div>
@endsection