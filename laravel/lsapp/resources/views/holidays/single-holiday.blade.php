@extends('layout')

@section('content')
    <a href="/holidays" class="btn btn-primary my-4">Назад</a>
    <h1 class="text-dark">{{ $holiday->name }}</h1>
    <p class="text-dark">Видим? {{$holiday->isActive}}</p>
    <p class="text-dark">URL на снимка: <strong>{{$holiday->image_url}}</strong></p>
    <p class="text-dark">URL на лейбъл: <strong>{{$holiday->iframe_url}}</strong></p>

    {!! Form::open(['action' => ['HolidaysController@destroy', $holiday->id], 'method'=>'POST' ])!!}
    {{ Form::hidden('_method', 'DELETE')}}
    {!! Form::submit('DELETE', ['class'=>'btn btn-danger', 'onclick'=> 'return confirm(\'Are you sure?\')']) !!}
@endsection
