<x-mail::message>
# Hello {{$name}}

Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, omnis, delectus nemo quidem inventore vel odio maiores facilis, deserunt consectetur error sunt eius. At, vel. Eligendi enim nulla repellendus sit.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
