@extends('layouts.index')
@section('content')
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Contact Us</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Contact Us</li>
            </ul>
        </div>
    </div>
</div>

<!-- ######## Page  Title End ####### -->

<div style="margin-top:0px;" class="row no-margin">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.8902346910813!2d73.81871191400049!3d18.48863052493224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bfe631fc9f7f%3A0x40bae74e7709affa!2sfusionpune!5e0!3m2!1sen!2sin!4v1648118236008!5m2!1sen!2sin" style='width:100%'; height="610" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
</div>

<div class="row contact-rooo no-margin">
    <div class="container">
        <div class="row">
            <div style="padding:20px" class="col-sm-6">
                <h2 style="font-size:18px">Contact Form</h2>
                <div class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>Enter Name :</label></div>
                    <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"></div>
                </div>
                <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>Email Address :</label></div>
                    <div class="col-sm-8"><input type="text" name="name" placeholder="Enter Email Address" class="form-control input-sm"></div>
                </div>
                <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>Mobile Number:</label></div>
                    <div class="col-sm-8"><input type="text" name="name" placeholder="Enter Mobile Number" class="form-control input-sm"></div>
                </div>
                <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>Enter Message:</label></div>
                    <div class="col-sm-8">
                        <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                    </div>
                </div>
                <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                    <div class="col-sm-8">
                        <button class="btn btn-success btn-sm">Send Message</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div style="margin:50px" class="serv">
                    <h2 style="margin-top:10px;">Address</h2>
                    Smart Hospital <br>
                    Daman Street<br>
                    K.K District<br>
                    Phone:+91 9159669599<br>
                    Email:info@smart-eye.in<br>
                    Website:www.smart-eye.com<br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jspage')

@endsection