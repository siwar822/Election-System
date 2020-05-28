@extends('layouts.navbar')

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

                      


                    <h1 class="panel-title" style="font-size:20px;">Approved Requests </h1>         
                   
           

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

                            @foreach ($approved as $appr)    
                         <tr class="odd">
                                        <td><i class="icon wb-lock" aria-hidden="true"></i></td>
                                        <td>
                                        {{$appr->id }}
                                        </td>
                                        <td>{{$appr->name}}</td> 
                                        <td><h5> 
                                        {{$appr->email}}</h5>
                                              </td>
                                             
                                        <td>
                                     
                                          <div class="badge badge-table badge-success">
                                        Approved </div>
                                       
                                           

                                          </td>
                                    
                     
                                        
                                        <td><img class="card-img-top" src="{{ asset('storage/'.$appr->photo) }}" alt="{{ $appr->name }}" style="width:100px;height:100px"></td>
                                    
                                        <td><a href="{{ route('demande.show', $appr->id) }}" class="btn btn-outline-primary"style="width:100px;height:35px">Afficher</a>
                                        <td>
                                        <a href="" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirmDeleteModal"style="width:115px;height:35px">Delete</a> 
                                        <td> 
                      </tr>
              
                      @endforeach
                                                                                            
                            </tbody>
                        </table>
</div>
@foreach ($approved as $appr) 

<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete booking</h5>
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
            document.querySelector('#delete-request-form').submit();">Confirm delete</button>
        </div>
               
   
        <form id="delete-request-form" action="{{ route('demande.destroy',$appr->id ) }}" method="POST" style="display: none;">
        @endforeach
            @csrf
            @method('DELETE')
        </form>
      </div>
    </div>
  </div>

@endsection


 
