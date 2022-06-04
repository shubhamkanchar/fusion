<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 about">
                <h2>About Us</h2>
                <p>Phasellus scelerisque ornare nisl sit amet pulvinar. Nunc non scelerisque augue. Proin et sollicitudin velit. </p>
                <div class="foot-address">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="addet">
                        BlueDart
                        Marthandam (K.K District)
                        Tamil Nadu, IND
                    </div>
                </div>
                <div class="foot-address">
                    <div class="icon">
                        <i class="far fa-envelope-open"></i>
                    </div>
                    <div class="addet">
                        info@smarteyeapps.com <br>
                        sales@smarteyeapps.com
                    </div>
                </div>
                <div class="foot-address">
                    <div class="icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="addet">
                        +23 323 43434 <br>
                        +1 3232 434 55
                    </div>
                </div>
            </div>

            <div class="col-md-3 glink">
                <h2>Link</h2>
                <ul>
                    <li><a href="{{ route('welcome') }}"><i class="fas fa-angle-double-right"></i>Home</a></li>
                    <li><a href="{{ route('about_us') }}"><i class="fas fa-angle-double-right"></i>About Us</a></li>
                    <li><a href="{{ route('cources') }}"><i class="fas fa-angle-double-right"></i>Cources</a></li>
                    <li><a href="{{ route('batches') }}"><i class="fas fa-angle-double-right"></i>Batches</a></li>
                    <li><a href="{{ route('gallery') }}"><i class="fas fa-angle-double-right"></i>Gallery</a></li>
                    <li><a href="{{ route('contact_us') }}"><i class="fas fa-angle-double-right"></i>Contact Us</a></li>
                </ul>
            </div>

            <div class="col-md-3 tags">
                <h2>Easy Tags</h2>
                <ul>
                    <li>Finance</li>
                    <li>Web Design</li>
                    <li>Internet Pro</li>
                    <li>Node Js</li>
                    <li>Java Swing</li>
                    <li>Angular Js</li>
                    <li>Vue Js</li>
                </ul>
            </div>

            <div class="col-md-3 fotblog">
                <h2>Request-a-Callback</h2>
                <form>
                    <div class="row">
                        <label>Enter Name :</label>
                        <div class="col-sm-12"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"></div>
                    </div>
                    <div class="row">
                        <label>Email Address :</label>
                        <div class="col-sm-12"><input type="text" name="name" placeholder="Enter Email Address" class="form-control input-sm"></div>
                    </div>
                    <div class="row">
                        <label>Mobile Number:</label>
                        <div class="col-sm-12"><input type="text" name="name" placeholder="Enter Mobile Number" class="form-control input-sm"></div>
                    </div>
                    <div class="row">
                        <label></label>
                        <div class="col-sm-8">
                            <button class="btn btn-primary">Request Callback</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
<div class="copy">
    <div class="container">
        <a href="{{ route('welcome') }}">2022 &copy; All Rights Reserved | Designed and Developed by {{ config('app.name', 'Laravel') }}</a>

        <span>
            <a><i class="fab fa-github"></i></a>
            <a><i class="fab fa-google-plus-g"></i></a>
            <a><i class="fab fa-pinterest-p"></i></a>
            <a><i class="fab fa-twitter"></i></a>
            <a><i class="fab fa-facebook-f"></i></a>
        </span>
    </div>
</div>