@extends('layouts.navbar')
@section('title')
Result
@endsection
@section('head')
<link href="{{ asset('css/stylecount.css') }}" rel="stylesheet">



@endsection
@section('content')

<?php
$dem = DB::table('deadlines')->get();
foreach($dem as $de){
    $dat = $de->jour;
}

?>

<div class="wrapper d-flex align-items-stretch">


<div id="content" class="p-4 p-md-5 pt-5">
<div class="part">
<form id="" action="" method="POST">
        @csrf
       
<label for=""> the deadline date</label>



<input type="date" name="deadline"  class="form-control" value="{{ $dat}}" readonly >

</from>                
</div>

@if($dat > Now())
<div class="center">

<h1>
Voting Countdown

</h1>

<div id="clock">

</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous">
</script>

<script src="{{ asset('js/countdown.js') }}" ></script>

<script type="text/javascript">
$date="{{$dat}}";
  $('#clock').countdown($date, function(event) {
    var $this = $(this).html(event.strftime(''
    + '<div><span>%w</span><span>week</span></div>'
    + '<div><span>%d</span><span>D</span></div>'
    + '<div><span>%H</span><span>H</span></div>'
    + '<div><span>%M</span><span>M</span></div>'
    + '<div><span>%S</span><span>S</span></div>'

    
    ))
  })
</script>
@else
<?php
$dem = DB::table('candidats')->get()->max('votecount');

$dem2 = DB::table('candidats')->where('votecount',$dem)->get();
foreach($dem2 as $de){
    $name=$de->name;


?>
<div class="center">
<h1>the winner is</h1>
<h1>{{$name}}</h1>
<img src="{{ asset('storage/'.$de->photo) }}" class="img-responsive" alt="{{ $de->name }} "style="width:300px;height:150px">

</div>
<?php
}
?>

@endif
@endsection