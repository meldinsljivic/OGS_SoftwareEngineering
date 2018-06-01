@extends('layouts.master')
@section('title') SE Project @endsection
@section('content')



<div id="content">
        <div class="container">

           

            <div class="col-md-3">
                <!-- *** CUSTOMER MENU ***
_________________________________________________________ -->
                <div class="panel panel-default sidebar-menu">

                    <div class="panel-heading">
                        <h3 class="panel-title">Customer section</h3>
                    </div>

                    <div class="panel-body">

                        <ul class="nav nav-pills nav-stacked">
                            <li >
                                <a href="/orders"><i class="fa fa-list"></i> My orders</a>
                            </li>
                            <li class="active">
                                <a href="/wishlist"><i class="fa fa-heart"></i> My wishlist</a>
                            </li>
                            <li>
                                <a href="/account"><i class="fa fa-user"></i> My account</a>
                            </li>
                            <li>
                                <a href="{{ route('user.logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /.col-md-3 -->

                <!-- *** CUSTOMER MENU END *** -->
            </div>

            <div class="col-md-9" id="wishlist">

               

                <div class="box">
                    <h1>My wishlist</h1>
                    <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>

                

                <div class="row products">
                    @foreach($wishlists as $wishlist)
                    @if($wishlist->id_user == Auth::id())
                    @foreach($products as $product)
                    @if($wishlist->id_product == $product->id)
                    <div class="col-md-3 col-sm-4">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="/detail/{{$product->id}}">
                                            <img style="object-fit: cover;" src="{{$product->imagePath}}" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="/detail/{{$product->id}}">
                                            <img style="object-fit: cover;" src="{{$product->imagePath}}" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="/detail/{{$product->id}}" class="invisible">
                                <img style="object-fit: cover;" src="{{$product->imagePath}}" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="/detail/{{$product->id}}">{{$product->title}}</a></h3>
                                <p class="price">{{$product->price}} KM</p>
                                <p class="buttons">
                                    <a href="/detail/{{$product->id}}" class="btn btn-default">View detail</a>
                                    <a href="{{ route('product.addToCart', ['id' => $product->id])}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </p>
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.product -->
                    </div>
                    @endif
@endforeach
@endif
@endforeach
                    

                

                    

                    
                    
                    <!-- /.col-md-4 -->

                    

                    

                </div>
                <!-- /.products -->

            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->







@endsection