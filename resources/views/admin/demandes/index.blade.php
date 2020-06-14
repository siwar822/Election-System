@extends('layouts.navbar')
@section('title')
Requests
@endsection
@section('content')

<style>

body{
	background: #f6f7f8da;
}
h1{
  text-align:center;
  font-size:50px;
}
button{
  width:50px;
  height:50px;
}



</style>
<div>
@if (session('deleterequest'))

<div class="alert alert-success alert-dismissible fade show" style="text-align:center" role="alert">

    {{ session('deleterequest') }}

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">

        <span aria-hidden="true">&times;</span>

    </button>

</div>

@endif
@if (session('acceptrequest'))

<div class="alert alert-success alert-dismissible fade show" style="text-align:center" role="alert">

    {{ session('acceptrequest') }}

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">

        <span aria-hidden="true">&times;</span>

    </button>

</div>

@endif
@if (session('refuserequest'))

<div class="alert alert-success alert-dismissible fade show" style="text-align:center" role="alert">

    {{ session('refuserequest') }}

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">

        <span aria-hidden="true">&times;</span>

    </button>

</div>

@endif

                    <h1 class="panel-title" style="font-size:20px;"> All requests </h1>         
                  

<div class="panel-body">



                    <div class="margin-bottom-15">   
                                                                     </div> 
                    <div class="example table-responsive">
                        <table class="table table-hover dataTable table-striped" data-plugin="floatThead">
                            <thead>
                                <tr>
                                <th class="panel-title" style="color:grey">#</th>
                                <th class="panel-title" style="color:grey">id</th>
                                 <th class="panel-title" style="color:grey">Name</th>
                                 <th class="panel-title"style="color:grey">email</th>
                                 <th class="panel-title"style="color:grey">Reponse</th>
                                 
                                  <th class="panel-title"style="color:grey">photo </th>
                                    <th class="panel-title"width="60"style="color:gray">Details</th>
                                    <th class="panel-title"width="60"style="color:gray">Delete</th>
                                </tr>
                            </thead>
                            <tbody aria-relevant="all" aria-live="polite">

                            @foreach ($demandes as $demande)    
                         <tr class="odd">
                                        <td><i class="icon wb-lock" aria-hidden="true"></i></td>
                                        <td>
                                        {{ $demande->id }}
                                        </td>
                                        <td>{{$demande->name}}</td> 
                                        <td><h5> 
                                        {{$demande->email}}</h5>
                                              </td>
                                             
                                        <td>
                                        @if ($demande->status == 0)
                                          <div class="badge badge-table badge-primary">
                                            Waiting for approval </div>
                                       
                                            @elseif ($demande->status == 2) 
                                            <div class="badge badge-table badge-danger">
                                            
                                            Rejected </div>
                                            @else
                                          <div class="badge badge-table badge-success">
                                            Approved 
                                            </div>
                                            @endif

                                          </td>
                                        
                                        <td><img class="card-img-top" src="{{ asset('storage/'.$demande->photo) }}" alt="{{ $demande->name }}" style="width:100px;height:100px"></td>
                        
                                        <td><a href="{{ route('demande.show', $demande->id) }}" class="btn btn-outline-primary"style="width:100px;height:35px">Show</a>
                                        <td>
                                        <a href="" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirmDeleteModal"style="width:115px;height:35px">Delete</a> 
                                        <td> 
                      </tr>
              
        @endforeach
                                                                                            
                            </tbody>
                        </table>
</div>
{{ $demandes->links() }}
@foreach ($demandes as $demande)  
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete request</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure to delete the request ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal"style="width:100px;height:35px">Close</button>
          <button type="button" class="btn btn-outline-danger"style="width:115px;height:35px"
            onclick="event.preventDefault();
            document.querySelector('#delete-request-form').submit();">Confirm </button>
        </div>
               
   
        <form id="delete-request-form" action="{{ route('demande.destroy',$demande->id ) }}" method="POST" style="display: none;">
        @endforeach
            @csrf
            @method('DELETE')
        </form>
      </div>
    </div>
  </div>

@endsection


 
