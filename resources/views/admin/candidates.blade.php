@extends('layouts.navbar')
@section('title')
Candidates
@endsection
@section('head')


<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
   @endsection

    <script src="{{ asset('js/jquery.min.js') }}" ></script>
    <script src="{{ asset('js/main.js') }}" ></script>
    <script src="{{ asset('js/popper.js') }}" ></script>
    
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 11px;
}
/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>

@section('content')

<div class="wrapper d-flex align-items-stretch">


<div id="content" class="p-4 p-md-5 pt-5">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by candidat name.." title="Type in a name" class="col-md-12"><br><br><br>
        @if(Session::has('msg'))
        <div class="alert alert-success" role="alert">
      
          {{ Session::get('msg') }}
          
        </div>
        @endif
        <h1>Candidates List :</h1>
        <div class="container mb-4" style="margin-top: 20px;">
  <div class="row">
      <div class="col-12">
          <div class="table-responsive">
              <table class="table table-striped" id="myTable">
                  <thead>
                      <tr>
                          <th scope="col">name</th>
                          <th scope="col">CIN</th>
                          <th scope="col">phone</th>
                          <th scope="col">username</th>
                          <th scope="col"></th>
                          <th scope="col">details</th>
                          <th scope="col"></th>
                          
                          <th></th>

                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($candidats as $candidat)
                      <tr>
                        <td scope="col">{{$candidat->name}}</td>
                        <td scope="col">{{$candidat->cin}}</td>
                        <td scope="col">{{$candidat->sexe}}</td>
                        <td scope="col">{{$candidat->class}}</td>
                        <td scope="col"></td>
                        <td scope="col">
                         <a href="{{ route('candidates.show',$candidat->id) }}" title="consulter"> 
                        <span class="glyphicon glyphicon-eye-open"> </span>
                        </a> 
                        </td>
                        <td scope="col">
                          <a href="{{ route('candidates.edit',$candidat->id) }}" class="btn btn-info btn-lg">
                        <span class="glyphicon glyphicon-pencil"> </span> Modify 
                      </a>
                        </td>
                        <td>
                          <button type="button" class="btn btn-outline-danger"
                          onclick="event.preventDefault();
                          document.querySelector('#delete-candidate-form').submit();"><span class="glyphicon glyphicon-trash"></span></button>
                          <form id="delete-candidate-form" action="{{ route('candidates.destroy', $candidat->id) }}" method="POST" style="display: none;">

                            @csrf
                           
                            @method('DELETE')

                        </form>
                          
                        </td>
                      </tr>
                    @endforeach
            </tbody>
        </table>


    </div>
</div>
<div class="col mb-2">
   <div class="row">
     <div class="col-sm-12  col-md-6">
     </div>
</div>
</div>
</div>
</div>
      </div>
    </div>

   </body>
   <script>
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
    }       
}
}
</script>

@endsection