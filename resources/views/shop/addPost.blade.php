@extends('layouts.master')
@section('title') SE Project @endsection
@section('content')



<div id="content">
        <div class="container">

            <div class="col-md-12">



                    <div  data-animate="fadeInUp">

                    <h4>Add new post</h4>

                    <form method="POST" action="{{ route('shop.addPost') }}" name="addPost_form">
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Title <span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="title" id="title">
                                </div>
                            </div>

                        </div>

                        <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Slug URL <span class="required">*</span>
                                        </label>
                                        <input type="text" class="form-control" name="slug" id="slug">
                                    </div>
                                </div>
    
                            </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Image URL <span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="image" id="image">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="comment">Description <span class="required">*</span>
                                    </label>
                                    <textarea class="form-control" name="description" id="description" rows="6"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-comment-o"></i> Add New Post</button>
                            </div>
                        </div>

                        {{ csrf_field() }}
                    </form>

                </div>


            </div>
            <!-- /.col-md-9 -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->



@endsection