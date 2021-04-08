@extends('layouts.app')

@section('title')
    PowerJump - Спорт
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Спорт</h2>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-sm-6 col-md-2">
                <a href="{{ url('/sports/jumping_stilts') }}">
                    <div class="thumbnail tmbnl">
                        <div style='background-image: url("{{ asset('images/jumping_stilts.jpg') }}");
                                height: 150px;
                                background-size: 100%;
                                background-repeat: no-repeat;'>

                        </div>
                        <div class="caption">
                            <h5>Скачане с кокили #Boching</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-2">
                <a href="{{ url('/sports/archery') }}">
                    <div class="thumbnail tmbnl" style="height: 228px;">
                        <div style='background-image: url("{{ asset('images/archery.jpg') }}");
                                height: 150px;
                                background-position: center;
                                background-size: 100%;
                                background-repeat: no-repeat;'>

                        </div>
                        <div class="caption">
                            <h5>Стрелба с лък</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-2">
                <a href="{{ url('/sports/bike') }}">
                    <div class="thumbnail tmbnl" style="height: 228px;">
                        <div style='background-image: url("{{ asset('images/bike.jpg') }}");
                                height: 150px;
                                background-position: center;
                                background-size: 100%;
                                background-repeat: no-repeat;'>

                        </div>
                        <div class="caption">
                            <h5>Байк</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-2">
                <a href="{{ url('/sports/atv') }}">
                    <div class="thumbnail tmbnl" style="height: 228px;">
                        <div style='background-image: url("{{ asset('images/atv.jpg') }}");
                                height: 150px;
                                background-size: 100%;
                                background-repeat: no-repeat;'>

                        </div>
                        <div class="caption">
                            <h5>АТВ</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-2" >
                <a href="{{ url('/activities/safari') }}">
                    <div class="thumbnail tmbnl" style="height: 228px;">
                        <div style='background-image: url("{{ asset('images/safari.jpg') }}");
                                height: 150px;
                                background-position: center;
                                background-size: 100%;
                                background-repeat: no-repeat;'>

                        </div>
                        <div class="caption">
                            <h5>Сафари Джип</h5>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-sm-6 col-md-2" >
                <a href="{{ url('/sports/other') }}">
                    <div class="thumbnail tmbnl" style="height: 228px;">
                        <div style='background-image: url("{{ asset('images/other.jpg') }}");
                                height: 150px;
                                background-position: center;
                                background-size: 100%;
                                background-repeat: no-repeat;'>

                        </div>
                        <div class="caption">
                            <h5>Други</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
@endsection

