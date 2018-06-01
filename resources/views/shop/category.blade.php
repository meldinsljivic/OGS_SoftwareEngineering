@extends('layouts.master')
@section('title') SE Project @endsection
@section('content')



<div id="content">
        <div class="container">

           

            <div class="col-md-3">
                <!-- *** MENUS AND FILTERS ***
_________________________________________________________ -->
                <div class="panel panel-default sidebar-menu">

                    <div class="panel-heading">
                        <h3 class="panel-title">Categories</h3>
                    </div>

                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked category-menu">
                        <li>
                            @foreach($categories as $category)
                        <a href="{{ route('category.show', $category->id) }}">{{$category->name}}  <span class="badge pull-right"></span></a>
                            @endforeach
                                  
                                </li>

                        </ul>

                    </div>
                </div>

            

                

                <!-- *** MENUS AND FILTERS END *** -->

                
            </div>

            <div class="col-md-9">
                

                <div class="box info-bar">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 products-showing">
                            Showing <strong>{{$products->count()}}</strong> products
                        </div>

                        <div class="col-sm-12 col-md-8  products-number-sort">
                            <div class="row">
                                <form class="form-inline">
                                    <div class="col-md-6 col-sm-6">
                                        
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="products-sort-by">
                                            <strong>Sort by</strong>
                                            <select name="sort-by" class="form-control">
                                                <option>Price</option>
                                                <option>Name</option>
                                                <option>Sales first</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row products">
                        @foreach($products as $product)
                    <div class="col-md-4 col-sm-6">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="/detail/{{$product->id}}">
                                            <img src="{{ $product -> image1 }}" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="/detail/{{$product->id}}">
                                            <img src="{{ $product -> image1 }}" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="/detail/{{$product->id}}" class="invisible">
                                <img src="{{ $product -> image1 }}" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="/detail/{{$product->id}}">{{ $product -> title }}</a></h3>
                                <p class="price">{{ $product -> price }} KM</p>
                                <p class="buttons">
                                    <a href="/detail/{{$product->id}}" class="btn btn-default">View detail</a>
                                    <a href="{{ route('product.addToCart', ['id' => $product->id])}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </p>
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.product -->
                    </div>
@endforeach

                    <!-- /.col-md-4 -->
                </div>
                <!-- /.products -->

                {{-- <div class="pages">

                    <p class="loadMore">
                        <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                    </p>

                    <ul class="pagination">
                        <li><a href="#">&laquo;</a>
                        </li>
                        <li class="active"><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li><a href="#">&raquo;</a>
                        </li>
                    </ul>
                </div> --}}


            </div>
            <!-- /.col-md-9 -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->









@endsection