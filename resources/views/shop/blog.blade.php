@extends('layouts.master')
@section('title') SE Project @endsection
@section('content')


        <div id="content">
                <div class="container">
    
                    
    
                    <!-- *** LEFT COLUMN ***
                 _________________________________________________________ -->
    
                    <div class="col-sm-9" id="blog-listing">
    @foreach($posts as $post)
                        <div class="post">
                        <h2><a href="/post/{{$post->slug}}">{{$post->title}}</a></h2>
                           
                            <hr>
                            <p class="date-comments">
                                <a href="post.html"><i class="fa fa-calendar-o"></i> June 20, 2013</a>
                                <a href="post.html"><i class="fa fa-comment-o"></i> 8 Comments</a>
                            </p>
                            <div class="image">
                                <a href="/post/{{$post->slug}}">
                                    <img src="{{$post->image}}" class="img-responsive" alt="Example blog post alt">
                                </a>
                            </div>
                            <p class="intro">{{$post->description}}</p>
                            <p class="read-more"><a href="/post/{{$post->slug}}" class="btn btn-primary">Continue reading</a>
                            </p>
                        </div>
    @endforeach
    
                    
    
                        <ul class="pager">
                            <li class="previous"><a href="#">&larr; Older</a>
                            </li>
                            <li class="next disabled"><a href="#">Newer &rarr;</a>
                            </li>
                        </ul>
    
    
    
                    </div>
                    <!-- /.col-md-9 -->
    
                    <!-- *** LEFT COLUMN END *** -->
    
    
                    <div class="col-md-3">
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
    
                       
                    </div>
    
    
                </div>
                <!-- /.container -->
            </div>
            <!-- /#content -->
    
    
    

    
    
    
@endsection    