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
                <aside class="col-sm-5 col-md-4 col-lg-4">

                    <div class="widget widget_apsc_widget">
                        <h3 class="widget-title poppins">Categorise</h3>
                        <div class="apsc-icons-wrapper clearfix apsc-theme-4">
                        @forelse($categories as $category)


                            <div class="apsc-each-profile">
                                <a class="apsc-facebook-icon clearfix" href="#">
                                    <div class="apsc-inner-block">
                                        <span class="social-icon">
                                            <span class="media-name">{{ $category->title }}</span>
                                        </span>
                                        {{--<span class="apsc-count">9.8K</span>--}}
                                        {{--<span class="apsc-media-type">Fans</span>--}}
                                    </div>
                                </a>
                            </div>

                        @empty
                            <p>Ни одной категории еще не создано</p>
                        @endforelse
                        </div>
                    </div>

                        {{--<div class="widget widget_apsc_widget">--}}
                            {{--<h3 class="widget-title poppins">Get In Touch</h3>--}}
                            {{--<div class="apsc-icons-wrapper clearfix apsc-theme-4">--}}
                                {{--<div class="apsc-each-profile">--}}
                                    {{--<a class="apsc-facebook-icon clearfix" href="#">--}}
                                        {{--<div class="apsc-inner-block">--}}
                                            {{--<span class="social-icon">--}}
                                                {{--<i class="fa fa-facebook apsc-facebook"></i>--}}
                                                {{--<span class="media-name">Facebook</span>--}}
                                    {{--</span>--}}
                                            {{--<span class="apsc-count">9.8K</span>--}}
                                            {{--<span class="apsc-media-type">Fans</span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="apsc-each-profile">--}}
                                    {{--<a class="apsc-twitter-icon clearfix" href="#">--}}
                                        {{--<div class="apsc-inner-block">--}}
                                            {{--<span class="social-icon">--}}
                                                {{--<i class="fa fa-twitter apsc-twitter"></i>--}}
                                                {{--<span class="media-name">Twitter</span>--}}
                                    {{--</span>--}}
                                            {{--<span class="apsc-count">4.9K</span>--}}
                                            {{--<span class="apsc-media-type">Followers</span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="apsc-each-profile">--}}
                                    {{--<a class="apsc-google-plus-icon clearfix" href="#">--}}
                                        {{--<div class="apsc-inner-block">--}}
                                            {{--<span class="social-icon">--}}
                                                {{--<i class="apsc-googlePlus fa fa-google-plus"></i>--}}
                                                {{--<span class="media-name">google+</span>--}}
                                    {{--</span>--}}
                                            {{--<span class="apsc-count">10.1M</span>--}}
                                            {{--<span class="apsc-media-type">Followers</span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="apsc-each-profile">--}}
                                    {{--<a class="apsc-instagram-icon clearfix" href="#">--}}
                                        {{--<div class="apsc-inner-block">--}}
                                            {{--<span class="social-icon">--}}
                                                {{--<i class="apsc-instagram fa fa-instagram"></i>--}}
                                                {{--<span class="media-name">Instagram</span>--}}
                                    {{--</span>--}}
                                            {{--<span class="apsc-count">4</span>--}}
                                            {{--<span class="apsc-media-type">Followers</span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="apsc-each-profile">--}}
                                    {{--<a class="apsc-youtube-icon clearfix" href="#">--}}
                                        {{--<div class="apsc-inner-block">--}}
                                            {{--<span class="social-icon">--}}
                                                {{--<i class="apsc-youtube fa fa-youtube"></i>--}}
                                                {{--<span class="media-name">Youtube</span>--}}
                                    {{--</span>--}}
                                            {{--<span class="apsc-count">2.2K</span>--}}
                                            {{--<span class="apsc-media-type">Subscriber</span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="apsc-each-profile">--}}
                                    {{--<a class="apsc-soundcloud-icon clearfix" href="#">--}}
                                        {{--<div class="apsc-inner-block">--}}
                                            {{--<span class="social-icon">--}}
                                                {{--<i class="apsc-soundcloud fa fa-soundcloud"></i>--}}
                                                {{--<span class="media-name">Soundcloud</span>--}}
                                    {{--</span>--}}
                                            {{--<span class="apsc-count">8K</span>--}}
                                            {{--<span class="apsc-media-type">Followers</span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="apsc-each-profile">--}}
                                    {{--<a class="apsc-dribble-icon clearfix" href="#">--}}
                                        {{--<div class="apsc-inner-block">--}}
                                            {{--<span class="social-icon">--}}
                                                {{--<i class="apsc-dribbble fa fa-dribbble"></i>--}}
                                                {{--<span class="media-name">dribble</span>--}}
                                    {{--</span>--}}
                                            {{--<span class="apsc-count">0</span>--}}
                                            {{--<span class="apsc-media-type">Followers</span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="apsc-each-profile">--}}
                                    {{--<a class="apsc-edit-icon clearfix" href="#">--}}
                                        {{--<div class="apsc-inner-block">--}}
                                            {{--<span class="social-icon">--}}
                                                {{--<i class="apsc-posts fa fa-edit"></i>--}}
                                                {{--<span class="media-name">Post</span>--}}
                                    {{--</span>--}}
                                            {{--<span class="apsc-count">1</span>--}}
                                            {{--<span class="apsc-media-type">Post</span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="apsc-each-profile">--}}
                                    {{--<a class="apsc-comment-icon clearfix" href="#">--}}
                                        {{--<div class="apsc-inner-block">--}}
                                            {{--<span class="social-icon">--}}
                                                {{--<i class="apsc-comments fa fa-comments"></i>--}}
                                                {{--<span class="media-name">Comment</span>--}}
                                    {{--</span>--}}
                                            {{--<span class="apsc-count">0</span>--}}
                                            {{--<span class="apsc-media-type">Comments</span>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                        {{--<div class="widget widget_mailchimp">--}}

                            {{--<h3 class="widget-title poppins">Newsletter</h3>--}}

                            {{--<form class="signup" action="" method="get">--}}
                                {{--<div class="form-group">--}}
                                    {{--<input name="email" type="email" class="mailchimp_email form-control" placeholder="Email Address">--}}
                                {{--</div>--}}
                                {{--<button type="submit" class="theme_button">Send</button>--}}
                                {{--<div class="response"></div>--}}
                                {{--<p>--}}
                                    {{--Subscribe to our Newsletter right now to be updated. We promice not to spam!--}}
                                {{--</p>--}}

                            {{--</form>--}}

                        {{--</div>--}}

                        {{--<div class="widget widget_flickr">--}}

                            {{--<h3 class="widget-title poppins">Flickr Widget</h3>--}}
                            {{--<ul id="flickr"></ul>--}}
                        {{--</div>--}}

                        {{--<div class="widget widget_recent_posts">--}}

                            {{--<h3 class="widget-title poppins">Recent Posts</h3>--}}
                            {{--<ul class="media-list">--}}
                                {{--<li class="media">--}}
                                    {{--<div class="media-left media-middle">--}}
                                        {{--<img src="images/recent_post1.jpg" alt="" />--}}
                                    {{--</div>--}}
                                    {{--<div class="media-body media-middle">--}}
                                        {{--<h4>--}}
                                            {{--<a href="blog-single-left.html">--}}
                                                {{--Tail cupim officia short loin frankfurter alcatra--}}
                                            {{--</a>--}}
                                        {{--</h4>--}}
                                        {{--<span class="entry-date highlight3 small-text">--}}
                                            {{--<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">--}}
                                                {{--March 12, 2017--}}
                                    {{--</time>--}}
                                {{--</span>--}}
                                    {{--</div>--}}
                                {{--</li>--}}

                                {{--<li class="media">--}}
                                    {{--<div class="media-left media-middle">--}}
                                        {{--<img src="images/recent_post2.jpg" alt="" />--}}
                                    {{--</div>--}}
                                    {{--<div class="media-body media-middle">--}}
                                        {{--<h4>--}}
                                            {{--<a href="blog-single-left.html">--}}
                                                {{--Biltong venison beef swine. Corned beef pork ham--}}
                                            {{--</a>--}}
                                        {{--</h4>--}}
                                        {{--<span class="entry-date highlight3 small-text">--}}
                                            {{--<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">--}}
                                                {{--March 13, 2017--}}
                                    {{--</time>--}}
                                {{--</span>--}}
                                    {{--</div>--}}
                                {{--</li>--}}

                                {{--<li class="media">--}}
                                    {{--<div class="media-left media-middle">--}}
                                        {{--<img src="images/recent_post3.jpg" alt="" />--}}
                                    {{--</div>--}}
                                    {{--<div class="media-body media-middle">--}}
                                        {{--<h4>--}}
                                            {{--<a href="blog-single-left.html">--}}
                                                {{--Prosciutto hamburger filet mignon--}}
                                            {{--</a>--}}
                                        {{--</h4>--}}
                                        {{--<span class="entry-date highlight3 small-text">--}}
                                            {{--<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">--}}
                                                {{--March 14, 2017--}}
                                    {{--</time>--}}
                                {{--</span>--}}
                                    {{--</div>--}}
                                {{--</li>--}}


                            {{--</ul>--}}
                        {{--</div>--}}

                        {{--<div class="widget widget_search">--}}
                            {{--<h3 class="widget-title poppins">Search on Website</h3>--}}
                            {{--<form method="get" class="searchform" action="">--}}
                            {{--<!-- <div class="form-group-wrap"> -->--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="sr-only" for="widget-search">Search for:</label>--}}
                                    {{--<input id="widget-search" type="text" value="" name="search" class="form-control" placeholder="Search Keyword">--}}
                                {{--</div>--}}
                                {{--<button type="submit" class="theme_button color1">Search</button>--}}
                            {{--<!-- </div> -->--}}
                            {{--</form>--}}
                        {{--</div>--}}


                    </aside>
            </div>
        </div>
    </section>
@endsection
