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
                    <h2 class="highlight">Team type 1</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="./">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">Team</a>
                        </li>
                        <li class="active">Team type 1</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="ls page_portfolio section_padding_top_150 section_padding_bottom_130">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20">

                        <div class="isotope-item col-lg-4 col-md-6 col-sm-12">
                            <div class="vertical-item content-padding with_shadow text-center rounded overflow-hidden">
                                <div class="item-media">
                                    <img src="images/team/01.jpg" alt="" />
                                </div>
                                <div class="item-content">
                                    <p class="small-text highlight3 bottommargin_0">director</p>
                                    <h4 class="topmargin_0 hover-color3">
                                        <a href="team-single.html">Theresa Green</a>
                                    </h4>
                                    <p>
                                        Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.
                                    </p>
                                    <p class="color2links">
                                        <a href="#" class="social-icon soc-facebook"></a>
                                        <a href="#" class="social-icon soc-twitter"></a>
                                        <a href="#" class="social-icon soc-google"></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="isotope-item col-lg-4 col-md-6 col-sm-12">
                            <div class="vertical-item content-padding with_shadow text-center rounded overflow-hidden">
                                <div class="item-media">
                                    <img src="images/team/02.jpg" alt="" />
                                </div>
                                <div class="item-content">
                                    <p class="small-text highlight3 bottommargin_0">cat groomer</p>
                                    <h4 class="topmargin_0 hover-color3">
                                        <a href="team-single.html">Rosie White</a>
                                    </h4>
                                    <p>
                                        Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.
                                    </p>
                                    <p class="color2links">
                                        <a href="#" class="social-icon soc-facebook"></a>
                                        <a href="#" class="social-icon soc-twitter"></a>
                                        <a href="#" class="social-icon soc-google"></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="isotope-item col-lg-4 col-md-6 col-sm-12">
                            <div class="vertical-item content-padding with_shadow text-center rounded overflow-hidden">
                                <div class="item-media">
                                    <img src="images/team/03.jpg" alt="" />
                                </div>
                                <div class="item-content">
                                    <p class="small-text highlight3 bottommargin_0">dog groomer</p>
                                    <h4 class="topmargin_0 hover-color3">
                                        <a href="team-single.html">Estelle Marsh</a>
                                    </h4>
                                    <p>
                                        Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.
                                    </p>
                                    <p class="color2links">
                                        <a href="#" class="social-icon soc-facebook"></a>
                                        <a href="#" class="social-icon soc-twitter"></a>
                                        <a href="#" class="social-icon soc-google"></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="isotope-item col-lg-4 col-md-6 col-sm-12">
                            <div class="vertical-item content-padding with_shadow text-center rounded overflow-hidden">
                                <div class="item-media">
                                    <img src="images/team/04.jpg" alt="" />
                                </div>
                                <div class="item-content">
                                    <p class="small-text highlight3 bottommargin_0">rabbit groomer</p>
                                    <h4 class="topmargin_0 hover-color3">
                                        <a href="team-single.html">Alberta Rogers</a>
                                    </h4>
                                    <p>
                                        Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.
                                    </p>
                                    <p class="color2links">
                                        <a href="#" class="social-icon soc-facebook"></a>
                                        <a href="#" class="social-icon soc-twitter"></a>
                                        <a href="#" class="social-icon soc-google"></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="isotope-item col-lg-4 col-md-6 col-sm-12">
                            <div class="vertical-item content-padding with_shadow text-center rounded overflow-hidden">
                                <div class="item-media">
                                    <img src="images/team/05.jpg" alt="" />
                                </div>
                                <div class="item-content">
                                    <p class="small-text highlight3 bottommargin_0">cat groomer</p>
                                    <h4 class="topmargin_0 hover-color3">
                                        <a href="team-single.html">Bernard Lambert</a>
                                    </h4>
                                    <p>
                                        Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.
                                    </p>
                                    <p class="color2links">
                                        <a href="#" class="social-icon soc-facebook"></a>
                                        <a href="#" class="social-icon soc-twitter"></a>
                                        <a href="#" class="social-icon soc-google"></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="isotope-item col-lg-4 col-md-6 col-sm-12">
                            <div class="vertical-item content-padding with_shadow text-center rounded overflow-hidden">
                                <div class="item-media">
                                    <img src="images/team/06.jpg" alt="" />
                                </div>
                                <div class="item-content">
                                    <p class="small-text highlight3 bottommargin_0">rabbit groomer</p>
                                    <h4 class="topmargin_0 hover-color3">
                                        <a href="team-single.html">Frank Stephens</a>
                                    </h4>
                                    <p>
                                        Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.
                                    </p>
                                    <p class="color2links">
                                        <a href="#" class="social-icon soc-facebook"></a>
                                        <a href="#" class="social-icon soc-twitter"></a>
                                        <a href="#" class="social-icon soc-google"></a>
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- eof .isotope_container.row -->

                </div>
            </div>
        </div>
    </section>
@endsection