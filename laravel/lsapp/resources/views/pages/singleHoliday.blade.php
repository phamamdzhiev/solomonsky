@extends('layout')

@section('content')
    <h2 class="text-black-50 text-center my-4">{{$singleHoliday->name}}</h2>
    <div class="iframe" id="country-iframe-id-{{$singleHoliday->id}}">
        {!! $singleHoliday->iframe_url !!}
    </div>
@endsection
