@extends('layouts.app')

@section('content')

    <section id="contentbody">
        <div class="container">
            <div class="row">
                <div class=" col-sm-12 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="leftbar_content">
                            <h2>Събития</h2>

                        @foreach($events as $event)

                                <div class="single_stuff wow fadeInDown">
                                    <div class="single_stuff_img">
                                        <a href="{{ route('events.show', ['id' => $event->id]) }}" style="height:297px" >
                                            @foreach($event->images as $image)
                                                <img src="{{$image->url}}" alt="">
                                                @break
                                            @endforeach
                                        </a>
                                    </div>
                                    <div class="single_stuff_article">
                                        <div class="single_sarticle_inner"> <a class="stuff_category" href="#">Проект</a>
                                            <div class="stuff_article_inner"> <span class="stuff_date">{{\Carbon\Carbon::parse( $event->when)->format('M')}} <strong>{{\Carbon\Carbon::parse( $event->when)->format('d')}}  <span style="font-size: 11px;">{{\Carbon\Carbon::parse( $event->when)->format('Y')}}</span></strong></span>
                                                <h2><a href="{{ route('events.show', ['id' => $event->id]) }}">{{ $event->title }}</a></h2>
                                                <p>{{str_limit(strip_tags($event->description),500,'...')}}</p>
                                            </div>
                                        </div>

                                        <div class="social_area wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                                            <ul>
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                                <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach



                        </div>

                    </div>
                        {{ $events->links('pagination.default') }}

                </div>
                <div class="col-sm-6 col-md-2 col-lg-2">
                    <div class="row">
                        <div class="middlebar_content">
                            <h2 class="yellow_bg">Актуално</h2>
                            <div class="middlebar_content_inner wow fadeInUp">
                                <ul class="middlebar_nav">
                                    <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Курс Стрелба с лък</a> </li>
                                    <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img2.jpg" alt=""></a> <a class="mbar_title" href="#">АТВ обиколка</a> </li>
                                    <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                                    <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                                </ul>
                            </div>
                            <div class="popular_categori  wow fadeInUp">
                                <h2 class="limeblue_bg">Дейности</h2>
                                <ul class="poplr_catgnva">
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Life &amp; Style</a></li>
                                    <li><a href="#">Games</a></li>
                                    <li><a href="#">Slider</a></li>
                                    <li><a href="#">Sports</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="rightbar_content">
                            <div class="single_blog_sidebar wow fadeInUp">
                                <h2>Последни Фейсбук публикаций</h2>
                                <div class="fb-page" data-href="https://www.facebook.com/PowerJumpClubBulgaria/" data-tabs="timeline" data-width="366" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/PowerJumpClubBulgaria/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/PowerJumpClubBulgaria/">Power Jump</a></blockquote></div>


                            </div>
                            <div class="single_blog_sidebar wow fadeInUp" style="margin-top: 30px;">
                                <h2>Проекти</h2>
                                <ul class="featured_nav">
                                    @foreach($projects as $project)
                                        <li> <a class="featured_img" href="{{ route('projects.show', ['id' => $project->id]) }}">
                                                @foreach($project->images as $image)
                                                    <img src="{{$image->url}}" alt="">
                                                    @break
                                                @endforeach
                                            </a>
                                            <div class="featured_title text-center"> <a class="" href="{{ route('projects.show', ['id' => $project->id]) }}">{{ $project->title }}</a> </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

