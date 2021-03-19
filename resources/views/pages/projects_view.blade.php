@extends('layouts.app')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/blog.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/blog_responsive.css') }}">
@endsection

@section('content')
    <!-- Blog -->

    <div class="blog">

            <div class="blog_post blog_post_light">

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="blog_post_container">
                                <div class="blog_post_image text-center">
                                    @foreach($project->images as $image)
                                        <img src="{{ asset($image->url) }}" style="height: 250px;" alt=""/>
                                        @break
                                    @endforeach
                                </div>
                                <div class="blog_post_content text-center">
                                    <div class="blog_post_title">{{ $project->title }}</div>
                                    {{--<div class="blog_post_author">By Coach <a href="#">James Smith</a></div>--}}
                                    <div class="blog_post_date">{{ $project->when }}</div>
                                    <div class="blog_post_text">
                                        <p>{!!  $project->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
@endsection

