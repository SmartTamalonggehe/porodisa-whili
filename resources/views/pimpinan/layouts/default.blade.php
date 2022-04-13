@include('pimpinan.layouts.head')

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
    <div class="wrapper">
        <div id="loader"></div>

        @include('pimpinan.layouts.navbar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Content Header (Page header) -->

                @yield('main')

                @include('pimpinan.layouts.sidebar')

            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        @include('pimpinan.layouts.footer')

        @include('pimpinan.layouts.script')

</body>

</html>
