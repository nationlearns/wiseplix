<x-mail::message>
# {{$first_name}}, welcome to Wiseplix

Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam consequatur aperiam, amet suscipit atque tempora nam quibusdam sapiente, maiores eaque quis voluptatem voluptatibus sequi. Ducimus dolor atque voluptas ratione dolorum?

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
