@extends('layouts.navbar')
@section('title')
Voters
@endsection
@section('head')

@endsection

@section('content')
<div class="wrapper d-flex align-items-stretch">


<div id="content" class="p-4 p-md-5 pt-5">

@if (session('updateUser'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('updateUser') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<table class="table table-hover">
    <thead>
        <tr>
            <th scop="col">Name</th>
            <th scop="col">Email</th>
            <th scop="col">Cin</th>
            <th scop="col">Phone</th>
            <th scop="col">Username</th>
            <th scop="col">Operations</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->cin}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->username}}</td>
            <td>
                <a class="btn btn-outline-info" href="{{route('user.edit' , $user->id ) }}">Edit</a>
                <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirmDeleteModal">Delete</a>
            </td>
        </tr>
    </tbody>
</table>

 <!-- Modal -->
 <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete user</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure to delete the user ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-outline-danger"
                    onclick="event.preventDefault();
                    document.querySelector('#delete-user-form').submit();">Confirm delete</button>
        </div>
            
        <form id="delete-user-form" action="{{ route('user.destroy', $user->id) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
        </form>
      </div>
    </div>
  </div>

@endsection