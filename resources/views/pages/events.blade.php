@extends('layouts.app')

@section('title')
    PowerJump - Събития
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Събития</h2>
            </div>
        </div>

        <div class="row text-center">
              @foreach($events as $event)

                <div class="col-lg-3">
                    <div class="bs-component">
                        <a href="{{ route('events.show', ['id' => $event->id]) }}" style="text-decoration: none;" >
                            <div class="panel panel-default">
                                <div class="panel-heading" style="height: 55px;">
                                    <h3 class="panel-title">{{ $event->title }}</h3>
                                </div>
                                <div class="panel-body">
                                    @foreach($event->images as $image)
                                    <div style='background-image: url("{{ url('/') }}/{{$image->url}}");height: 183px;
                                            background-position: center;
                                            background-size: 100%;
                                            background-repeat: no-repeat;'>
                                    </div>
                                        @break
                                    @endforeach
                                    <p style="font-size: 13px; text-align: justify;">{!! str_limit(strip_tags($event->description),190,'...') !!}</p>

                                </div>
                                <div class="panel-footer">Дата: {{ \Carbon\Carbon::parse($event->when )->format('d.m.Y') }}</div>
                            </div>
                        </a>
                    </div>
                </div>

            @endforeach
        </div>

        @if ($events->hasPages())
            <div class="row text-center">
                {{ $events->links('pagination.default') }}
            </div>
        @endif
    </div>
@endsection

