@component('mail::message')
# Thank you  for your message

<strong>Name</strong> {{$contact->name}}
<br>
<strong>Email</strong> {{$contact->email}}
<br>
<strong>Message</strong> 

{{$contact->message}}
@endcomponent
