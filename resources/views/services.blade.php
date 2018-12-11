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
                    <h2 class="highlight">Services</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="./">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                        </li>
                        <li class="active">Services</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_top_100 section_padding_bottom_100">
        <div class="container">
            <div class="row columns_margin_bottom_20">
                <div class="col-md-4 col-sm-6">
                    <article class="vertical-item content-padding with_shadow text-center rounded overflow-hidden">
                        <div class="item-media">
                            <img src="images/gallery/01.jpg" alt="">
                        </div>
                        <div class="item-content">
                            <h4 class="entry-title hover-color3">
                                <a href="service-single.html">Teeth Brushing</a>
                            </h4>
                            <p>
                                Fatback jerky pig sirloin. Beef landja pork beef ribs kielbasa shoulder tongue pig venison pork chop.
                            </p>
                            <a href="service-single.html" class="read-more"></a>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6">
                    <article class="vertical-item content-padding with_shadow text-center rounded overflow-hidden">
                        <div class="item-media">
                            <img src="images/gallery/12.jpg" alt="">
                        </div>
                        <div class="item-content">
                            <h4 class="entry-title hover-color3">
                                <a href="service-single.html">Blueberry Facials</a>
                            </h4>
                            <p>
                                Fatback jerky pig sirloin. Beef landja pork beef ribs kielbasa shoulder tongue pig venison pork chop.
                            </p>
                            <a href="service-single.html" class="read-more"></a>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 clear-sm">
                    <article class="vertical-item content-padding with_shadow text-center rounded overflow-hidden">
                        <div class="item-media">
                            <img src="images/gallery/06.jpg" alt="">
                        </div>
                        <div class="item-content">
                            <h4 class="entry-title hover-color3">
                                <a href="service-single.html">Combing</a>
                            </h4>
                            <p>
                                Fatback jerky pig sirloin. Beef landja pork beef ribs kielbasa shoulder tongue pig venison pork chop.
                            </p>
                            <a href="service-single.html" class="read-more"></a>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 clear-md clear-lg">
                    <article class="vertical-item content-padding with_shadow text-center rounded overflow-hidden">
                        <div class="item-media">
                            <img src="images/gallery/04.jpg" alt="">
                        </div>
                        <div class="item-content">
                            <h4 class="entry-title hover-color3">
                                <a href="service-single.html">Conditioning</a>
                            </h4>
                            <p>
                                Fatback jerky pig sirloin. Beef landja pork beef ribs kielbasa shoulder tongue pig venison pork chop.
                            </p>
                            <a href="service-single.html" class="read-more"></a>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 clear-sm">
                    <article class="vertical-item content-padding with_shadow text-center rounded overflow-hidden">
                        <div class="item-media">
                            <img src="images/gallery/11.jpg" alt="">
                        </div>
                        <div class="item-content">
                            <h4 class="entry-title hover-color3">
                                <a href="service-single.html">Clipping Fur</a>
                            </h4>
                            <p>
                                Fatback jerky pig sirloin. Beef landja pork beef ribs kielbasa shoulder tongue pig venison pork chop.
                            </p>
                            <a href="service-single.html" class="read-more"></a>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6">
                    <article class="vertical-item content-padding with_shadow text-center rounded overflow-hidden">
                        <div class="item-media">
                            <img src="images/gallery/07.jpg" alt="">
                        </div>
                        <div class="item-content">
                            <h4 class="entry-title hover-color3">
                                <a href="service-single.html">Brushing</a>
                            </h4>
                            <p>
                                Fatback jerky pig sirloin. Beef landja pork beef ribs kielbasa shoulder tongue pig venison pork chop.
                            </p>
                            <a href="service-single.html" class="read-more"></a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection