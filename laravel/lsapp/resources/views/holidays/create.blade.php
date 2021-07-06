@extends('layout')

@section('content')
    <div class="form-wrapper mx-auto w-75 py-5">
        <h1 class="text-black-50 text-center">Добавяне на оферта</h1>
        {!! Form::open(['action' => 'HolidaysController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Оферта име:') !!}
        </div>
        <div class="form-group">
            {{Form::text('title', '', ['class' => 'form-control'])}}
        </div>
            <div class="form-group">
            {{ Form::label('title', 'Лейбъл:') }}
            </div>
        <div class="form-group">
            {{Form::textarea('iframe_url', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{ Form::label('image', 'Снимка:', ['class' => 'my-3']) }}
            <br>
            {{Form::file('image_url')}}
        </div>
            {{Form::submit('Запиши',['class' => 'btn btn-primary btn-lg my-3'] )}}
        {!! Form::close() !!}
        <a href="/admin" class="btn btn-dark btn-lg">Назад</a>
    </div>
@endsection
