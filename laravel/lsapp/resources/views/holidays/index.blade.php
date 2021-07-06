@extends('layout')

@section('content')
    <div class="form-wrapper mx-auto w-75 py-5">
        @if(session()->has('message'))
            <div class="alert alert-success my-3">
                {{ session()->get('message') }}
            </div>
        @endif
        <h1 class="text-black-50 text-center">
            Списък с оферти
            <a href="/admin/create" class="btn btn-info btn-lg ml-3">Добави нова</a>
        </h1>
            @if (count($holidays) > 0)
        <table class="table my-4">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Име на оферта</th>
                <th scope="col">Снимка</th>
{{--                <th scope="col">Видима?</th>--}}
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($holidays as $holiday)
                <tr>
                    <th scope="row">
                        {{$loop->iteration}}
                    </th>
                    <td>
                            {{$holiday->name}}
                    </td>
                    <td>
                        <img src="/storage/assets/{!! $holiday->image_url !!}" alt="" class="img-thumbnail" />
                    </td>
{{--                    <td>--}}
{{--                        {{$holiday->isActive}}--}}
{{--                    </td>--}}
                    <td>
                        {!! Form::open(['action' => ['HolidaysController@destroy', $holiday->id], 'method'=>'POST' ])!!}
                        {{ Form::hidden('_method', 'DELETE')}}
                        {!! Form::submit('Премахни', ['class'=>'btn btn-danger', 'onclick'=> 'return confirm(\'Наистина ли искате да изтриете тази оферта?\')']) !!}
                    </td>
                </tr>
            @endforeach
                @else
            <h2 class="text-center text-black-50 my-5">Няма добавени оферти</h2>
                @endif
            </tbody>
        </table>
    </div>
@endsection
