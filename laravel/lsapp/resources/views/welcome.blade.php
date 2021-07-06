@extends('layout')

@section('content')

    <div class="main__content">
        <div id="homepage__carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#homepage__carousel" data-slide-to="0" class="active"></li>
                <li data-target="#homepage__carousel" data-slide-to="1"></li>
                <li data-target="#homepage__carousel" data-slide-to="2"></li>
                <li data-target="#homepage__carousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('assets/images/image_1.jpg')}}" alt="First slide">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('assets/images/image_2.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('assets/images/image_3.jpg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('assets/images/image_4.jpg')}}" alt="Fourth slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#homepage__carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#homepage__carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
        <section class="index-page-destinations grid-view p-3">
            <!--    grid items -->
            @if (count($holidays) > 0)
                @foreach($holidays as $holiday)
                    <div class="grid-item">
                        <a href="/holiday/{{$holiday->id}}">
                            <div class="content__holder">
                                <img src="{{ $holiday->image_url }}" alt="{{$holiday->name}}">
                                <p class="absolute-item">{{$holiday->name}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <p>No data found</p>
            @endif
        </section>
    </div>
@endsection
