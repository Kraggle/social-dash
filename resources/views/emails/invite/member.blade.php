@component('mail::message')
  # Social Shadow

  You have been invited to join a team on Social Shadow.

  @component('mail::button', ['url' => route('register') . "?token=$token"])
    Accept
  @endcomponent

  This link will expire after 48 hours.

  Thanks,<br>
  {{ config('app.name') }}
@endcomponent
