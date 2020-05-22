@extends('layouts.app')

@section('style')
    <link rel="stylesheet" type="text/css" href="styles/classes.css">
    <link rel="stylesheet" type="text/css" href="styles/classes_responsive.css">
@endsection

@section('content')
    <!-- Trainers -->

    <div class="trainers mt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-left">
                        <div class="home_title" style="color: black">Партньори</div>
                    </div>
                </div>
            </div>
            <div class="row trainers_row">

                <!-- Trainer -->
                <div class="col-lg-4 trainer_col">
                    <div class="trainer">
                        <a href="https://wildart.bg/" target="_blank">
                            <div class="trainer_image"><img src="{{url('images/wildart.png')}}" alt=""></div>
                            <div class="trainer_content text-center">
                                <div class="trainer_name">Wild Art</div>
                            </div>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection

