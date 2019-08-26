@component('mail::message')

    Thank you for contacting us

    Name: {{$data['name']}}
    Email: {{$data['email']}}
    Message: {{$data['message']}}
@endcomponent
