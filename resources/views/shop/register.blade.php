@extends('layouts.master')
@section('title') SE Project @endsection
@section('content')



<div id="content">
        <div class="container">

            <div class="col-md-6">
                <div class="box">
                    <h1>New account</h1>

                    <p class="lead">Not our registered customer yet?</p>
                    <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                    <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                    <hr>

                <form method="POST" action="{{ route('shop.register') }}" name="register_form" >
                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text"  class="form-control" name="username"  id="username">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text"  class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password"  class="form-control" name="password" id="password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                        </div>
                        {{ csrf_field() }}
                        
                    </form>
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-md-6">
                <div class="box">
                    <h1>Login</h1>

                    <p class="lead">Already our customer?</p>
                    <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
                        mi vitae est. Mauris placerat eleifend leo.</p>

                    <hr>

                    <form name="login_form">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" ng-model="credentials.email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" ng-model="credentials.password" id="password">
                        </div>
                        <div class="text-center">
                            <button ng-click="login(credentials)" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->






@endsection