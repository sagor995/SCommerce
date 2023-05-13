<!-- Bootstrap JS -->
<script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>

<script src="{{asset('backend/assets/js/dashboard-eCommerce.js')}}"></script>
<!--app JS-->
<script src="{{asset('backend/assets/js/app.js')}}"></script>
<script>
    new PerfectScrollbar('.product-list');
    new PerfectScrollbar('.customers-list');
</script>

<!-- Toastr Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript">
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>

<script type="text/javascript">
    @if(Session::has('message'))

    //Define and make default alert-type
    var type = "{{ Session::get('alert-type','info') }}";

    switch (type) {
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }

    @endif
</script>