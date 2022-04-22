


@extends('../BackLayouts.app')

@section('content')
                             
@if ($profile)
    @include('../partials/_profileDetails')

@else
    @include('../partials/_profileForm')

@endif

@endsection




















