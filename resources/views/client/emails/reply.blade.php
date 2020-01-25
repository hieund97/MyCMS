@component('mail::message')
# Thank you  for your message

<strong>Name</strong> {{$reply->name}}
<br>
<strong>Email</strong> {{$reply->email}}
<br>
<strong>Message</strong> 

{{$contact->message}}
@endcomponent
