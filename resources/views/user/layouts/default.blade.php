@include('user.layouts.head')

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">
	<div id="loader"></div>

            @include('user.layouts.navbar')
              
        
            <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                <div class="container-full">
            <!-- Content Header (Page header) -->
		       

            @yield('main')

            @include('user.layouts.sidebar')

                    </div>
                <!-- end page content -->
                    </div>
                <!-- end page-wrapper -->

            @include('user.layouts.footer')

            @include('user.layouts.script')
  
</body>

</html>
