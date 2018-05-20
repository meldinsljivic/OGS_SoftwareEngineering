
    <!-- *** NAVBAR ***
 _________________________________________________________ -->

 <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="#!" data-animate-hover="bounce">
                    <img src="{{ URL::to('img/logo.png') }}" alt="Obaju logo" class="hidden-xs">
                    <img src="{{ URL::to('img/logo-small.png') }}" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="#!basket">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">2 items in cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="/">Home</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Categories <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            
                                            <ul>
                                                <li><a href="/category">Action</a>
                                                </li>
                                                <li><a href="category.html">Sports</a>
                                                </li>
                                                <li><a href="category.html">Multyplayer</a>
                                                </li>
                                                <li><a href="category.html">FPS</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            
                                            <ul>
                                                <li><a href="category.html">Strategy</a>
                                                </li>                                                
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    @if(Auth::check())
                    <li><a href="/account">Account</a></li>
                    <li><a href="/logout">Logout</a></li>
                    @else
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                </li>

                <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
        
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="Login">Customer login</h4>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('shop.login') }}" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="password">
                                    </div>
        
                                    <p class="text-center">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                                    </p>
                                    {{ csrf_field() }}
                                </form>
                                @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                <p>{{$error}}</p>
                                    @endforeach
                                </div>
                                @endif
                                <p class="text-center text-muted">Not registered yet?</p>
                                <p class="text-center text-muted"><a href="/register"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>
        
                            </div>
                        </div>
                    </div>
                </div>

                <li><a href="/register">Register</a></li>
                    @endif
                    
                    <li><a href="/contact">Contact</a></li>
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                <a href="{{ route('product.cart')}}" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">Cart 
                    <div class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQuantity : '0'}}</div></span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->