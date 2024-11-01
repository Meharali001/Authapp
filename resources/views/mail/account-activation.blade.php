<x-mail::message>
# Welcome, {{ $data['name'] }}

Thank you for registering with us! Your email is: {{ $data['email'] }}.

<x-mail::button :url="route('verification.notice')">
Verify Your Email
</x-mail::button>

If you have any questions, feel free to reach out to us.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
