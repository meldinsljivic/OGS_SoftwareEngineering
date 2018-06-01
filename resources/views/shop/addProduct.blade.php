@extends('layouts.master')
@section('title') SE Project @endsection
@section('content')



<div id="content">
        <div class="container">

            <div class="col-md-12">



                    <div  data-animate="fadeInUp">

                    <h4>Add new product</h4>

                    <form method="POST" action="{{ route('shop.addProduct') }}" name="addProduct_form">
                        <div class="row">

                            <div class="col-sm-9">
                                <div class="form-group">
                                    <label for="name">Title <span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="title" id="title">
                                </div>
                            </div>
                            <div class="col-sm-3   ">
                                    <div class="form-group">
                                        <label for="name">Price (KM) <span class="required">*</span>
                                        </label>
                                        <input type="number" class="form-control" name="price" id="price">
                                    </div>
                                </div>

                        </div>

                        <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Youtube video URL <span class="required">*</span>
                                        </label>
                                        <input type="text" class="form-control" name="youtube" id="youtube">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                        <label for="sel1">Category:</label>
                                        <select class="form-control" name="category_id" id="category_id">
                                                @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                          @endforeach
                                        </select>
                                      </div>
    
                            </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email">Image 1 URL <span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="image1" id="image1">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email">Image 2 URL <span class="required">*</span>
                                        </label>
                                        <input type="text" class="form-control" name="image2" id="image2">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="email">Image 3 URL <span class="required">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="image3" id="image3">
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
                                <button type="submit" class="btn btn-primary"><i class="fa fa-comment-o"></i> Add New Product</button>
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