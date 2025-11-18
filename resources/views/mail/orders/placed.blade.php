<x-mail::message>
# order placed success

Thankyou for order. your number orde: {{ $order->id }}.

<x-mail::button :url="$url">
view order
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
