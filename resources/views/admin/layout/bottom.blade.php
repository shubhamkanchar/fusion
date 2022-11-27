<!-- Bootstrap core JavaScript-->
<script src="{{url('public/theme/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{url('public/theme/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{url('public/theme/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{url('public/theme/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<!-- <script src="{{url('public/theme/vendor/chart.js/Chart.min.js') }}"></script> -->

<!-- Page level custom scripts -->
<!-- <script src="{{url('public/theme/js/demo/chart-area-demo.js') }}"></script>
<script src="{{url('public/theme/js/demo/chart-pie-demo.js') }}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.2.0/js/dataTables.dateTime.min.js"></script>
<script>
     $(document).ready(function(){
        
        @if(Session::get('success'))

            toastr.success('{{ Session::get("success") }}');

        @elseif(Session::get('error'))

            toastr.error('{{ Session::get("error") }}');
            
        @endif

    });
</script>