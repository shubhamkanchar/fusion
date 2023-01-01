<!-- ################# Header Starts Here#######################--->
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 left-item">
                    <ul>
                        <li><i class="fas fa-envelope-square"></i> inquiry@fusion-institute.com</li>
                        <li><i class="fas fa-phone-square"></i> +91 7498992609 , +91 8380952885</li>
                    </ul>
                </div>
                <div class="col-lg-6 d-none d-lg-block right-item">
                    <ul>
                        <li><a target="_blank" href="https://www.instagram.com/fusion_institute_pune/"><i class="text-white fab fa-instagram"></i></a></li>
                        <li> <a target="_blank" href="https://api.whatsapp.com/send/?phone={{ env('WHATSAPP_NO') }}&text={{ urlencode('I am intersted in course you provide') }}"><i class="text-white fab fa-whatsapp"></i></a></li>
                        <!-- <li><a><i class="text-white fab fa-twitter"></i></a></li> -->
                        <li> <a target="_blank" href="https://m.facebook.com/profile.php?id=100088395132564&eav=AfZcb8GbgISBGWyFn8AttEB6DvU66jabdFgN9fDdff35l8xuyyWXV_U_3Uvv_F0HM2U&paipv=0"><i class=" text-white fab fa-facebook-f"></i></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/in/fusion-software-institute-493538258/"><i class="text-white fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div id="nav-head" class="header-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-11 nav-img" style="width:90%">
                    <h3><a href="{{ route('welcome') }}"><img src="{{ url('public/assets/images/logo3.jpg') }}" alt="welcome"></a></h3>
                </div>
                <div class="col-sm-1 d-block d-md-none" style="width:10%">
                    <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                </div>
                <div id="menu" class="col-md-8 d-none d-md-block nav-item">
                    <ul>
                        <li><a rel="canonical" href="{{ route('welcome') }}">Home</a></li>
                        <li><a rel="canonical" href="{{ route('about_us') }}">About Us</a></li>
                        <li><a rel="canonical" href="{{ route('cources') }}">Courses</a></li>
                        <li><a rel="canonical" href="{{ route('batches') }}">Batches</a></li>
                        <!-- <li><a rel="canonical" href="{{ route('gallery') }}">Gallery</a></li> -->
                        <li><a rel="canonical" href="{{ route('contact_us') }}">Contact Us</a></li>
                        <li><a rel="canonical" class="btn btn-primary btn-sm" href="{{ route('register') }}">Register</a></li>
                        <li><a rel="canonical" class="btn btn-primary btn-sm text-white" data-toggle="modal" data-target="#myModal">Book Demo</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '3127621754196039');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=3127621754196039&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
</header>