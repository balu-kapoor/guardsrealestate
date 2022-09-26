@component('mail::message')
You have a new repair request!


@if(is_array($formData))
@foreach($formData as $key=>$value)
{{$key}} : {{$value}}
@endforeach
@else
{!! $formData !!}
@endif

@if(is_array($images))
@foreach($images as $key=>$value)
<img src="{{$value}}" /> 
@endforeach
@else
{!! $images !!}
@endif

Thanks,

{{ config('app.name') }}
@endcomponent
