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
                                <a href="#!orders"><i class="fa fa-list"></i> My orders</a>
                            </li>
                            <li>
                                <a href="#!wishlist"><i class="fa fa-heart"></i> My wishlist</a>
                            </li>
                            <li>
                                <a href="#!account"><i class="fa fa-user"></i> My account</a>
                            </li>
                            <li>
                                <a href="#!"><i class="fa fa-sign-out"></i> Logout</a>
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
                    <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

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
                                <tr>
                                    <th># 1735</th>
                                    <td>22/06/2013</td>
                                    <td>$ 150.00</td>
                                    <td><span class="label label-info">Being prepared</span>
                                    </td>
                                    <td><a href="#!order" class="btn btn-primary btn-sm">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th># 1735</th>
                                    <td>22/06/2013</td>
                                    <td>$ 150.00</td>
                                    <td><span class="label label-info">Being prepared</span>
                                    </td>
                                    <td><a href="customer-order.html" class="btn btn-primary btn-sm">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th># 1735</th>
                                    <td>22/06/2013</td>
                                    <td>$ 150.00</td>
                                    <td><span class="label label-success">Received</span>
                                    </td>
                                    <td><a href="customer-order.html" class="btn btn-primary btn-sm">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th># 1735</th>
                                    <td>22/06/2013</td>
                                    <td>$ 150.00</td>
                                    <td><span class="label label-danger">Cancelled</span>
                                    </td>
                                    <td><a href="customer-order.html" class="btn btn-primary btn-sm">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th># 1735</th>
                                    <td>22/06/2013</td>
                                    <td>$ 150.00</td>
                                    <td><span class="label label-warning">On hold</span>
                                    </td>
                                    <td><a href="customer-order.html" class="btn btn-primary btn-sm">View</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->



<!-- *** SCRIPTS TO INCLUDE ***
_________________________________________________________ -->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/bootstrap-hover-dropdown.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/front.js"></script>


@endsection