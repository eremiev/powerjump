@extends('layouts.app')

@section('content')

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
                                        <div class="single_sarticle_inner">
                                            <div class="stuff_article_inner"> <span class="stuff_date"><strong>{{\Carbon\Carbon::parse( $event->when)->format('d')}} {{\Carbon\Carbon::parse( $event->when)->format('M')}} <span>{{\Carbon\Carbon::parse( $event->when)->format('Y')}}</span></strong></span>
                                                <h2><a href="{{ route('events.show', ['id' => $event->id]) }}">{{ $event->title }}</a></h2>
                                                <p>{!! str_limit(strip_tags($event->description),270,'...') !!}</p>
                                            </div>
                                        </div>

                                        <div class="social_area wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                                            <ul>
                                                <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ route('events.show', ['id' => $event->id]) }}&amp;src=sdkpreparse"><span class="fa fa-facebook"></span></a></li>
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

                    @if ($events->hasPages())
                        {{ $events->links('pagination.default') }}
                    @endif
                </div>

                <div class="col-sm-6 col-md-2 col-lg-2">

                        <div class="row">
                            <div class="middlebar_content">
                                <h2 class="yellow_bg">Актуално</h2>
                                <div class="middlebar_content_inner wow fadeInUp">
                                    <ul class="middlebar_nav">
                                        {{--<li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Курс Стрелба с лък</a> </li>--}}
                                        {{--<li> <a class="mbar_thubnail" href="#"><img src="images/hot_img2.jpg" alt=""></a> <a class="mbar_title" href="#">АТВ обиколка</a> </li>--}}
                                        {{--<li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>--}}
                                        {{--<li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>--}}
                                    </ul>
                                </div>
                                <div class="popular_categori  wow fadeInUp">
                                    <h2 class="limeblue_bg">Спорт</h2>
                                    <ul class="poplr_catgnva">
                                        <li><a href="{{ url('/sports/jumping_stilts') }}">Скачане с кокили #Boching</a></li>
                                        <li><a href="{{ url('/sports/archery') }}">Стрелба с лък</a></li>
                                        <li><a href="{{ url('/sports/bike') }}">Байк</a></li>
                                        <li><a href="{{ url('/sports/atv') }}">АТВ</a></li>
                                        <li><a href="{{ url('/sports/safari') }}">Сафари Джип</a></li>
                                        <li><a href="{{ url('/sports/other') }}">Други</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="rightbar_content">
                                <div class="">
                                    <div class="single_blog_sidebar wow fadeInUp">
                                        <div class="fb-page" data-href="https://www.facebook.com/PowerJumpClubBulgaria/" data-tabs="timeline" data-width="366" data-height="1000px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/PowerJumpClubBulgaria/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/PowerJumpClubBulgaria/">Power Jump</a></blockquote></div>
                                    </div>
                                    <div class="single_blog_sidebar wow fadeInUp" style="margin-top: 30px;">
                                        <h2>Дейности</h2>
                                        <ul class="featured_nav">
                                            @foreach($projects as $project)
                                                <li> <a class="featured_img" href="{{ route('activity.show', ['id' => $project->id]) }}">
                                                        @foreach($project->images as $image)
                                                            <img src="{{$image->url}}" alt="">
                                                            @break
                                                        @endforeach
                                                    </a>
                                                    <div class="featured_title text-center"> <a class="" href="{{ route('activity.show', ['id' => $project->id]) }}">{{ $project->title }}</a> </div>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection


