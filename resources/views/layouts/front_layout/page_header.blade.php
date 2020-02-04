<!-- HEADER -->
<header>
    <!-- NAVGATION -->
    <nav id="main-navbar">
        <div class="container">
            <div class="navbar-header">
                <!-- Logo -->
                <div class="navbar-brand">
                    <a class="logo" href="{{route('index')}}"><img src="{{asset('images/front_end/logo.png')}}" alt="logo"></a>
                </div>
                <!-- Logo -->

                <!-- Mobile toggle -->
                <button class="navbar-toggle-btn">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- Mobile toggle -->

                <!-- Mobile Search toggle -->
                <button class="search-toggle-btn">
                    <i class="fa fa-search"></i>
                </button>
                <!-- Mobile Search toggle -->
            </div>

            <!-- Search -->
            <div class="navbar-search">
                <button class="search-btn"><i class="fa fa-search"></i></button>
                <div class="search-form">
                    <form>
                        <input class="input" type="text" name="search" placeholder="Search">
                    </form>
                </div>
            </div>
            <!-- Search -->

            <!-- Nav menu -->
            <ul class="navbar-menu nav navbar-nav navbar-right">
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li class="has-dropdown"><a href="#">What we Do</a>
                    <ul class="dropdown">
                        <li><a href="">Priority Focus Areas</a></li>
                        <li><a href="">Populations We Serve</a></li>
                        <li><a href="">Our Approach</a></li>
                    </ul>
                </li>
                <li class="has-dropdown"><a href="#">Get Involved</a>
                    <ul class="dropdown">
                        <li><a href="{{route('register_self')}}">Partner with us</a></li>
                        <li><a href="{{route('register_self')}}">Work With Us</a></li>
                        <li><a href="{{route('register_self')}}">Donate To our Noble Course</a></li>
                    </ul>
                </li>
                <li class="has-dropdown"><a href="#">Resources</a>
                    <ul class="dropdown">
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="{{route('event')}}">Events</a></li>
                    </ul>
                </li>
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
            <!-- Nav menu -->
        </div>
    </nav>
    <!-- /NAVGATION -->
    <!-- Page Header -->
    <div id="page-header">
        <!-- section background -->
        <div class="section-bg" style="background-image: url({{asset('images/front_end/background-2.jpg')}});"></div>
        <!-- /section background -->

        <!-- page header content -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-content">
                        <h1>Single Cause Page</h1>
                        <ul class="breadcrumb">
                            <li><a href="">Home</a></li>
                            <li><a href="#">Causes</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header content -->
    </div>
    <!-- /Page Header -->
</header>
<!-- /HEADER -->