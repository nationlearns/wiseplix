<x-mail::message>
# Hello {{$user['name']}}

Thank you for posting your requirement. 

Please find your requirement below. 

<x-mail::table>
| Title         | Detail        |
| ------------- | :-----------: |
| Name          | {{$lead->name ?? '-'}}      |
| Email         | {{$lead->email ?? '-'}} |
| Category      | {{$lead->category['alt_name'] ?? '-'}} |
| Sub-Category  | {{$lead->subcategory['slug'] ?? '-'}} |
| Area          | {{$lead['area_name'] ?? '-'}} |
| Disctrict     | {{$lead['district_name'] ?? '-'}} |
| State         | {{$lead['state'] ?? '-'}} |
| Q/A           |   @if ($lead && $lead->answers)
                        @php
                            $answers = json_decode($lead->answers, true);
                        @endphp
                    
                        @if ($answers && is_array($answers))
                            @foreach ($answers as $answer)
                                Question: {{ $answer['question'] ?? '-' }} 
                                
                                Answer: {{ $answer['answer'] ?? '-' }}
                            @endforeach
                        @else                                                        
                            -
                        @endif
                        
                    @else
                        -
                    @endif |

</x-mail::table>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
