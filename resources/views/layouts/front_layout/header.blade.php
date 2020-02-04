<!-- HEADER -->
<header id="home">
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

    <!-- HOME OWL -->
    <div id="home-owl" class="owl-carousel owl-theme">
        <!-- home item -->
        <div class="home-item">
            <!-- section background -->
            <div class="section-bg" style="background-image: url({{asset('images/front_end/background-1.jpg')}});"></div>
            <!-- /section background -->

            <!-- home content -->
            <div class="home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="home-content">
                                <h1>COMMUNITY RESOURCE CENTER</h1>
                                <p class="lead">Work is on going to build a resource center that will provide information to our community on how to protect the environment and maintain a healthy lifestyle</p>
                                <a href="{{route('contact')}}" class="primary-button">CONTRIBUTE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /home content -->
        </div>
        <!-- /home item -->

        <!-- home item -->
        <div class="home-item">
            <!-- Background Image -->
            <div class="section-bg" style="background-image: url({{asset('images/front_end/background-2.jpg')}});"></div>
            <!-- /Background Image -->

            <!-- home content -->
            <div class="home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="home-content">
                                <h1>KEEPING HER HIV FREE</h1>
                                <p class="lead">Young people are the fastest growing segment of 
                                    the population in both poor and middle-income developing countries,
                                    and they are almost always evident in the status of their sexual and
                                    reproductive health (SRH) and rights; particularly for girls and young
                                    women. </p>
                                <a href="{{route('service')}}" class="primary-button">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /home content -->
        </div>
        <!-- /home item -->

        <!-- home item -->
        <div class="home-item">
            <!-- Background Image -->
            <div class="section-bg" style="background-image: url({{asset('images/front_end/background-3.jpg')}});"></div>
            <!-- /Background Image -->

            <!-- home content -->
            <div class="home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="home-content">
                                <h1>Sustainable Environmental Conservation</h1>
                                <p class="lead">MEDReF works towards protection,
                                    preservation, management and restoration of 
                                    natural environments and the ecological 
                                    communities that inhabit them.</p>
                                <a href="{{route('service')}}" class="primary-button">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /home content -->
        </div>
        <!-- /home item -->

        <!-- home item -->
        <div class="home-item">
            <!-- Background Image -->
            <div class="section-bg" style="background-image: url({{asset('images/front_end/background-4.jpg')}});"></div>
            <!-- /Background Image -->

            <!-- home content -->
            <div class="home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="home-content">
                                <h1>Adolescent, Maternal and Child Health</h1>
                                <p class="lead">MEDReF works to improve quality
                                    of care for adolescents and young adults that
                                    are at an increased threat of infections due 
                                    to their exposure to risky behaviors and thus
                                    seeks to offer optimal health solutions for this special group.</p>
                                <a href="{{route('contact')}}" class="primary-button">Join Us Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /home content -->
        </div>
        <!-- /home item -->
    </div>
    <!-- /HOME OWL -->
</header>
<!-- /HEADER -->