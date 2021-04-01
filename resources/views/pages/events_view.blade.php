@extends('layouts.app')

@section('title')
    PowerJump - {{ $event->title }}
@endsection


@section('facebook')
    <!-- Facebook -->
    <meta property="og:title" content="club Power Jump - {{ $event->title }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://powerjump.info"/>
    <meta property="og:site_name" content="Power Jump"/>
    <meta property="og:description" content="{!! str_limit(strip_tags($event->description),500,'...') !!}"/>
    <meta property="og:locale" content="bg_BG"/>
    <meta property="fb:admins" content="1549776988"/>
    <!-- END Facebook -->
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Събитие > {{ $event->title }}</h2>
            </div>
        </div>

            <div class="row text-center">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="bs-component">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">{{ $event->title }}</h3>
                            </div>
                            <div class="panel-body">
                                    @foreach($event->images as $image)
                                        <img src="{{ asset($image->url) }}" style="height: 250px;" alt="{{ $event->title }}"/>
                                        @break
                                    @endforeach
                                <p>{!! $event->description !!}</p>

                            </div>
                            <div class="panel-footer">Дата на
                                събитието: {{ \Carbon\Carbon::parse($event->when )->format('d-m-Y') }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
    </div>
@endsection

