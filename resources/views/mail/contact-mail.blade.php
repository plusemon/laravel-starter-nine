@component('mail::message')
    # Congratulations
    A message from: {{ $name }}

    To: {{ $email }}
    From: {{ env('MAIL_FROM_ADDRESS') }}
    Message: {{ $message }}

    Thanks,
    {{ config('app.name') }}
@endcomponent
