@extends('layouts.app')

@section('style')
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/blog.css">
    <link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
@endsection

@section('content')


    <!-- Plans -->

    <div class="plans mt-5">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/plans.jpg" data-speed="0.8"></div>
        <div class="plans_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-left">
                        <div class="home_title">Продукти</div>
                    </div>
                </div>
            </div>
            <div class="row plans_row">

                <!-- Plan -->
                <div class="col-lg-4">
                    <div class="plan d-flex flex-column align-items-center justify-content-start">
                        <div class="plan_price">$0</div>
                        <div class="plan_name"><h3>Free Crossfit Trial</h3></div>
                        <div class="plan_list">
                            <ul class="text-center">
                                <li>1 Day Free Trial</li>
                                <li>1 Sauna Access</li>
                                <li>No Risks & No Obligations</li>
                            </ul>
                        </div>
                        <div class="button plan_button"><a href="#">Get it now</a></div>
                    </div>
                </div>

                <!-- Plan -->
                <div class="col-lg-4">
                    <div class="plan plan_center d-flex flex-column align-items-center justify-content-start">
                        <div class="plan_price">$30</div>
                        <div class="plan_name"><h3>Free Crossfit Trial</h3></div>
                        <div class="plan_list">
                            <ul class="text-center">
                                <li>Basic Sub</li>
                                <li>Sauna Access</li>
                                <li>Unlimited access before 10AM</li>
                            </ul>
                        </div>
                        <div class="button plan_button"><a href="#">Get it now</a></div>
                    </div>
                </div>

                <!-- Plan -->
                <div class="col-lg-4">
                    <div class="plan d-flex flex-column align-items-center justify-content-start">
                        <div class="plan_price">$55</div>
                        <div class="plan_name"><h3>Unlimited Sub</h3></div>
                        <div class="plan_list">
                            <ul class="text-center">
                                <li>Unlimited Access</li>
                                <li>Unlimited Sauna Access</li>
                                <li>Assisted Training</li>
                            </ul>
                        </div>
                        <div class="button plan_button"><a href="#">Get it now</a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

