@foreach($allContacts as $contact)
   <p>{{$contact->email}}</p>
   <p>{{$contact->message}}</p>
@endforeach
