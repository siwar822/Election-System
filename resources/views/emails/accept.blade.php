@component('mail::message')
# Our voting system

Dear **{{ $demande->name }}**

We are sending you this message to let you know  that  your request  is approved and you are a new candidate


Thanks,<br>
{{ config('app.name') }}
@endcomponent
