<header class="main-header">
    <div class="d-flex align-items-center logo-box justify-content-start">
        <a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent"
            data-toggle="push-menu" role="button">
            <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span
                    class="path3"></span></span>
        </a>
        <!-- Logo -->
        <a href="index.html" class="logo">
            <!-- logo-->

        </a>
    </div>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <div class="app-menu">
            <ul class="header-megamenu nav">
                <li class="btn-group nav-item d-md-none">
                    <a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu"
                        role="button">
                        <span class="icon-Align-left"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span></span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">
                <li class="btn-group nav-item d-lg-inline-flex d-none">
                    <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen"
                        title="Full Screen">
                        <i class="icon-Expand-arrows"><span class="path1"></span><span
                                class="path2"></span></i>
                    </a>
                </li>
                <!-- Notifications -->

                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="#" class="waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" title="User">
                        <i class="icon-User"><span class="path1"></span><span
                                class="path2"></span></i>
                    </a>
                    <ul class="dropdown-menu animated flipInX">
                        <li class="user-body">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"
                                onclick="event.preventDefault(); document.getElementById('logout_form').submit();"><i
                                    class="ti-lock text-muted me-2"></i> Logout</a>
                            <form action="{{ route('logout') }}" method="POST" id="logout_form">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
    </nav>
</header>
