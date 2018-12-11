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
                    <h2 class="highlight">FAQ</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="./">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                        </li>
                        <li class="active">FAQ</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_100">
        <div class="container">

            <div class="row">
                <div class="col-sm-6">

                    <div class="panel-group" id="accordion1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
                                        <i class="fa fa-comment"></i>
                                        Lorem Ipsum
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea dicta neque, ut quis omnis quos nam, pariatur, minus, fugit suscipit aspernatur sint ullam quas explicabo. Alias, officiis, dolor!
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#collapse2" class="collapsed">
                                        <i class="fa fa-comment"></i>
                                        Dolor Sit Amet
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facere doloremque ut dolores laudantium nihil at, repudiandae est numquam fuga tempora totam sequi quidem saepe officiis sint beatae, magni fugit.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#collapse3" class="collapsed">
                                        <i class="fa fa-comment"></i>
                                        Corporis Iste
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nobis omnis delectus, asperiores quo obcaecati et iste corporis necessitatibus tempora aspernatur doloribus. Ut deleniti commodi dicta distinctio sit enim quidem!
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#collapse4" class="collapsed">
                                        <i class="fa fa-comment"></i>
                                        Adipisicing Elit
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nobis omnis delectus, asperiores quo obcaecati et iste corporis necessitatibus tempora aspernatur doloribus. Ut deleniti commodi dicta distinctio sit enim quidem!
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="panel-group" id="accordion2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse21" class="collapsed">
                                        <i class="fa fa-comment"></i>
                                        Lorem Ipsum
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse21" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea dicta neque, ut quis omnis quos nam, pariatur, minus, fugit suscipit aspernatur sint ullam quas explicabo. Alias, officiis, dolor!
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse22" class="collapsed">
                                        <i class="fa fa-comment"></i>
                                        Dolor Sit Amet
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse22" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facere doloremque ut dolores laudantium nihil at, repudiandae est numquam fuga tempora totam sequi quidem saepe officiis sint beatae, magni fugit.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse23" class="collapsed">
                                        <i class="fa fa-comment"></i>
                                        Corporis Iste
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse23" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nobis omnis delectus, asperiores quo obcaecati et iste corporis necessitatibus tempora aspernatur doloribus. Ut deleniti commodi dicta distinctio sit enim quidem!
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse24" class="collapsed">
                                        <i class="fa fa-comment"></i>
                                        Adipisicing Elit
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse24" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nobis omnis delectus, asperiores quo obcaecati et iste corporis necessitatibus tempora aspernatur doloribus. Ut deleniti commodi dicta distinctio sit enim quidem!
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection