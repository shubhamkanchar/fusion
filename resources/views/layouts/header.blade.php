<!-- ################# Header Starts Here#######################--->
<header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 left-item">
                        <ul>
                            <li><i class="fas fa-envelope-square"></i> sales@smarteyeapps.com</li>
                            <li><i class="fas fa-phone-square"></i> +123 987 887 765</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block right-item">
                        <ul>
                            <li><a><i class="fab fa-github"></i></a></li>
                            <li><a><i class="fab fa-google-plus-g"></i></a></li>
                            <li> <a><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a><i class="fab fa-twitter"></i></a></li>
                            <li> <a><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div id="nav-head" class="header-nav">
            <div class="container-full">
                <div class="row">
                    <div class="col-md-4 col-sm-12 nav-img">
                        <img src="assets/images/logo.png" alt="">
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-md-8 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="{{ route('welcome') }}">Home</a></li>
                            <li><a href="{{ route('about_us') }}">About Us</a></li>
                            <li><a href="{{ route('cources') }}">Cources</a></li>
                            <li><a href="{{ route('batches') }}">Batches</a></li>
                            <li><a href="{{ route('gallery') }}">Gallery</a></li>
                            <li><a href="{{ route('contact_us') }}">Contact Us</a></li>
                            <li><a class="btn btn-primary" href="{{ route('register') }}">Join Today</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </header>