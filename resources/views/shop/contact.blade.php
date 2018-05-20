@extends('layouts.master')
@section('title') SE Project @endsection
@section('content')



<div id="content">
        <div class="container">

           
            <div class="col-md-3">
                <!-- *** PAGES MENU ***
_________________________________________________________ -->
                <div class="panel panel-default sidebar-menu">

                    <div class="panel-heading">
                        <h3 class="panel-title">Pages</h3>
                    </div>

                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <li>
                                <a href="text.html">Text page</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact page</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQ</a>
                            </li>

                        </ul>

                    </div>
                </div>

                <!-- *** PAGES MENU END *** -->


                <div class="banner">
                    <a href="#">
                        <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                    </a>
                </div>
            </div>

            <div class="col-md-9">


                <div class="box" id="contact">
                    <h1>Contact</h1>

                    <p class="lead">Are you curious about something? Do you have some kind of problem with our products?</p>
                    <p>Please feel free to contact us, our customer service center is working for you 24/7.</p>

                    <hr>

                    <div class="row">
                        <div class="col-sm-4">
                            <h3><i class="fa fa-map-marker"></i> Address</h3>
                            <p>13/25 New Avenue
                                <br>New Heaven
                                <br>45Y 73J
                                <br>England
                                <br>
                                <strong>Great Britain</strong>
                            </p>
                        </div>
                        <!-- /.col-sm-4 -->
                        <div class="col-sm-4">
                            <h3><i class="fa fa-phone"></i> Call center</h3>
                            <p class="text-muted">This number is toll free if calling from Great Britain otherwise we advise you to use the electronic form of communication.</p>
                            <p><strong>+33 555 444 333</strong>
                            </p>
                        </div>
                        <!-- /.col-sm-4 -->
                        <div class="col-sm-4">
                            <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                            <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p>
                            <ul>
                                <li><strong><a href="mailto:">info@fakeemail.com</a></strong>
                                </li>
                                <li><strong><a href="#">Ticketio</a></strong> - our ticketing support platform</li>
                            </ul>
                        </div>
                        <!-- /.col-sm-4 -->
                    </div>
                    <!-- /.row -->

                    <hr>

                    <div id="map">

                    </div>

                    <hr>
                    <h2>Contact form</h2>

                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="firstname">Firstname</label>
                                    <input type="text" class="form-control" id="firstname">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lastname">Lastname</label>
                                    <input type="text" class="form-control" id="lastname">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" id="subject">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea id="message" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>

                            </div>
                        </div>
                        <!-- /.row -->
                    </form>


                </div>


            </div>
            <!-- /.col-md-9 -->
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




<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

<script>
    function initialize() {
        var mapOptions = {
            zoom: 15,
            center: new google.maps.LatLng(49.1678136, 16.5671893),
            mapTypeId: google.maps.MapTypeId.ROAD,
            scrollwheel: false
        }
        var map = new google.maps.Map(document.getElementById('map'),
            mapOptions);

        var myLatLng = new google.maps.LatLng(49.1681989, 16.5650808);
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>



@endsection