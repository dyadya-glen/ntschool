@extends('admin.layout-admin')

@section('title', $title)

@section('content')
    <section class="ls with_bottom_border">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="active">Post</li>
                    </ol>
                </div>
                <!-- .col-* -->
                <div class="col-md-6 text-md-right">
							<span class="dashboard-daterangepicker">
								<i class="fa fa-calendar"></i>
								<span></span>
								<i class="caret"></i>
							</span>
                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>

    <section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <h3>Single Post
                        <small class="pull-right">
                            <a href="admin_comments.html">
                                <i class="fa fa-comments"></i> Post discussion</a>
                        </small>
                    </h3>
                </div>
            </div>
            <!-- .row -->


            <form class="form-horizontal">

                <div class="row">
                    <div class="col-md-8">
                        <div class="with_border with_padding">

                            <h4>
                                Post text
                                <span class="pull-right">
											<button type="submit" class="theme_button small_button">Save Post</button>
										</span>

                            </h4>

                            <hr>


                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Post title: </label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Post slug: </label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Categories: </label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Post Tags: </label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Post content: </label>
                                <div class="col-lg-9">
                                    <textarea rows="8" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="theme_button wide_button">Save Post</button>
                                    <a href="admin_posts.html" class="theme_button inverse wide_button">Cancel</a>
                                </div>
                            </div>
                            <!-- .row  -->

                        </div>
                        <!-- .with_border -->

                    </div>
                    <!-- .col-* -->


                    <div class="col-md-4">

                        <div class="with_border with_padding bottommargin_10">

                            <h4>Post Meta</h4>

                            <hr>

                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Publish date: </label>
                                <div class="col-lg-9">
                                    <input type="date" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Publish time: </label>
                                <div class="col-lg-9">
                                    <input type="time" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-lg-3 control-label">Status: </label>
                                <div class="col-lg-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="post-published" id="post-bublished1" value="draft" checked="checked"> Draft
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="post-published" id="post-bublished2" value="published"> Published
                                    </label>
                                </div>
                            </div>


                        </div>
                        <!-- .with_border -->

                        <div class="with_border with_padding">

                            <h4>Post Media</h4>

                            <hr>

                            <div class="item-editable bottommargin_20">


                                <div class="item-media">
                                    <img src="images/gallery/01.jpg" alt="...">
                                </div>

                                <div class="item-edit-controls darklinks">
                                    <a href="#">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </div>
                            </div>

                            <div>
                                <label class="control-label">Post Video: </label>
                                <input type="text" class="form-control">
                            </div>

                        </div>
                        <!-- .with_border -->

                    </div>
                    <!-- .col-* -->


                </div>
                <!-- .row  -->


            </form>

        </div>
        <!-- .container -->
    </section>
@endsection