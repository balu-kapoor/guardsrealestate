@component('mail::message')
You have a new valuation request!


@if(!empty($formData))
@if(is_array($formData))
@foreach($formData['form_data3'] as $key=>$value)
__{{$key}}__: {{$value}}

@endforeach
@else
{!! $formData !!}
@endif

@else
No data found!
@endif


Thanks,

{{ config('app.name') }}
@endcomponent
