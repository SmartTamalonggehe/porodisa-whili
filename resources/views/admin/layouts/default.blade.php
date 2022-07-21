@include('admin.layouts.head')

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
    {{-- dark-skin --}}
    <div class="wrapper">
        <div id="loader"></div>

        @include('admin.layouts.navbar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Content Header (Page header) -->

                @yield('main')

                @include('admin.layouts.sidebar')

            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        @include('admin.layouts.footer')

        @include('admin.layouts.script')

</body>

</html>
