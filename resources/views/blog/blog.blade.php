@extends('blog.template-blog')

@section('content-blog')
                <div class="col-sm-12">
                    <div class="intro_section ds blog_slider bottommargin_60">
                        <div class="flexslider text-center" data-nav="false">
                            <ul class="slides">

                                <li>
                                    <img src="images/gallery/01.jpg" alt="">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 text-center">
                                                <div class="slide_description_wrapper">
                                                    <div class="slide_description">
                                                        <div class="intro-layer" data-animation="fadeInUp">
                                                            <h2>
                                                                Every Pet Deserves
                                                                <strong>Celebrity Care</strong>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <!-- eof .slide_description -->
                                                </div>
                                                <!-- eof .slide_description_wrapper -->
                                            </div>
                                            <!-- eof .col-* -->
                                        </div>
                                        <!-- eof .row -->
                                    </div>
                                    <!-- eof .container -->
                                </li>

                                <li>
                                    <img src="images/gallery/02.jpg" alt="">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 text-center">
                                                <div class="slide_description_wrapper">
                                                    <div class="slide_description">
                                                        <div class="intro-layer" data-animation="fadeInUp">
                                                            <h2>
                                                                Qualified Personal
                                                                <strong>Care For Your Pets</strong>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <!-- eof .slide_description -->
                                                </div>
                                                <!-- eof .slide_description_wrapper -->
                                            </div>
                                            <!-- eof .col-* -->
                                        </div>
                                        <!-- eof .row -->
                                    </div>
                                    <!-- eof .container -->
                                </li>

                                <li>
                                    <img src="images/gallery/03.jpg" alt="">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 text-center">
                                                <div class="slide_description_wrapper">
                                                    <div class="slide_description">
                                                        <div class="intro-layer" data-animation="fadeInUp">
                                                            <h2>
                                                                Every Pet Deserves
                                                                <strong>Celebrity Care</strong>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <!-- eof .slide_description -->
                                                </div>
                                                <!-- eof .slide_description_wrapper -->
                                            </div>
                                            <!-- eof .col-* -->
                                        </div>
                                        <!-- eof .row -->
                                    </div>
                                    <!-- eof .container -->
                                </li>


                            </ul>
                        </div>
                        <!-- eof flexslider -->
                    </div>
                </div>

                <div class="col-sm-7 col-md-8 col-lg-8">

                    @forelse($posts as $post)
                        <article class="vertical-item content-padding big-padding post format-standard with_shadow rounded overflow-hidden">

                            <div class="item-media entry-thumbnail">
                                <img src="{{ $post->cover }}" alt="">
                            </div>

                            <div class="item-content entry-content">
                                <header class="entry-header">

                                    <p class="content-justify item-meta">
									<span class="entry-date highlight3 small-text">
										<time class="entry-date" datetime="{{ $post->created_at }}">
											{{ date("F.d.Y", strtotime($post->created_at)) }}
										</time>
									</span>
                                    </p>
                                    <h4 class="entry-title hover-color3">
                                        <a href="blog-single" rel="bookmark">{{ $post->title }}</a>
                                    </h4>

                                <!-- .entry-meta -->

                                </header>
                            <!-- .entry-header -->

                                <p>{{ $post->content }}</p>

                                {{--@foreach($post->categories as $category)--}}
                                {{--@foreach($post)--}}
                                    {{--<span class="entry-date highlight3 small-text">--}}
                                    {{--{{ $category->title }}--}}
                                    {{--</span>--}}
                                {{--@endforeach--}}

                            </div>
                            <!-- .item-content.entry-content -->
                        </article>
                    @empty
                        <p>Ни одного поста еще не написано</p>
                    @endforelse

                    <div class="row topmargin_60">
                        <div class="col-sm-12 text-center">
                            <ul class="pagination highlightlinks">
                                @if($posts->currentPage() != 1)
                                <li>
                                    <a href="?page={{ $posts->currentPage() - 1 }}">
                                        <span class="sr-only">Prev</span>
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    </a>
                                </li>
                                @endif
                                @for($i = 1; $i <= $total; $i++)
                                <li class="@if($i == $posts->currentPage()) active @endif"><a href="?page={{ $i }}">{{ $i }}</a></li>
                                @endfor
                                @if($posts->currentPage() != $total)
                                <li>
                                    <a href="?page={{ $posts->currentPage() + 1 }}">
                                        <span class="sr-only">Next</span>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>

                </div>
@endsection