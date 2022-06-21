<!-- ################# Header Starts Here#######################--->
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 left-item">
                    <ul>
                        <li><i class="fas fa-envelope-square"></i> fusionpune1@gmail.com</li>
                        <li><i class="fas fa-phone-square"></i> +91 7498992609</li>
                    </ul>
                </div>
                <div class="col-lg-6 d-none d-lg-block right-item">
                    <ul>
                        <li><a target="_blank" href="https://www.instagram.com/p/CZ1-eICPucZ/"><i class="text-white fab fa-instagram"></i></a></li>
                        <li> <a target="_blank" href="https://api.whatsapp.com/send/?phone={{ env('WHATSAPP_NO') }}&text={{ urlencode('I am intersted in course you provide') }}"><i class="text-white fab fa-whatsapp"></i></a></li>
                        <!-- <li><a><i class="text-white fab fa-twitter"></i></a></li> -->
                        <li> <a target="_blank" href="https://www.facebook.com/111239338082168/posts/pfbid034Vf37amodcvC7bxCQC9onYM5DXxGnnKWRbQGgxgLw4KvLrfU76yxCG8y73FgWV3nl/"><i class=" text-white fab fa-facebook-f"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div id="nav-head" class="header-nav">
        <div class="container" style="padding: 21px 15px;">
            <div class="row">
                <div class="col-md-4 col-sm-11 nav-img" style="width:90%">
                    <h3><a href="{{ route('welcome') }}"><img src="{{ url('public/assets/images/logo.png') }}"></a></h3>
                </div>
                <div class="col-sm-1 d-block d-md-none" style="width:10%">
                    <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                </div>
                <div id="menu" class="col-md-8 d-none d-md-block nav-item">
                    <ul>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li><a href="{{ route('about_us') }}">About Us</a></li>
                        <li><a href="{{ route('cources') }}">Courses</a></li>
                        <li><a href="{{ route('batches') }}">Batches</a></li>
                        <!-- <li><a href="{{ route('gallery') }}">Gallery</a></li> -->
                        <li><a href="{{ route('contact_us') }}">Contact Us</a></li>
                        <li><a class="btn btn-primary btn-sm" href="{{ route('register') }}">Join Today</a></li>
                        <li><a class="btn btn-primary btn-sm text-white" data-toggle="modal" data-target="#myModal">Book demo</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

</header>