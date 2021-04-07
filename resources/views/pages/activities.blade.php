@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Дейности</h2>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-sm-6 col-md-3">
                <a href="{{ url('/activities/physical_activity') }}">
                    <div class="thumbnail tmbnl">
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
                    <div class="thumbnail tmbnl">
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
                    <div class="thumbnail tmbnl">
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
                    <div class="thumbnail tmbnl">
                        <img style="height: 189px;" src="{{ asset('images/business_partnerships.jpg') }}"
                             alt="business_partnerships">
                        <div class="caption">
                            <h3>БИЗНЕС ПАРТНЬОРСТВА</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection

