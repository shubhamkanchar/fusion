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

<div class="row contact-rooo no-margin">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center">
                <div style="margin:50px" class="serv">
                    <h2 style="margin-top:10px;">Address</h2>
                    Office 101, 01st Floor, Stellar Spaces, Kharadi South Main Road, opp. Zensar, IT Park, Kharadi, Pune, Maharashtra 411014
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div style="margin:50px" class="serv">
                    <h2 style="margin-top:10px;">Contact Number</h2>
                    <p>+91 7498992609</p>
                    <p>+91 8380952885</p>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div style="margin:50px" class="serv">
                    <h2 style="margin-top:10px;">Email Address</h2>
                    <p>inquiry@fusion-institute.com</p>
                </div>
            </div>
            <div class="col-sm-6 mt-5">
                <div style="margin-top:0px;" class="row no-margin">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d867.1463250800094!2d73.9404905458347!3d18.550636051084744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c399308c4df7%3A0x56a3dd07e2356fa1!2sStellar%20Spaces!5e0!3m2!1sen!2sin!4v1662384040653!5m2!1sen!2sin" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-sm-6 mt-5">
                <form id="ContactForm" action="{{ route('request_mail') }}">
                    @csrf()
                    <input type="hidden" name="token" value="message">
                    <h2>Contact Form</h2>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label>Enter Name :</label>
                            <input type="text" placeholder="Enter Name" name="name" class="form-control input-sm" onkeydown="return /[a-zåäö ]/i.test(event.key)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label>Email Address :</label>
                            <input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label>Mobile Number:</label>
                            <input type="number" name="mobile" placeholder="Enter Mobile Number" class="form-control input-sm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label>Enter Message:</label>
                            <textarea name="comment" rows="5" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-circle-o-notch fa-spin hidden mr-2 fa-spin-contact"></i>Send Message</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection

@section('jspage')
<script>
    $(document).ready(function() {
        $("#ContactForm").validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true
                },
                mobile: {
                    required: true,
                    digits: true,
                    maxlength: 10,
                    minlength: 10
                },
                comment: {
                    required: true
                },
            },
            messages: {
                name: {
                    required: 'Enter name',
                },
                email: {
                    required: 'Enter email'
                },
                mobile: {
                    required: 'Enter Mobile',
                    digits: 'Enter valid mobile'
                },
                comment: {
                    required: "Please enter message we would like to hear from you"
                },
            },
            submitHandler: function(form, e) {
                $('.fa-spin-contact').removeClass('hidden');
                e.preventDefault();
                var form = $(form);
                var actionUrl = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: actionUrl,
                    data: form.serialize(), // serializes the form's elements.
                    success: function(data) {
                        $('.fa-spin-contact').addClass('hidden');
                        if (data.flag == 'success') {
                            toastr.success(data.msg);
                            document.getElementById("ContactForm").reset();
                        } else if (data.flag == 'error') {
                            toastr.success(data.msg);
                        }
                    }
                });
            }
        });

        // $("#callback").submit(function(e) {
        //     e.preventDefault();


        // });
    });
</script>
@endsection