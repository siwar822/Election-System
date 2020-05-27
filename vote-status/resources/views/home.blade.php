@extends('layouts.app')

@section('content')
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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!</br>
                    NOW YOU CAN VOTE TO YOUR CONDIDAT !!!
                </div>
                <div class="card-body">

                <a href="{{route('candidat.index')}}"class="btn btn-primary stretched-link">VOTE HERE</a>
                </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
