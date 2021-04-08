@extends('layouts.app')

@section('title')
    PowerJump - Партньори
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Партньори</h2>
            </div>
        </div>

        <div class="row text-center">
            @foreach($partners as $partner)
                <div class="col-sm-6 col-md-2">
                    <a href="{{ $partner->url }}" target="_blank">
                        <div class="thumbnail tmbnl">
                            @foreach($partner->images as $image)
                                <div style='background-image: url("{{ url('/') }}/{{$image->url}}");
                                        height: 165px;
                                        background-position: center;
                                        background-size: 100%;
                                        background-repeat: no-repeat;'>
                                    @break
                                    @endforeach


                                </div>
                                <div class="caption">
                                    <h5>{{ $partner->name }}</h5>
                                </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>
@endsection

