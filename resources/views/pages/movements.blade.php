@extends('layouts.app')

@section('title')
    PowerJump - Движения
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Движения</h2>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img style="height: 360px;" src="{{ asset('images/jumping_stilts.jpg') }}" alt="jumping_stilts">
                    <div class="caption">
                        <a href="{{ url('/movements/jumping_stilts') }}"><h3>Скачане с кокили #Boching</h3></a>
                        <p></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img style="height: 360px;" src="{{ asset('images/archery.jpg') }}" alt="archery">
                    <div class="caption">
                        <a href="{{ url('/movements/archery') }}"><h3>Стрелба с лък</h3></a>
                        <p></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img style="height: 360px;" src="{{ asset('images/bike.jpg') }}" alt="bike">
                    <div class="caption">
                        <a href="{{ url('/movements/bike') }}"><h3>Байк</h3></a>
                        <p></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img style="height: 360px;" src="{{ asset('images/atv.jpg') }}" alt="atv">
                    <div class="caption">
                        <a href="{{ url('/movements/atv') }}"><h3>АТВ</h3></a>
                        <p></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img style="height: 360px;" src="{{ asset('images/safari.jpg') }}" alt="safari">
                    <div class="caption">
                        <a href="{{ url('/movements/safari') }}"><h3>Сафари Джип</h3></a>
                        <p></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img style="height: 360px;" src="{{ asset('images/other.jpg') }}" alt="other">
                    <div class="caption">
                        <a href="{{ url('/movements/other') }}"><h3>Други</h3></a>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

