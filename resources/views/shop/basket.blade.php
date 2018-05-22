@extends('layouts.master')
@section('title') SE Project @endsection
@section('content')
<div class="container">

        <div id="content">

        <div class="col-md-9" id="basket">

            <div class="box">

                <form method="post" action="checkout1.html">

                    <h1>Shopping cart</h1>
                    
@if(Session::has('cart'))
<p class="text-muted">You currently have {{Session::get('cart')->totalQuantity}} item(s) in your cart.</p>
<div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2">Product</th>
                    <th>Quantity</th>
                    <th>Unit price</th>
                    <th>Discount</th>
                    <th colspan="2">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>
                        <a href="#">
                            <img src="{{ $product['item']['imagePath'] }}" alt="{{ $product['item']['title'] }}">
                        </a>
                    </td>
                <td><a href="#">{{ $product['item']['title'] }}</a>
                    </td>
                    <td>
                        <input type="number" value="{{ $product['quantity'] }}" class="form-control">
                    </td>
                    <td>{{ $product['price'] / $product['quantity']}} KM</td>
                    <td>$0.00</td>
                    <td>{{ $product['price']}} KM</td>
                    <td><a href="#"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                @endforeach 
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="5">Total</th>
                <th colspan="2">{{ $totalPrice }} KM</th>
                </tr>
            </tfoot>
        </table>

    </div>
    <!-- /.table-responsive -->

    <div class="box-footer">
        <div class="pull-left">
            <a href="/" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
        </div>
        <div class="pull-right">
            <button class="btn btn-default"><i class="fa fa-refresh"></i> Update basket</button>
        <a href="{{ route('checkout')}}" type="button" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i>
            </a>
        </div>
    </div>

</form>

</div>
<!-- /.box -->

</div>
<div class="col-md-3">
                <div class="box" id="order-summary">
                    <div class="box-header">
                        <h3>Order summary</h3>
                    </div>
                    <p class="text-muted">Shipping costs are calculated based on the values you have entered.</p>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                               
                                <tr class="total">
                                    <td>Total:</td>
                                    <th>{{ $totalPrice }} KM</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="box">
                    <div class="box-header">
                        <h4>Coupon code</h4>
                    </div>
                    <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
                    <form>
                        <div class="input-group">

                            <input type="text" class="form-control">

                            <span class="input-group-btn">

                <button class="btn btn-primary" type="button"><i class="fa fa-gift"></i></button>

                </span>
                        </div>
                        <!-- /input-group -->
                    </form>
                </div>

            </div>
@else
<p class="text-muted">You currently don't have any items in your cart.</p>
@endif



        
                        
            <!-- /.col-md-9 -->

            
            <!-- /.col-md-3 -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->


@endsection