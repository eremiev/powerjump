@extends('layouts.app')

@section('title')
PowerJump @if (!empty($selectedCategory)) - {{ $selectedCategory }} @else - Дейности@endif
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Дейности @if (!empty($selectedCategory)) > {{ $selectedCategory }}@endif</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-6 col-md-1"></div>
            <div class="col-sm-6 col-md-2">
                <a href="{{ url('/activities/physical_activity') }}">
                    <div class="thumbnail tmbnl">
                        <div style='background-image: url("{{ asset('images/physical_activity.jpg') }}");
                                height: 88px;
                                background-size: 100%;
                                background-repeat: no-repeat;'>

                        </div>
                        <div class="caption">
                            <h5>ФИЗИЧЕСКА АКТИВНОСТ</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-2">
                <a href="{{ url('/activities/culture_entertainment') }}">
                    <div class="thumbnail tmbnl">
                        <div style='background-image: url("{{ asset('images/culture_entertainment.jpg') }}");
                                height: 88px;
                                background-position: center;
                                background-size: 100%;
                                background-repeat: no-repeat;'>

                        </div>
                        <div class="caption">
                            <h5>КУЛТУРА И ЗАБАВЛЕНИЯ</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-2">
                <a href="{{ url('/activities/social_projects') }}">
                    <div class="thumbnail tmbnl">
                        <div style='background-image: url("{{ asset('images/social_projects.jpg') }}");
                                height: 88px;
                                background-position: center;
                                background-size: 100%;
                                background-repeat: no-repeat;'>

                        </div>
                        <div class="caption">
                            <h5>СОЦИАЛНИ ПРОЕКТИ</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-2">
                <a href="{{ url('/activities/business_partnerships') }}">
                    <div class="thumbnail tmbnl">
                        <div style='background-image: url("{{ asset('images/business_partnerships.jpg') }}");
                                height: 88px;
                                background-size: 100%;
                                background-repeat: no-repeat;'>

                        </div>
                        <div class="caption">
                            <h5>БИЗНЕС ПАРТНЬОРСТВА</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-2" >
                <a href="{{ url('/activities/volunteering') }}">
                    <div class="thumbnail tmbnl" style="height: 166px;">
                        <div style='background-image: url("{{ asset('images/volunteering.jpg') }}");
                                height: 88px;
                                background-position: center;
                                background-size: 100%;
                                background-repeat: no-repeat;'>

                        </div>
                        <div class="caption">
                            <h5>ДОБРОВОЛЧЕСТВО</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <hr/>

        <div class="row text-center">
            @foreach($projects as $project)


                <div class="col-lg-3">
                    <div class="bs-component">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="height: 70px;">
                                <h3 class="panel-title">{{ str_limit(strip_tags($project->title),65,'...') }}</h3>
                                <span class="badge">@if(!empty($project->category)){{ $categories[$project->category] }}@endif</span>
                            </div>
                            <div class="panel-body">
                                @foreach($project->images as $image)

                                    <div style='background-image: url("{{ url('/') }}/{{$image->url}}");height: 183px;
                                            background-position: center;
                                            background-size: 100%;
                                            background-repeat: no-repeat;'>
                                    </div>
                                    @break
                                @endforeach
                                <p style="font-size: 13px; text-align: justify;">{!! str_limit(strip_tags($project->description),190,'...') !!}</p>

                            </div>
                            <div class="panel-footer">Дата: {{ \Carbon\Carbon::parse($project->when )->format('d-m-Y') }}</div>
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

