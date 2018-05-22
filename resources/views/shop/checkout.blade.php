@extends('layouts.master')
@section('title') SE Project @endsection
@section('content')



<div id="content">
        <div class="container">

           

            <div class="col-md-9" id="checkout">

                <div class="box">
                <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}">
                {{Session::get('error')}}
                </div>
                    <form method="post" action="{{ route('checkout')}}" id="checkout-form">
                        <h1>Checkout</h1>
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a href="#"><i class="fa fa-map-marker"></i><br>Information</a>
                            </li>
                            <li class="disabled"><a href="#"><i class="fa fa-truck"></i><br>Delivery Method</a>
                            </li>
                            <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Payment Method</a>
                            </li>
                            <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a>
                            </li>
                        </ul>

                        <div class="content">
                            {{-- <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="adress">Adress</label>
                                        <input type="text" class="form-control" id="adress"required>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="card-name">Card Holder Name</label>
                                        <input type="text" class="form-control" id="card-name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="card-number">Credit Card Number</label>
                                        <input type="text" class="form-control" id="card-number" required>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="card-expiry-month">Expiration Month</label>
                                        <input type="text" class="form-control" id="card-expiry-month" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="card-expiry-year">Expiration Year</label>
                                        <input type="text" class="form-control" id="card-expiry-year" required> 
                                    </div>
                                </div>
                               {{--  <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <select class="form-control" id="state"></select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <select class="form-control" id="country"></select>
                                    </div>
                                </div> --}}

                             {{--    <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="cvc">CVC</label>
                                        <input type="text" class="form-control" id="cvc" required>
                                    </div>
                                </div> --}}
                                <div id="card-element" class="form-control"></div>
                                {{-- <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                </div> --}} 

                            </div>
                            <!-- /.row -->
                        </div>

                        <div class="box-footer">
                            <div class="pull-left">
                                <a href="/cart" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back to basket</a>
                            </div>
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary">Buy<i class="fa fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                        {{ csrf_field()}}
                    </form>
                </div>
                <!-- /.box -->


            </div>
            <!-- /.col-md-9 -->

            <div class="col-md-3">

                <div class="box" id="order-summary">
                    <div class="box-header">
                        <h3>Order summary</h3>
                    </div>
                    <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                
                                <tr class="total">
                                    <td>Total:</td>
                                    <th>{{ $total }} KM</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
            <!-- /.col-md-3 -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->


@endsection
@section('scripts')

<script type="text/javascript" src="{{ URL::to('js/checkout.js') }}"></script>
@endsection