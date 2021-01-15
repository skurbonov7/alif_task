@component('mail::message')
@foreach($users as $user)
    <strong>Уважаемый</strong>{{$user->name}}
    <strong>Email</strong>{{$user->email}}
    <strong>Message</strong><p>Ваша покупка успешно оформлено, вам предоставят в течении дня</p>
@endforeach
@endcomponent
