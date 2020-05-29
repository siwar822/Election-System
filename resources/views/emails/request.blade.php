@component('mail::message')
# Our voting system

Dear **{{ $demande->name }}**

We are sending you this message to let you knoy that we recieved your request at {{$demande->created_at}}and we will answer you very soon


Thanks,<br>
{{ config('app.name') }}
@endcomponent

