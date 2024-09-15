<x-mail::message>

# {{$lead['name']}} is looking for {{$lead->subcategory['slug']}}
# {{$lead['pin_code']}}, {{$lead->location['district_name']}}

<b>Lead Details</b>

@if ($lead && $lead['answers'])
@php
$answers = json_decode($lead->answers, true);
@endphp

@if ($answers && is_array($answers))
@foreach ($answers as $answer)

{{$loop->iteration}}. {{ $answer['question'] ?? '-' }}             
- {{ $answer['answer'] ?? '-' }}

@endforeach
@else                                                        
-
@endif

@else
-
@endif



<x-mail::button url="{{$url}}">
    Contact {{$lead['name']}}
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
