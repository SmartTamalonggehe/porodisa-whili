    @include('pimpinan.layouts.head')

    @include('pimpinan.layouts.head')
              
        <body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
	
        <div class="wrapper">
        <div id="loader"></div>
    
     @include('pimpinan.layouts.navbar')

        @yield('main')

    @include('pimpinan.layouts.sidebar')

    @include('pimpinan.layouts.footer')

    @include('pimpinan.layouts.script')
  	

    </body>
    </html>

