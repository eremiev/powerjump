@extends('layouts.app')

@section('title')
PowerJump - {{ $selectedCategory }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Дейности > {{ $selectedCategory }}</h2>
            </div>
        </div>
        <div class="row text-center" style="border-bottom: 1px solid #eeeeee; margin-bottom: 10px;">
            <div class="col-sm-6 col-md-3">
                <a href="{{ url('/activities/physical_activity') }}">
                    <div class="thumbnail">
                        <img style="height: 189px;" src="{{ asset('images/physical_activity.jpg') }}"
                             alt="physical_activity">
                        <div class="caption">
                            <h3>ФИЗИЧЕСКА АКТИВНОСТ</h3>
                            <p></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-3">
                <a href="{{ url('/activities/culture_entertainment') }}">
                    <div class="thumbnail">
                        <img style="height: 189px;" src="{{ asset('images/culture_entertainment.jpg') }}"
                             alt="culture_entertainment">
                        <div class="caption">
                            <h3>КУЛТУРА И ЗАБАВЛЕНИЯ</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-3">
                <a href="{{ url('/activities/social_projects') }}">
                    <div class="thumbnail">
                        <img style="height: 189px;" src="{{ asset('images/social_projects.jpg') }}"
                             alt="social_projects">
                        <div class="caption">
                            <h3>СОЦИАЛНИ ПРОЕКТИ</h3>
                            <p></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-3">
                <a href="{{ url('/activities/business_partnerships') }}">
                    <div class="thumbnail">
                        <img style="height: 189px;" src="{{ asset('images/business_partnerships.jpg') }}"
                             alt="business_partnerships">
                        <div class="caption">
                            <h3>БИЗНЕС ПАРТНЬОРСТВА</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row text-center">
            @foreach($projects as $project)


                <div class="col-lg-3">
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
                                <p>{!! str_limit(strip_tags($project->description),200,'...') !!}</p>

                            </div>
                            <div class="panel-footer">Дата на
                                събитието: {{ \Carbon\Carbon::parse($project->when )->format('d-m-Y') }}</div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

        @if ($projects->hasPages())
            <div class="row text-center">
                {{ $projects->links('pagination.default') }}
            </div>
        @endif
    </div>


@endsection

