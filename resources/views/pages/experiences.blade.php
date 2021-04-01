@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Опит</h2>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-sm-6 col-md-6">
                <a href="{{ url('/experiences/physical_activity') }}">
                    <div class="thumbnail">
                        <img style="height: 360px;" src="{{ asset('images/physical_activity.jpg') }}"
                             alt="physical_activity">
                        <div class="caption">
                            <h3>ФИЗИЧЕСКА АКТИВНОСТ</h3>
                            <p></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-6">
                <a href="{{ url('/experiences/culture_entertainment') }}">
                    <div class="thumbnail">
                        <img style="height: 360px;" src="{{ asset('images/culture_entertainment.jpg') }}"
                             alt="culture_entertainment">
                        <div class="caption">
                            <h3>КУЛТУРА И ЗАБАВЛЕНИЯ</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-6">
                <a href="{{ url('/experiences/social_projects') }}">
                    <div class="thumbnail">
                        <img style="height: 360px;" src="{{ asset('images/social_projects.jpg') }}"
                             alt="social_projects">
                        <div class="caption">
                            <h3>СОЦИАЛНИ ПРОЕКТИ</h3>
                            <p></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-6">
                <a href="{{ url('/experiences/business_partnerships') }}">
                    <div class="thumbnail">
                        <img style="height: 360px;" src="{{ asset('images/business_partnerships.jpg') }}"
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

