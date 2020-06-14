@extends('layouts.navbar')
@section('title')
Requests
@endsection

<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style>




    .pearls{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin:0 0 22px}.pearl{position:relative;padding:0;margin:0;text-align:center}.pearl:after,.pearl:before{position:absolute;top:18px;z-index:0;width:50%;height:4px;content:"";background-color:#f3f7f9}.pearl:before{left:0}.pearl:after{right:0}.pearl:first-child:before,.pearl:last-child:after{display:none!important}.pearl-icon,.pearl-number{position:relative;z-index:1;display:inline-block;width:36px;height:36px;line-height:32px;color:#fff;text-align:center;background:#ccd5db;border:2px solid #ccd5db;border-radius:50%}.pearl-number{font-size:18px}.pearl-icon{font-size:18px}.pearl-title{display:block;margin-top:.5em;margin-bottom:0;overflow:hidden;font-size:16px;color:#526069;text-overflow:ellipsis;white-space:nowrap}.pearl.active:after,.pearl.active:before,.pearl.current:after,.pearl.current:before{background-color:#3e8ef7}.pearl.active .pearl-icon,.pearl.active .pearl-number,.pearl.current .pearl-icon,.pearl.current .pearl-number{color:#3e8ef7;background-color:#fff;border-color:#3e8ef7;-webkit-transform:scale(1.3);transform:scale(1.3)}.pearl.disabled{pointer-events:none;cursor:auto}.pearl.disabled:after,.pearl.disabled:before{background-color:#f3f7f9}.pearl.disabled .pearl-icon,.pearl.disabled .pearl-number{color:#fff;background-color:#ccd5db;border-color:#ccd5db}.pearl.error:before{background-color:#3e8ef7}.pearl.error:after{background-color:#f3f7f9}.pearl.error .pearl-icon,.pearl.error .pearl-number{color:#ff4c52;background-color:#fff;border-color:#ff4c52}.pearl.done:after,.pearl.done:before{background-color:#3e8ef7}.pearl.done .pearl-icon,.pearl.done .pearl-number{color:#fff;background-color:#3e8ef7;border-color:#3e8ef7}.pearls-lg .pearl:after,.pearls-lg .pearl:before{top:20px}.pearls-lg .pearl-title{font-size:18px}.pearls-lg .pearl-icon,.pearls-lg .pearl-number{width:40px;height:40px;line-height:36px}.pearls-lg .pearl-icon{font-size:20px}.pearls-lg .pearl-number{font-size:20px}.pearls-sm .pearl:after,.pearls-sm .pearl:before{top:16px}.pearls-sm .pearl-title{font-size:14px}.pearls-sm .pearl-icon,.pearls-sm .pearl-number{width:32px;height:32px;line-height:28px}.pearls-sm .pearl-number{font-size:16px}.pearls-sm .pearl-icon{font-size:14px}.pearls-xs .pearl:after,.pearls-xs .pearl:before{top:12px;height:2px}.pearls-xs .pearl-title{font-size:12px}.pearls-xs .pearl-icon,.pearls-xs .pearl-number{width:24px;height:24px;line-height:20px}.pearls-xs .pearl-number{font-size:12px}.pearls-xs .pearl-icon{font-size:12px}

    .hovereffect {
width:300px;
height:150px;

overflow:hidden;
position:relative;
text-align:center;
cursor:default;
}

.hovereffect .overlay {
width:100%;
height:100%;
position:absolute;
overflow:hidden;
top:0;
left:0;
opacity:0;
background-color:rgba(0,0,0,0.5);
-webkit-transition:all .4s ease-in-out;
transition:all .4s ease-in-out
}

.hovereffect img {
display:block;
position:relative;
-webkit-transition:all .4s linear;
transition:all .4s linear;
}

.hovereffect h2 {
text-transform:uppercase;
color:#fff;
text-align:center;
position:relative;
font-size:17px;
background:rgba(0,0,0,0.6);
-webkit-transform:translatey(-100px);
-ms-transform:translatey(-100px);
transform:translatey(-100px);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
padding:10px;
}

.hovereffect a.info {
text-decoration:none;
display:inline-block;
text-transform:uppercase;
color:#fff;
border:1px solid #fff;
background-color:transparent;
opacity:0;
filter:alpha(opacity=0);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
margin:50px 0 0;
padding:7px 14px;
}

.hovereffect a.info:hover {
box-shadow:0 0 5px #fff;
}

.hovereffect:hover img {
-ms-transform:scale(1.2);
-webkit-transform:scale(1.2);
transform:scale(1.2);
}

.hovereffect:hover .overlay {
opacity:1;
filter:alpha(opacity=100);
}

.hovereffect:hover h2,.hovereffect:hover a.info {
opacity:1;
filter:alpha(opacity=100);
-ms-transform:translatey(0);
-webkit-transform:translatey(0);
transform:translatey(0);
}

.hovereffect:hover a.info {
-webkit-transition-delay:.2s;
transition-delay:.2s;
}

</style>





@section('content')
<div>
    
@if (session('updaterequest'))

<div class="alert alert-success alert-dismissible fade show" style="text-align:center" role="alert">

    {{ session('updaterequest') }}

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">

        <span aria-hidden="true">&times;</span>

    </button>

</div>

@endif
                    <div class="pearls row" style="width:700px">
                        <div class="pearl done col-4 one">
                            <div class="pearl-icon"><svg class="bi bi-person-lines-fill" style="margin-top:5px" width="30px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm2 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
</svg></div>
                            <span class="pearl-title">Request</span>
                        </div>
                        <div class="pearl done col-4 two">
                            <div class="pearl-icon"><svg class="bi bi-clock-history" style="margin-top:5px" width="30px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
  <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
</svg></div>
                            <span class="pearl-title">Process the request</span>
                        </div>
                        <div class="pearl done col-4 three">
                            <div class="pearl-icon" >
                            <svg class="bi bi-check-square" width="30px" height="20px"  style="margin-top:5px"viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
</svg>
                            </div>
                            <span class="pearl-title"><i class="icon wb-payment" aria-hidden="true">Validation</span>
                        </div>
                    </div>
<br>

                  

                            <h3>{{$demande->name}}</h3>
                   
    <div class="hovereffect">
                                <img src="{{ asset('storage/'.$demande->photo) }}" class="img-responsive" alt="{{ $demande->name }} "style="width:300px;height:150px">
                                <div class="overlay">
           <h2>{{$demande->name}}</h2>
           <a class="info"  data-toggle="modal" data-target="#photo">Edit photo</a>
        </div>
    </div>

 
                                <br>
                                   <strong>Sexe: </strong> {{$demande->sexe}}
                                  <br>
                                  <br>
                                  <strong>C.i.n: </strong> {{$demande->cin}}
                                  <br>
                                  <br>
                                    <strong>Birth_date: </strong>{{$demande->birth_date->format('d/m/Y')}} 
                                <br>
                                <br>
                                    <strong>Email: </strong>{{$demande->email}}  
                            <br>
                            <br>
                                  <strong>Department:</strong> {{$demande->department}}
                                  <br>
                                  <br>
                                    <strong>Class:</strong> {{$demande->class}}
                                    <br>
                               <br>

                               
                                   <strong>Request date:</strong> {{$demande->created_at->format('d/m/Y')}}
                                   <br>
                        
       <br>
                      @if ($demande->status == 0)
                       
                                
                        <a href="" class="btn btn-outline-success" data-toggle="modal" data-target="#confirmAcceptModal"style="width:150px;height:35px">Accept</a>
                        <a href="" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirmRejectModal"style="width:150px;height:35px">Reject</a>
@endif;
<a href="{{ route('demande.edit', $demande->id) }}" style="width:150px;height:35px"class="btn btn-outline-info">Edit</a>
<br>

<div class="modal fade" id="confirmAcceptModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Accept Request</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure you want to accept the request and add it to candidates list?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal"style="width:100px;height:35px">Close</button>
          <button type="button" class="btn btn-outline-success"style="width:125px;height:35px"
            onclick="event.preventDefault();
            document.querySelector('#accept-request').submit();">Confirm </button>
        </div>
               
   
        <form id="accept-request" action="{{ route('accept',$demande->id ) }}" method="POST" style="display: none;">

            @csrf
            @method('GET')
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade" id="confirmRejectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Reject Request</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure you want to reject the request ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal"style="width:100px;height:35px">Close</button>
          <button type="button" class="btn btn-outline-danger"style="width:125px;height:35px"
            onclick="event.preventDefault();
            document.querySelector('#reject-request').submit();">Confirm</button>
        </div>
               
   
        <form id="reject-request" action="{{ route('refuse',$demande->id ) }}" method="POST" style="display: none;">

            @csrf
            @method('GET')
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade" id="photo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit photo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
 
        
        <form id="photoed" action="{{ route('photo',$demande->id ) }}" method="POST" enctype="multipart/form-data">
        @csrf

@method('PATCH')

        <input type="file" name="photo"  id="photo" class="form-control" placeholder="Enter your phone" >
          @error('photo')<div class="text-danger">{{ $message }}</div> @enderror
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal"style="width:100px;height:35px">Close</button>
          <button type="button" class="btn btn-outline-warning"style="width:125px;height:35px"
            onclick="event.preventDefault();
            document.querySelector('#photoed').submit();">Update photo</button>
        </div>
               
   
      
      </div>
    </div>
  </div>
@endsection

