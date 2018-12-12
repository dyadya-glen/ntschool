@extends('layout')

@section('title', $title)

@section('top-content')
    <section class="page_topline with_search ls ms section_padding_15 table_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-center text-sm-left">
                    <p class="divided-content greylinks">
                        <span>Pet Salon in Iowa</span>
                        <a href="contact.html">How to Find Us</a>
                        <a href="#">Give Feedback</a>
                    </p>
                </div>
                <div class="col-sm-4 text-center text-sm-right">

                    <div class="widget widget_search">
                        <form method="get" class="searchform form-inline" action="./">
                            <div class="form-group-wrap">
                                <div class="form-group margin_0">
                                    <label class="sr-only" for="topline-search">Search for:</label>
                                    <input id="topline-search" type="text" value="" name="search" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" class="theme_button">Search</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="page_toplogo table_section table_section_md ls section_padding_top_15 section_padding_bottom_15">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center text-md-left">
                    <a href="./" class="logo top_logo">
                        <img src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="col-md-9 text-center text-md-right">

                    <div class="inline-teasers-wrap">
                        <div class="small-teaser text-left">
                            <p class="small-text grey margin_0">
                                Call Us Today:
                            </p>
                            <p class="highlight2 fontsize_20 medium">
                                8 800 269 8469
                            </p>
                        </div>
                        <div class="small-teaser text-left">
                            <p class="small-text grey margin_0">
                                Our Location:
                            </p>
                            <p class="highlight2 fontsize_20 medium">
                                253 Adams Ave, Iowa
                            </p>
                        </div>
                        <div class="small-teaser text-left">
                            <p class="small-text grey margin_0">
                                Open Hours:
                            </p>
                            <p class="highlight2 fontsize_20 medium">
                                Mon - Sat 8am - 6pm
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
@section('content')
    <section class="page_breadcrumbs ds background_cover background_overlay section_padding_top_65 section_padding_bottom_65">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="highlight">Right sidebar</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="./">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li class="active">Right sidebar</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    @yield('video-blog')

    <section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_25">
        <div class="container">
            <div class="row">
                @yield('content-blog')
                @include('blog.blog-sidebar')
                {{--<aside class="col-sm-5 col-md-4 col-lg-4">--}}
                    {{--<div class="widget widget_apsc_widget">--}}
                        {{--<h3 class="widget-title poppins">Categorise</h3>--}}
                        {{--<div class="apsc-icons-wrapper clearfix apsc-theme-4">--}}
                        {{--@forelse($categories as $category)--}}
                            {{--<div class="apsc-each-profile">--}}
                                {{--<a class="apsc-facebook-icon clearfix" href="#">--}}
                                    {{--<div class="apsc-inner-block">--}}
                                        {{--<span class="social-icon">--}}
                                            {{--<span class="media-name">{{ $category->title }}</span>--}}
                                        {{--</span>--}}
                                        {{--<span class="apsc-count">9.8K</span>--}}
                                        {{--<span class="apsc-media-type">Fans</span>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--@empty--}}
                            {{--<p>Ни одной категории еще не создано</p>--}}
                        {{--@endforelse--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</aside>--}}
            </div>
        </div>
    </section>
@endsection
