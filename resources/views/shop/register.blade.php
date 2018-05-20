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

        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->






@endsection