
        <!-- BEGIN: Vendor JS-->
        <script src="{{asset('assets/vendors/js/vendors.min.js')}}"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="{{asset('assets/vendors/js/editors/quill/katex.min.js')}}"></script>
        <script src="{{asset('assets/vendors/js/editors/quill/highlight.min.js')}}"></script>
        <script src="{{asset('assets/vendors/js/editors/quill/quill.min.js')}}"></script>
        <script src="{{asset('assets/vendors/js/extensions/toastr.min.js')}}"></script>
        <script src="{{asset('assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="{{asset('assets/js/core/app-menu.js')}}"></script>
        <script src="{{asset('assets/js/core/app.js')}}"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <script src="{{asset('assets/js/scripts/pages/app-email.js')}}"></script>
        <!-- END: Page JS-->

        <script>
            $(window).on('load', function () {
                if (feather) {
                    feather.replace({
                        width: 14,
                        height: 14
                    });
                }
            })
        </script>