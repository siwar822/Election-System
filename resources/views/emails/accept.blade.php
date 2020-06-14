@component('mail::message')
# Our voting system
@foreach ($demande as $dem)
Dear **{{ $dem->name}}**
@endforeach
We are sending you this message to let you know  that  your request  is approved and you are a new candidate


Thanks,<br>
{{ config('app.name') }}
@endcomponent
