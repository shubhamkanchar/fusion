@extends('layouts.index')
@section('content')
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Contact Us</h2>
            <ul>
                <li> <a href="{{ route('welcome') }}"><i class="fas fa-home"></i> Home</a></li>
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
                <div class="serv m-5">
                    <h2 class="mt-2">Address</h2>
                    Office 101, 01st Floor, Stellar Spaces, Kharadi South Main Road, opp. Zensar, IT Park, Kharadi, Pune, Maharashtra 411014
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="m-5">
                    <h2 class="mt-2">Contact Number</h2>
                    <p>7498992609</p>
                    <p>7741817273</p>
                    <p>7719987273</p>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="m-5" class="serv">
                    <h2 class="mt-2">Email Address</h2>
                    <p>inquiry@fusion-institute.com</p>
                </div>
            </div>
            <div class="col-sm-6 mt-5">
                <div class="mt-0" class="row no-margin">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d867.1463250800094!2d73.9404905458347!3d18.550636051084744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c399308c4df7%3A0x56a3dd07e2356fa1!2sStellar%20Spaces!5e0!3m2!1sen!2sin!4v1662384040653!5m2!1sen!2sin" width="530" height="600" class="border border-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-sm-6 mt-5">
                <form id="ContactForm" action="{{ route('request_mail') }}">
                    @csrf()
                    <input type="hidden" name="token" value="message">
                    <h2>Contact Form</h2>
                    <div class=" row">
                        <div class="col-sm-12">
                            <label>Enter Name :</label>
                            <input type="text" placeholder="Enter Name" name="name" class="form-control input-sm" onkeydown="return /[a-zåäö ]/i.test(event.key)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Email Address :</label>
                            <input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Mobile Number:</label>
                            <input type="number" name="mobile" placeholder="Enter Mobile Number" class="form-control input-sm">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Enter Message:</label>
                            <textarea name="comment" rows="5" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                        </div>
                    </div>
                    @php
                    $course=App\Models\cources::all();
                    @endphp
                    <div class=" row">
                        <div class="col-sm-12">
                            <label>Select Course you are interested in :</label>
                            <select name="course" rows="5" placeholder="Enter select course" class="form-control input-sm">
                                <option></option>
                                @foreach($course as $c)
                                <option>{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-circle-notch fa-spin hidden mr-2 fa-spin-contact"></i>Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-6 mt-5">
                <a class="text-primary" href="{{ route('refund-policy') }}">Refund & Course Rescheduling</a>
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
                course: {
                    required: true,
                }
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
                course: {
                    required: 'Please select course',
                }
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