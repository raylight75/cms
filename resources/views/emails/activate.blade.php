@component('mail::message')
# Email for activation account in Laravel CMS

Hello {{$user->name}}

{{--@component('mail::button', ['url' => 'user/activation'])
Activation Link
@endcomponent--}}
Dear, {{ $user->name }}
Please activate your account at : {{ url('user/activation', $user->link)}}

Thanks from,<br>
{{ config('app.name') }}
@endcomponent
