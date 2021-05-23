@extends('layouts.app')


@section('title')
    PowerJump - {{ $project->title }}
@endsection

@section('facebook')
    <!-- Facebook -->
    <meta property="og:title" content="club Power Jump - {{ $project->title }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ route('activity.show', ['id' => $project->id]) }}"/>
    @foreach($project->images as $image)
        @php
            $image_url = $image->url;
        @endphp
        @break
    @endforeach
    <meta property="og:image" content="{{ asset($image_url) }}"/>
    <meta property="og:site_name" content="Power Jump"/>
    <meta property="og:description" content="{!! str_limit(strip_tags($project->description),500,'...') !!}"/>
    <meta property="og:locale" content="bg_BG"/>
    <meta property="fb:admins" content="1549776988"/>
    <!-- END Facebook -->
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Дейности > {{ $project->title }}</h2>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="bs-component">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ $project->title }}</h3>
                        </div>
                        <div class="panel-body">
                                @foreach($project->images as $image)
                                    @php
                                        $image_url = $image->url;
                                    @endphp
                                    <img src="{{ asset($image_url) }}" style="height: 250px;" alt="{{ $project->title }}"/>
                                    @break
                                @endforeach
                                <p>
                                <div class="social_area wow fadeInLeft animated"
                                     style="visibility: visible; animation-name: fadeInLeft;">
                                    <ul>
                                        <li><a target="_blank"
                                               href="https://www.facebook.com/sharer/sharer.php?u={{ route('activity.show', ['id' => $project->id]) }}&amp;src=sdkpreparse"><span
                                                        class="fa fa-facebook"></span></a></li>
                                        <li><a target="_blank"
                                               href="https://twitter.com/intent/tweet?text=%23PowerJump%20{{ $project->title }}%20{{ route('activity.show', ['id' => $project->id]) }}"><span
                                                        class="fa fa-twitter"></span></a></li>
                                        <li><a target="_blank"
                                               href="http://www.reddit.com/submit?url={{ route('activity.show', ['id' => $project->id]) }}&title={{ $project->title }}"><span
                                                        class="fa fa-reddit"></span></a></li>
                                        <li><a target="_blank"
                                               href="http://www.linkedin.com/shareArticle?mini=true&url={{ route('activity.show', ['id' => $project->id]) }}&title={{ $project->title }}&source={{ url('/') }}"><span
                                                        class="fa fa-linkedin"></span></a></li>
                                        <li><a target="_blank"
                                               href="http://pinterest.com/pin/create/bookmarklet/?media={{ asset($image_url) }}&url={{ route('activity.show', ['id' => $project->id]) }}&is_video=false&description={{ $project->title }}"><span
                                                        class="fa fa-pinterest"></span></a></li>
                                    </ul>
                                </div>
                                </p>
                            <p>{!! $project->description !!}</p>

                        </div>

                        <div class="row text-center">
                            @foreach($project->events as $event)

                                <div class="col-lg-3">
                                    <div class="bs-component">
                                        <a href="{{ route('events.show', ['id' => $event->id]) }}" style="text-decoration: none;" >
                                            <div class="panel panel-default">
                                                <div class="panel-heading" style="height: 55px;">
                                                    <h3 class="panel-title">{{ $event->title }}</h3>
                                                </div>
                                                <div class="panel-body">
                                                    @foreach($event->images as $image)
                                                        <div style='background-image: url("{{ url('/') }}/{{$image->url}}");height: 100px;
                                                                background-position: center;
                                                                background-size: 100%;
                                                                background-repeat: no-repeat;'>
                                                        </div>
                                                        @break
                                                    @endforeach
                                                    <p style="font-size: 13px; text-align: justify;">{!! str_limit(strip_tags($event->description),50,'...') !!}</p>

                                                </div>
                                                <div class="panel-footer">Дата: {{ \Carbon\Carbon::parse($event->when )->format('d.m.Y') }}</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            @endforeach
                        </div>

                        <div class="panel-footer">Дата на
                            събитието: {{ \Carbon\Carbon::parse($project->when )->format('d-m-Y') }}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
    </div>
@endsection



