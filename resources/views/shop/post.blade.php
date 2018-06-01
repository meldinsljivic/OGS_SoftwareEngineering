@extends('layouts.master')
@section('title') SE Project @endsection
@section('content')



<div id="content">
        <div class="container">


            <div class="col-sm-12" id="blog-post">


                <div class="box">

                    <h1>{{$post->title}}</h1>
                    <p class="author-date">{{date('d-m-Y', strtotime($post->created_at))}}</p>
                    
                    <div id="post-content">
                    
                        <p>                        
                        <img align="center" src="{{$post->image}}" class="img-responsive" alt="{{$post->title}} - image">
                        </p>
                        <p>{{$post->description}}</p>
                        

                    </div>
                    <hr>
                    
                    <!-- /#post-content -->

                    <div id="comments" data-animate="fadeInUp">
                        <h4>2 comments</h4>


                        <div class="row comment">
                            <div class="col-sm-3 col-md-2 text-center-xs">
                                <p>
                                    <img src="img/blog-avatar2.jpg" class="img-responsive img-circle" alt="">
                                </p>
                            </div>
                            <div class="col-sm-9 col-md-10">
                                <h5>Julie Alma</h5>
                                <p class="posted"><i class="fa fa-clock-o"></i> September 23, 2011 at 12:00 am</p>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                                    Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p class="reply"><a href="#"><i class="fa fa-reply"></i> Reply</a>
                                </p>
                            </div>
                        </div>
                        <!-- /.comment -->


                        <div class="row comment last">

                            <div class="col-sm-3 col-md-2 text-center-xs">
                                <p>
                                    <img src="img/blog-avatar.jpg" class="img-responsive img-circle" alt="">
                                </p>
                            </div>

                            <div class="col-sm-9 col-md-10">
                                <h5>Louise Armero</h5>
                                <p class="posted"><i class="fa fa-clock-o"></i> September 23, 2012 at 12:00 am</p>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                                    Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p class="reply"><a href="#"><i class="fa fa-reply"></i> Reply</a>
                                </p>
                            </div>

                        </div>
                        <!-- /.comment -->

                    </div>
                    <!-- /#comments -->

                    <div id="comment-form" data-animate="fadeInUp">

                        <h4>Leave comment</h4>

                        <form>
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name <span class="required">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email <span class="required">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="comment">Comment <span class="required">*</span>
                                        </label>
                                        <textarea class="form-control" id="comment" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button class="btn btn-primary"><i class="fa fa-comment-o"></i> Post comment</button>
                                </div>
                            </div>


                        </form>

                    </div>
                    <!-- /#comment-form -->

                </div>
                <!-- /.box -->
            </div>
            <!-- /#blog-post -->

            {{-- <div class="col-md-3">
                <!-- *** BLOG MENU ***
_________________________________________________________ -->
                <div class="panel panel-default sidebar-menu">

                    <div class="panel-heading">
                        <h3 class="panel-title">Blog</h3>
                    </div>

                    <div class="panel-body">

                        <ul class="nav nav-pills nav-stacked">
                            <li>
                                <a href="blog.html">About us</a>
                            </li>
                            <li class="active">
                                <a href="blog.html">Fashion</a>
                            </li>
                            <li>
                                <a href="blog.html">News and gossip</a>
                            </li>
                            <li>
                                <a href="blog.html">Design</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /.col-md-3 -->

                <!-- *** BLOG MENU END *** -->

                
            </div> --}}


        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->






@endsection