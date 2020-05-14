@extends('layouts.app')


@section('content')
<table class="table table-hover">
    <thead>
        <tr>
            <th scop="col">Name</th>
            <th scop="col">Email</th>
            <th scop="col">Cin</th>
            <th scop="col">Phone</th>
            <th scop="col">Sexe</th>
            <th scop="col">Operations</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->cin}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->sexe}}</td>
            <td>
                <a class="btn btn-outline-info" href="">Edit</a>
                <a class="btn btn-outline-danger" href="">delet</a>
            </td>
        </tr>
    </tbody>
</table>

@endsection