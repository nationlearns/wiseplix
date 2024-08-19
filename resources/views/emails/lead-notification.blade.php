<x-mail::message>
# Hello {{$partner['name']}},

A new lead available. 

<x-mail::button url="{{$url}}">
    Check Lead Now
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
