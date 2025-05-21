@include('components.head')

    <!-- BEGIN: Body-->

    <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
        data-menu="vertical-menu-modern" data-col="">

       @include("components.sidebar")

        <!-- BEGIN: Content-->
        <div class="app-content content ">
            <div class="content-overlay"></div>
                 @include($template);
        </div>
        <!-- END: Content-->
        @include('components.scripts')
    </body>

</html>