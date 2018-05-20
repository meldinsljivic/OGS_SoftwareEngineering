@extends('layouts.master')
@section('title') SE Project @endsection
@section('content')
<div id="content">
    @foreach($products->chunk(4) as $productChunk)
    <div class="row products">
    @foreach($productChunk as $product)
    <div class="col-md-3 col-sm-4">
            <div class="product">
                <div class="flip-container">
                    <div class="flipper">
                        <div class="front">
                            <a href="detail.html">
                                <img src="{{ $product -> imagePath }}" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="back">
                            <a href="detail.html">
                                <img src="{{ $product -> imagePath }}" alt="" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
                <a href="detail.html" class="invisible">
                    <img src="{{ $product -> imagePath }}" alt="" class="img-responsive">
                </a>
                <div class="text">
                    <h3><a href="detail.html">{{ $product -> title }}</a></h3>
                    <p class="price">{{ $product -> price }} KM</p>
                    <p class="buttons">
                        <a href="detail.html" class="btn btn-default">View detail</a>
                        <a href="{{ route('product.addToCart', ['id' => $product->id])}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </p>
                </div>
                <!-- /.text -->
            </div>
            <!-- /.product -->
        </div>
    @endforeach
    
    </div>
    @endforeach


    
    </div>

@endsection