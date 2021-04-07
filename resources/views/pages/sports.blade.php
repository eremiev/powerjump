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
            <div class="col-sm-6 col-md-3">
                <a href="{{ url('/sports/jumping_stilts') }}">
                    <div class="thumbnail tmbnl">
                        <img style="height: 163px;" src="{{ asset('images/jumping_stilts.jpg') }}" alt="jumping_stilts">
                        <div class="caption">
                            <h3>Скачане с кокили #Boching</h3>
                            <p></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-3">
                <a href="{{ url('/sports/archery') }}">
                    <div class="thumbnail tmbnl">
                        <img style="height: 189px;" src="{{ asset('images/archery.jpg') }}" alt="archery">
                        <div class="caption">
                            <h3>Стрелба с лък</h3>
                            <p></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-3">
                <a href="{{ url('/sports/bike') }}">
                    <div class="thumbnail tmbnl">
                        <img style="height: 189px;" src="{{ asset('images/bike.jpg') }}" alt="bike">
                        <div class="caption">
                            <h3>Байк</h3>
                            <p></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-3">
                <a href="{{ url('/sports/atv') }}">
                    <div class="thumbnail tmbnl">
                        <img style="height: 189px;" src="{{ asset('images/atv.jpg') }}" alt="atv">
                        <div class="caption">
                            <h3>АТВ</h3>
                            <p></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-3">
                <a href="{{ url('/sports/safari') }}">
                    <div class="thumbnail tmbnl">
                        <img style="height: 189px;" src="{{ asset('images/safari.jpg') }}" alt="safari">
                        <div class="caption">
                            <h3>Сафари Джип</h3>
                            <p></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-3">
                <a href="{{ url('/sports/other') }}">
                    <div class="thumbnail tmbnl">
                        <img style="height: 189px;" src="{{ asset('images/other.jpg') }}" alt="other">
                        <div class="caption">
                            <h3>Други</h3>
                            <p></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection

