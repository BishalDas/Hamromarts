@component('mail::message')
# New Feedback Recieved.

** First Name:** {{$data['firstname']}}<br>

**Last Name: **{{$data['lastname']}}<br>
**Email: **{{$data['email']}}<br>

**Requirement: **{{$data['requirement']}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
