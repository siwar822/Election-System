@extends('layouts.navbar')
@section('title')
Dashboard
@endsection

@section('content')


<div class="wrapper d-flex align-items-stretch">

<div id="content" class="p-4 p-md-5 pt-5">
     

     <div id="chartContainer" style="height: 550px; max-width: 920px; margin-top: 30px auto;"></div>
     <br>
            
       
         @php
          $a = $candidats[0]->name;
          $av = $candidats[0]->votecount;
          $b = $candidats[1]->name;
          $bv = $candidats[1]->votecount;
          $c = $candidats[2]->name;
          $cv = $candidats[2]->votecount;
          $d = $candidats[3]->name;
          $dv = $candidats[3]->votecount;
          $f = $candidats[4]->name;
          $fv = $candidats[4]->votecount; 
         @endphp
        
         
          
     <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
     <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
     </div>
   </div>
   <script>
window.onload = function () {
//Better to construct options first and then pass it as a parameter
var options = {
 title: {
   text: "Votes Statistics"              
 },
 data: [              
 {
   // Change type to "doughnut", "line", "splineArea", etc.
   type: "column",
   dataPoints: [
    
     { label: "{{ $a }}",  y: {{$av}}  },
     { label: "{{ $c }}", y: {{$cv}}  },
     { label: "{{ $b }}", y: {{$bv}} },
     { label: "{{ $f }}",  y: {{$fv}}  },
     { label: "{{ $d }}",  y: {{$dv}}  }
     
   ]
 }
 ]
};
$("#chartContainer").CanvasJSChart(options);
}
</script>
 @endsection