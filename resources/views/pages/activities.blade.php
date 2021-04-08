@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Дейности</h2>
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

            <div class="col-sm-6 col-md-2">
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
    </div>
@endsection

