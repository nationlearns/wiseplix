<x-mail::message>
# Hello {{$data->associate->full_name}}

New message is available from: {{$data->user->name}} ({{$data->user->email}})

{{$data['message']}}




Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
