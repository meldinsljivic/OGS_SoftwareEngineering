@extends('layouts.master')
@section('title') SE Project @endsection
@section('content')
<div id="content">
@if(Session::has('success'))
<div class="row">
    
    <div class="col-ms-6 col-md-4 col-md-offset-4 col-sm-offset-3">
        <div id="charge-message" class="alert alert-success">
            {{ Session::get('success')}}
        </div>
    </div>
</div>
@endif
    @foreach($products->chunk(4) as $productChunk)
    <div class="row products">
    @foreach($productChunk as $product)
    <div class="col-md-3 col-sm-4">
            <div class="product">
                <div class="flip-container">
                    <div class="flipper">
                        <div class="front">
                            <a href="/detail/{{$product->id}}">
                                <img src="{{ $product -> imagePath }}" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="back">
                            <a href="/detail/{{$product->id}}">
                                <img src="{{ $product -> imagePath }}" alt="" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
                <a href="/detail/{{$product->id}}" class="invisible">
                    <img src="{{ $product -> imagePath }}" alt="" class="img-responsive">
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
    
    </div>
    @endforeach


    
    </div>

@endsection