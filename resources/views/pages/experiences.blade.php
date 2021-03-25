@extends('layouts.app')

@section('style')
    {{--<link rel="stylesheet" type="text/css" href="styles/blog.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">--}}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Опит</h2>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-lg-6">
                <a href="{{ url('/experiences/physical_activity') }}">
                    <div class="bs-component">
                        <div class="panel panel-default">
                            <div class="panel-heading">ФИЗИЧЕСКА АКТИВНОСТ</div>
                            <div class="panel-body">
                                <p>Всички проекти свързани с физическа активност инициативи и тн.</p>
                                <img height="230px"
                                     src="https://trello-attachments.s3.amazonaws.com/546c6b04ac1c59520d2ef2db/603dfbe024c349276383c669/d054c0652412b28ca376a58ad3154eef/5231c605276e6744413439.jpg"
                                     alt="">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6">
                <a href="{{ url('/experiences/culture_entertainment') }}">
                    <div class="bs-component">
                        <div class="panel panel-default">
                            <div class="panel-heading">КУЛТУРА И ЗАБАВЛЕНИЯ</div>
                            <div class="panel-body">
                                <p>Културни и забавления</p>
                                <img height="230px"
                                     src="https://trello-attachments.s3.amazonaws.com/546c6b04ac1c59520d2ef2db/603dfbe024c349276383c669/41d056e20dea9bce2f445734cb5f6bdf/20170603_130337.jpg"
                                     alt="">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6">
                <a href="{{ url('/experiences/social_projects') }}">
                    <div class="bs-component">
                        <div class="panel panel-default">
                            <div class="panel-heading">СОЦИАЛНИ ПРОЕКТИ</div>
                            <div class="panel-body">
                                <p>СОЦИАЛНИ ПРОЕКТИ</p>
                                <img height="230px"
                                     src="https://trello-attachments.s3.amazonaws.com/546c6b04ac1c59520d2ef2db/603dfbe024c349276383c669/af9cc978f4812864756c9dfba8af56ac/20160728_155534.jpg"
                                     alt="">

                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6">
                <a href="{{ url('/experiences/business_partnerships') }}">
                    <div class="bs-component">
                        <div class="panel panel-default">
                            <div class="panel-heading">БИЗНЕС ПАРТНЬОРСТВА</div>
                            <div class="panel-body">
                                <p>БИЗНЕС ПАРТНЬОРСТВА</p>
                                <img height="230px"
                                     src="https://trello-attachments.s3.amazonaws.com/546c6b04ac1c59520d2ef2db/603dfbe024c349276383c669/1fd25b59a41585e65672ce35e29569a1/20160625_121140.jpg"
                                     alt="">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection

