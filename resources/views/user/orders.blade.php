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
                            <li class="active">
                                <a href="/orders"><i class="fa fa-list"></i> My orders</a>
                            </li>
                            <li>
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

            <div class="col-md-9" id="customer-orders">
                <div class="box">
                    <h1>My orders</h1>

                    <p class="lead">Your orders on one place.</p>
                    
                    <hr>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Order</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    @foreach($order->cart->items as $item)
                                    <th>{{ $item['item']['title'] }} | {{ $item['quantity'] }}</th>
                                    <td>22/06/2013</td>
                                <td>{{ $item['price'] }} KM</td>
                                    <td><span class="label label-info">Being prepared</span>
                                    </td>
                                    <td><a href="#!order" class="btn btn-primary btn-sm">View</a>
                                    </td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->



@endsection