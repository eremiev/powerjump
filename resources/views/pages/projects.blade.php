@extends('layouts.app')

@section('style')
    <link rel="stylesheet" type="text/css" href="styles/blog.css">
    <link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
@endsection

@section('content')
    <!-- Home -->

    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{url('images/projects2.jpg')}}"
             data-speed="0.8"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content text-left">
                            <div class="home_title">Проекти</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog -->

    <div class="blog">

    @foreach($projects as $project)
        <!-- Blog Post -->

            <div class="{{($loop->iteration  % 2 == 0) ? 'blog_post blog_post_dark' : 'blog_post blog_post_light' }}">

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="blog_post_container">
                                <div class="blog_post_image">
                                    @foreach($project->images as $image)
                                        <img src="{{$image->url}}" alt=""/>
                                        @break
                                    @endforeach
                                </div>
                                <div class="blog_post_content text-center">
                                    <div class="blog_post_title"><a href="#">{{ $project->title }}</a></div>
                                    {{--<div class="blog_post_author">By Coach <a href="#">James Smith</a></div>--}}
                                    <div class="blog_post_date"><a href="#">{{ $project->when }}</a></div>
                                    <div class="blog_post_text">
                                        <p>{{str_limit(strip_tags($project->description),500,'...')}}</p>
                                    </div>
                                    <div class="button blog_post_button"><a href="#">Прочети повече</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach

        {{ $projects->links('pagination.default') }}

    </div>
@endsection

