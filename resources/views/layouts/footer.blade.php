@php
$course=App\Models\cources::all();
@endphp
<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Book Demo Class</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form id="visitscheduleform" action="{{ route('request_mail') }}">
                        @csrf()
                        <input type="hidden" name="token" value="visit">
                        <h2 style="font-size:18px">Contact Form</h2>
                        <div class="row form-group">
                            <label> Name :</label>
                            <input type="text" placeholder="Enter Name" name="name" class="form-control input-sm">
                        </div>
                        <div class="form-group row">
                            <label>Email Address :</label>
                            <input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm">
                        </div>
                        <div class="row form-group">
                            <label>Mobile Number:</label>
                            <input type="text" name="mobile" placeholder="Enter Mobile Number" class="form-control input-sm">
                        </div>
                        <div class="row form-group">
                            <label>Select course:</label>
                            <select name="course" rows="5" placeholder="Enter select course" class="form-control input-sm">
                                <option></option>
                                @foreach($course as $c)
                                <option>{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success"><i class="fa fa-circle-o-notch fa-spin hidden mr-2 fa-spin-visit"></i> Book</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 about">
                <h2>About Us</h2>
                <p>We are here to upgrade you.</p>
                <div class="foot-address">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="addet">
                        Office: 505 , 6th Floor Vaishnavi Building Lane No 2 Near Vikas Mitra Mandal Karvenagar Pune 411052
                    </div>
                </div>
                <div class="foot-address">
                    <div class="icon">
                        <i class="far fa-envelope-open"></i>
                    </div>
                    <div class="addet">
                        fusionpune1@gmail.com
                    </div>
                </div>
                <div class="foot-address">
                    <div class="icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="addet">
                        +91 7498992609
                    </div>
                </div>
            </div>

            <div class="col-md-2 glink">
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

            <div class="col-md-4 tags">
                <h2>Social Connect</h2>
                <ul>
                    <li><a><img style="width:50px" src="{{ url('public/assets/images/Google_plus.png') }}"></a></li>
                    <li><a><img style="width:50px" src="{{ url('public/assets/images/twitter.png') }}"></a></li>
                    <li><a target="_blank" href="https://www.facebook.com/111239338082168/posts/130299146176187/"><img style="width:50px" src="{{ url('public/assets/images/facebook.png') }}"></a></li>
                    <li><a target="_blank" href="https://api.whatsapp.com/send/?phone={{ env('WHATSAPP_NO') }}&text={{ urlencode('I am intersted in course you provide') }}"><img style="width:50px" src="{{ url('public/assets/images/whatsapp.png') }}"></a></li>

                    <li><a><img style="width:50px" src="{{ url('public/assets/images/youtube.png') }}"></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/p/CZ1-eICPucZ/"><img style="width:50px" src="{{ url('public/assets/images/instagram.png') }}"></a></li>

                </ul>
            </div>

            <div class="col-md-3 fotblog">
                <h2>Request-a-Callback</h2>
                <form id="callback" action="{{ route('request_mail') }}">
                    @csrf()
                    <input type="hidden" name="token" value="callback">
                    <div class="row">
                        <label>Enter Name :</label>
                        <div class="col-sm-12"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"></div>
                    </div>
                    <div class="row">
                        <label>Email Address :</label>
                        <div class="col-sm-12"><input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm"></div>
                    </div>
                    <div class="row">
                        <label>Mobile Number:</label>
                        <div class="col-sm-12"><input type="number" name="mobile" placeholder="Enter Mobile Number" class="form-control input-sm"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <button class="btn btn-primary"><i class="fa fa-circle-o-notch fa-spin hidden mr-2 fa-spin-call"></i> Request Callback</button>
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
            <a target="_blank" href="https://www.instagram.com/p/CZ1-eICPucZ/"><i class="text-white fab fa-instagram"></i></a>
            <a target="_blank" href="https://api.whatsapp.com/send/?phone={{ env('WHATSAPP_NO') }}&text={{ urlencode('I am intersted in course you provide') }}"><i class="text-white fab fa-whatsapp"></i></a>
            <a><i class="text-white fab fa-twitter"></i></a>
            <a target="_blank" href="https://www.facebook.com/111239338082168/posts/130299146176187/"><i class=" text-white fab fa-facebook-f"></i></a>
        </span>
    </div>
</div>