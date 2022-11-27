<script src="{{ url('public/assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ url('public/assets/js/popper.min.js') }}"></script>
<script src="{{ url('public/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ url('public/assets/plugins/slider/js/owl.carousel.min.js') }}"></script>
<script src="{{ url('public/assets/js/script.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script>
    $(document).ready(function() {
        $("#callback").validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    email:true
                },
                mobile: {
                    required: true,
                    digits: true,
                    maxlength: 10,
                    minlength: 10
                },
                course:{
                    required:true,
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
                course:{
                    required:'Please select course',
                }

            },
            submitHandler: function(form, e) {
                $('.fa-spin-call').removeClass('hidden');
                e.preventDefault();
                var form = $(form);
                var actionUrl = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: actionUrl,
                    data: form.serialize(), // serializes the form's elements.
                    success: function(data) {
                        $('.fa-spin-call').addClass('hidden');
                        if (data.flag == 'success') {
                            toastr.success(data.msg);
                            document.getElementById("callback").reset();
                        } else if (data.flag == 'error') {
                            toastr.success(data.msg);
                        }
                    }
                });
            }
        });

        $("#visitscheduleform").validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    email:true
                },
                mobile: {
                    required: true,
                    digits: true,
                    maxlength: 10,
                    minlength: 10
                },
                course:{
                    required:true,
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
                course:{
                    required:'Please select course',
                }
            },
            submitHandler: function(form, e) {
                $('.fa-spin-visit').removeClass('hidden');
                e.preventDefault();
                var form = $(form);
                var actionUrl = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: actionUrl,
                    data: form.serialize(), // serializes the form's elements.
                    success: function(data) {
                        if (data.flag == 'success') {
                            $('.fa-spin-visit').addClass('hidden');
                            toastr.success(data.msg);
                            document.getElementById("visitscheduleform").reset();
                            $('#myModal').modal('hide');
                        } else if (data.flag == 'error') {
                            toastr.success(data.msg);
                        }
                    }
                });
            }
        });
    });
</script>