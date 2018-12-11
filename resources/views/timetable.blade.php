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
                    <h2 class="highlight">Timetable</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="./">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                        </li>
                        <li class="active">Timetable</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_top_100 section_padding_bottom_75">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section_header with_icon text-center">
                        Our Schedule
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="text-center filters col-sm-12">
                    <ul id="timetable_filter" class="darklinks">
                        <li>
                            <a data-filter="all" href="#" class="selected">All</a>
                        </li>
                        <li>
                            <a data-filter=".management" href="#">management</a>
                        </li>
                        <li>
                            <a data-filter=".training" href="#">training</a>
                        </li>
                        <li>
                            <a data-filter=".presentations" href="#">presentations</a>
                        </li>
                        <li>
                            <a data-filter=".meetings" href="#">meetings</a>
                        </li>
                        <li>
                            <a data-filter=".consultations" href="#">consultations</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table_template darklinks" id="timetable">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>8:00 - 9:00</th>
                                <td>
                                    <a href="event-single-left.html" class="management">
                                        Management
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="meetings">
                                        Meetings
                                    </a>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <a href="event-single-left.html" class="consultations">
                                        Consultations
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="presentations">
                                        Presentations
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="management">
                                        Management
                                    </a>
                                </td>
                                <td>

                                </td>
                            </tr>

                            <tr>
                                <th>9:00 - 10:00</th>
                                <td>

                                </td>
                                <td>
                                    <a href="event-single-left.html" class="training">
                                        Training
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="presentations">
                                        Presentations
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="meetings">
                                        Meetings
                                    </a>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <a href="event-single-left.html" class="management">
                                        Management
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="presentations">
                                        Presentations
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <th>10:00 - 11:00</th>
                                <td>
                                    <a href="event-single-left.html" class="presentations">
                                        Presentations
                                    </a>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <a href="event-single-left.html" class="presentations">
                                        Presentations
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="meetings">
                                        Meetings
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="management">
                                        Management
                                    </a>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <a href="event-single-left.html" class="consultations">
                                        Consultations
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <th>11:00 - 12:00</th>
                                <td>
                                    <a href="event-single-left.html" class="training">
                                        Training
                                    </a>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <a href="event-single-left.html" class="management">
                                        Management
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="training">
                                        Training
                                    </a>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <a href="event-single-left.html" class="management">
                                        Management
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="meetings">
                                        Meetings
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <th>12:00 - 13:00</th>
                                <td>
                                    <a href="event-single-left.html" class="presentations">
                                        Presentations
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="consultations">
                                        Consultations
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="presentations">
                                        Presentations
                                    </a>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <a href="event-single-left.html" class="meetings">
                                        Meetings
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="management">
                                        Management
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="consultations">
                                        Consultations
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <th>13:00 - 14:00</th>
                                <td>
                                    <a href="event-single-left.html" class="training">
                                        Training
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="consultations">
                                        Consultations
                                    </a>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <a href="event-single-left.html" class="management">
                                        Management
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="meetings">
                                        Meetings
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="training">
                                        Training
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="management">
                                        Management
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <th>14:00 - 15:00</th>
                                <td>
                                    <a href="event-single-left.html" class="presentations">
                                        Presentations
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="meetings">
                                        Meetings
                                    </a>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <a href="event-single-left.html" class="consultations">
                                        Consultations
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="presentations">
                                        Presentations
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="meetings">
                                        Meetings
                                    </a>
                                </td>
                                <td>

                                </td>
                            </tr>

                            <tr>
                                <th>15:00 - 16:00</th>
                                <td>

                                </td>
                                <td>
                                    <a href="event-single-left.html" class="management">
                                        Management
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="training">
                                        Training
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="management">
                                        Management
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="presentations">
                                        Presentations
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="consultations">
                                        Consultations
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="meetings">
                                        Meetings
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <th>16:00 - 17:00</th>
                                <td>
                                    <a href="event-single-left.html" class="presentations">
                                        Presentations
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="meetings">
                                        Meetings
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="consultations">
                                        Consultations
                                    </a>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <a href="event-single-left.html" class="meetings">
                                        Meetings
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="management">
                                        Management
                                    </a>
                                </td>
                                <td></td>
                            </tr>


                            <tr>
                                <th>17:00 - 18:00</th>
                                <td>
                                    <a href="event-single-left.html" class="presentations">
                                        Presentations
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="meetings">
                                        Meetings
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="consultations">
                                        Consultations
                                    </a>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <a href="event-single-left.html" class="meetings">
                                        Meetings
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="presentations">
                                        Presentations
                                    </a>
                                </td>
                                <td></td>
                            </tr>


                            <tr>
                                <th>18:00 - 19:00</th>
                                <td>
                                    <a href="event-single-left.html" class="management">
                                        Management
                                    </a>
                                </td>
                                <td></td>
                                <td>
                                    <a href="event-single-left.html" class="meetings">
                                        Meetings
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="presentations">
                                        Presentations
                                    </a>
                                </td>
                                <td></td>
                                <td>
                                    <a href="event-single-left.html" class="presentations">
                                        Presentations
                                    </a>
                                </td>
                                <td></td>
                            </tr>


                            <tr>
                                <th>19:00 - 20:00</th>
                                <td>
                                    <a href="event-single-left.html" class="presentations">
                                        Presentations
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="meetings">
                                        Meetings
                                    </a>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <a href="event-single-left.html" class="consultations">
                                        Consultations
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="meetings">
                                        Meetings
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="presentations">
                                        Presentations
                                    </a>
                                </td>
                                <td></td>
                            </tr>


                            <tr>
                                <th>20:00 - 21:00</th>
                                <td>
                                    <a href="event-single-left.html" class="meetings">
                                        Meetings
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="meetings">
                                        Meetings
                                    </a>
                                </td>
                                <td>
                                    <a href="event-single-left.html" class="consultations">
                                        Consultations
                                    </a>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <a href="event-single-left.html" class="meetings">
                                        Meetings
                                    </a>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection