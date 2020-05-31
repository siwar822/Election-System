@component('mail::message')
# Our voting system
@foreach ($demande as $dem)
Dear **{{ $dem->name}}**
@endforeach
We are sending you this message to let you know  that  your request  is not approved and thanks for your participation


Thanks,<br>
{{ config('app.name') }}
@endcomponent