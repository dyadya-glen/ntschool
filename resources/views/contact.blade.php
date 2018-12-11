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
                    <h2 class="highlight">Contacts</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="./">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                        </li>
                        <li class="active">Contacts</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_100 background_cover page_contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
                    <div class="ds with_background transp_black_bg with_padding">

                        <form class="contact-form row columns_padding_10" method="post" action="./">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Full Name
                                        <span class="required">*</span>
                                    </label>
                                    <i class="fa fa-user highlight3" aria-hidden="true"></i>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number
                                        <span class="required">*</span>
                                    </label>
                                    <i class="fa fa-phone highlight3" aria-hidden="true"></i>
                                    <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email address
                                        <span class="required">*</span>
                                    </label>
                                    <i class="fa fa-envelope highlight3" aria-hidden="true"></i>
                                    <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="subject">Subject
                                        <span class="required">*</span>
                                    </label>
                                    <i class="fa fa-flag highlight3" aria-hidden="true"></i>
                                    <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <i class="fa fa-comment highlight3" aria-hidden="true"></i>
                                    <textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-12 bottommargin_0">

                                <div class="contact-form-submit topmargin_10">
                                    <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color3 wide_button margin_0">Send Now</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cs main_color3 section_padding_top_40 section_padding_bottom_40">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="media small-teaser teaser inline-block">
                        <div class="media-left media-middle">
                            <div class="teaser_icon light_bg_color big_bg highlight3 round size_xsmall">
                                <i class="fa fa-phone"></i>
                            </div>
                        </div>
                        <div class="media-body media-middle">
                            <span class="small-text">Call us today:</span>
                            <br>
                            <span class="fontsize_20 medium black">8 800 269 8469</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="media small-teaser teaser inline-block">
                        <div class="media-left media-middle">
                            <div class="teaser_icon light_bg_color big_bg highlight3 round size_xsmall">
                                <i class="fa fa-map-marker"></i>
                            </div>
                        </div>
                        <div class="media-body media-middle">
                            <span class="small-text">Our Location:</span>
                            <br>
                            <span class="fontsize_20 medium black">253 Adams Ave, Iowa</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
                    <div class="media small-teaser teaser inline-block">
                        <div class="media-left media-middle">
                            <div class="teaser_icon light_bg_color big_bg highlight3 round size_xsmall">
                                <i class="fa fa-clock-o"></i>
                            </div>
                        </div>
                        <div class="media-body media-middle">
                            <span class="small-text">Open Hours:</span>
                            <br>
                            <span class="fontsize_20 medium black">Mon - Sat 8am - 6pm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection