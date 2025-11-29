@if( LaravelLocalization::getCurrentLocale() =='ar')
{{$instance->dep_name_ar}}
@else
    {{$instance->dep_name_en}}
@endif
