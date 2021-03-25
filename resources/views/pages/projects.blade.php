@extends('layouts.app')

@section('style')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Опит > {{ $selectedCategory }}</h2>
            </div>
        </div>

            @foreach($projects as $project)
        <div class="row text-center">

                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <div class="bs-component">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">{{ $project->title }}</h3>
                            </div>
                            <div class="panel-body">
                                @foreach($project->images as $image)
                                    <img src="{{ url('/') }}/{{$image->url}}" style="height: 250px;" alt=""/>
                                    @break
                                @endforeach
                                <p>{!! str_limit(strip_tags($project->description),500,'...') !!}</p>
                                {{--<p>{!! $project->description !!}</p>--}}

                            </div>
                            <div class="panel-footer">Дата на събитието: {{ \Carbon\Carbon::parse($project->when )->format('d-m-Y') }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                </div>
        </div>
            @endforeach

    </div>

    {{ $projects->links('pagination.default') }}

@endsection

