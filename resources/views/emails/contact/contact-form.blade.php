@component('mail::message')

From: <strong> {{ $data['name'] }} {{ $data['surname'] }} </strong>

E-mail: <strong> {{ $data['email'] }} </strong>

Nachricht: <strong> {{ $data['message'] }} </strong>

@endcomponent
