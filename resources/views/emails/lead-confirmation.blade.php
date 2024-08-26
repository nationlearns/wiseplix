<x-mail::message>

Hi {{$user['name']}}, we’ve received your {{$lead->category['alt_name']}} request and have already found professionals that match your criteria. To view them, simply <a href="{{route('login')}}">login into your account</a>.

We'll continue the search to find you the very best professionals in {{$lead['district_name'] ?? ' '}}, and you'll start hearing from them shortly.

<b>Please remember</b>: Professionals on Wiseplix pay to respond to you, so please let each of them know whether they’re right for the job.

We’ve created an account for you so that you can better manage this request as well as any future requests you may wish to place. Simply click the button below to log in:

Username: {{$user['email']}}

<x-mail::button url="{{route('login')}}">
Login
</x-mail::button>

{{-- Please find your requirement below. 

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

</x-mail::table> --}}



Thanks,<br>
{{ config('app.name') }}

With 1000s of services available, we’re sure to find you the best professionals anywhere in India no matter how big or small the job is.

</x-mail::message>
