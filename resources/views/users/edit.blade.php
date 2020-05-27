@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
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