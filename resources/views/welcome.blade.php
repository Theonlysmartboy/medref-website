@extends('layouts.front_layout.landing_page_design')
@section('content')	
<!-- ABOUT -->
<div id="about" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- about content -->
            <div class="col-md-5">
                <div class="section-title">
                    <h2 class="title">About Us</h2>
                    <p class="sub-title">We are passionate about the community and their health.</p>
                </div>
                <div class="about-content">
                    <p>We work tirelessly to ensure that the health of teenage girls, mothers and the community as a whole is well taken care of .</p>
                    <a href="{{route('about')}}" class="primary-button">Read More</a>
                </div>
            </div>
            <!-- /about content -->

            <!-- about video -->
            <div class="col-md-offset-1 col-md-6">
                <a href="#" class="about-video">
                    <i class="play-icon fa fa-play"></i>
                    <img src="{{asset('images/front_end/about.jpg')}}" alt="">
                </a>
            </div>
            <!-- /about video -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /ABOUT -->
<!-- NUMBERS -->
<div id="numbers" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- number -->
            <div class="col-md-3 col-sm-6">
                <div class="number">
                    <i class="fa fa-smile-o"></i>
                    <h3>-</h3>
                    <span>Donors</span>
                </div>
            </div>
            <!-- /number -->

            <!-- number -->
            <div class="col-md-3 col-sm-6">
                <div class="number">
                    <i class="fa fa-heartbeat"></i>
                    <h3>-</h3>
                    <span>Trees Planted</span>
                </div>
            </div>
            <!-- /number -->

            <!-- number -->
            <div class="col-md-3 col-sm-6">
                <div class="number">
                    <i class="fa fa-money"></i>
                    <h3>-</h3>
                    <span>Donated</span>
                </div>
            </div>
            <!-- /number -->

            <!-- number -->
            <div class="col-md-3 col-sm-6">
                <div class="number">
                    <i class="fa fa-handshake-o"></i>
                    <h3>-</h3>
                    <span>Volunteers</span>
                </div>
            </div>
            <!-- /number -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /NUMBERS -->
<!-- CAUSESS -->
<div id="causes" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-8 col-md-offset-2">
                <div class="section-title text-center">
                    <h2 class="title">Our Projects</h2>
                    <p class="sub-title">We are currently engaged in some projects like.</p>
                </div>
            </div>
            <!-- section title -->

            <!-- causes -->
            <div class="col-md-4">
                <div class="causes">
                    <div class="causes-img">
                        <a href="{{route('project')}}">
                            <img src="{{asset('images/front_end/about.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="causes-progress">
                        <div class="causes-progress-bar">
                            <div style="width: 7%;">
                                <span>0%</span>
                            </div>
                        </div>
                        <div>
                            <span class="causes-raised">Raised: <strong>0.000Ksh</strong></span>
                            <span class="causes-goal">Goal: <strong>0.000Ksh</strong></span>
                        </div>
                    </div>
                    <div class="causes-content">
                        <h3><a href="{{route('project')}}">COMMUNITY RESOURCE CENTER</a></h3>
                        <p>The idea behind the creation of a Community resource centre was to provide a safe haven for community youths; a place where they can grow and develop skills including information and knowledge on sexual reproductive health issues, especially HIV/AIDS.</p>
                        <a href="{{route('register_self')}}" class="primary-button causes-donate">Donate Now</a>
                    </div>
                </div>
            </div>
            <!-- /causes -->

            <!-- causes -->
            <div class="col-md-4">
                <div class="causes">
                    <div class="causes-img">
                        <a href="{{route('project')}}">
                            <img src="{{asset('images/front_end/background-2.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="causes-progress">
                        <div class="causes-progress-bar">
                            <div style="width: 3%;">
                                <span>0%</span>
                            </div>
                        </div>
                        <div>
                            <span class="causes-raised">Raised: <strong>0.000KSH</strong></span>
                            <span class="causes-goal">Goal: <strong>0.000KSH</strong></span>
                        </div>
                    </div>
                    <div class="causes-content">
                        <h3><a href="{{route('project')}}">KEEPING HER HIV FREE</a></h3>
                        <p>Young people are the fastest growing segment of the population in both poor and middle-income developing countries, and they are almost always evident in the status of their sexual and reproductive health (SRH) and rights; particularly for girls and young women. </p>
                        <a href="{{route('register_self')}}" class="primary-button causes-donate">Donate Now</a>
                    </div>
                </div>
            </div>
            <!-- /causes -->

            <!-- causes -->
            <div class="col-md-4">
                <div class="causes">
                    <div class="causes-img">
                        <a href="{{route('project')}}">
                            <img src="{{asset('images/front_end/background-4.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="causes-progress">
                        <div class="causes-progress-bar">
                            <div style="width: 2%;">
                                <span>0%</span>
                            </div>
                        </div>
                        <div>
                            <span class="causes-raised">Raised: <strong>0.000KSH</strong></span>
                            <span class="causes-goal">Goal: <strong>0.000KSH</strong></span>
                        </div>
                    </div>
                    <div class="causes-content">
                        <h3><a href="{{route('project')}}">COMMUNITY HEALTH CARE</a></h3>
                        <p>Most community healthcare takes place in people’s homes. Teams of nurses and therapists coordinate care, working with professions including GPs and social care. Additionally community health provides preventative and health improvement services, often with partners from local government and the other sector</p>
                        <a href="{{route('register_self')}}" class="primary-button causes-donate">Donate Now</a>
                    </div>
                </div>
            </div>
            <!-- /causes -->

            <div class="clearfix visible-md visible-lg"></div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /CAUSESS -->
<!-- CTA -->
<div id="cta" class="section">
    <!-- background section -->
    <div class="section-bg" style="background-image: url({{asset('images/front_end/background-1.jpg')}});" data-stellar-background-ratio="0.5"></div>
    <!-- /background section -->

    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- cta content -->
            <div class="col-md-offset-2 col-md-8">
                <div class="cta-content text-center">
                    <h1>Become A Volunteer</h1>
                    <p class="lead">We appreciate volunteers for they make us make the biggest impact in the community.</p>
                    <a href="{{route('register_self')}}" class="primary-button">Join Us Now!</a>
                </div>
            </div>
            <!-- /cta content -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /CTA -->
<!-- EVENTS -->
<div id="events" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-8 col-md-offset-2">
                <div class="section-title text-center">
                    <h2 class="title">Upcoming Events</h2>
                    <p class="sub-title">We always have things happening. Check out some of them</p>
                </div>
            </div>
            <!-- /section title -->
            <!-- event -->
            <div class="col-md-6">
                <div class="event">
                    <div class="event-img">
                        <a href="#">
                            <img src="{{asset('images/front_end/event-1.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="event-content">
                        <h3><a href="#"></a></h3>
                        <ul class="event-meta">
                            <li><i class="fa fa-clock-o"></i> </li>
                            <li><i class="fa fa-map-marker"></i> </li>
                        </ul>
                        <p>.</p>
                    </div>
                </div>
            </div>
            <!-- /event -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /EVENTS -->

<!-- TESTIMONIAL -->
<div id="testimonial" class="section">
    <!-- background section -->
    <div class="section-bg" style="background-image: url({{asset('images/front_end/background-2.jpg')}});" data-stellar-background-ratio="0.5"></div>
    <!-- /background section -->

    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Testimonial owl -->
            <div class="col-md-12">
                <div id="testimonial-owl" class="owl-carousel owl-theme">
                    <!-- testimonial -->
                    <div class="testimonial">
                        <div class="testimonial-meta">
                            <div class="testimonial-img">
                                <img src="{{asset('images/front_end/avatar-1.jpg')}}" alt="">
                            </div>
                            <h3>John Doe</h3>
                            <span>Volunteer</span>
                        </div>
                        <div class="testimonial-quote">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </blockquote>
                        </div>
                    </div>
                    <!-- /testimonial -->

                    <!-- testimonial -->
                    <div class="testimonial">
                        <div class="testimonial-meta">
                            <div class="testimonial-img">
                                <img src="{{asset('images/front_end/avatar-2.jpg')}}" alt="">
                            </div>
                            <h3>John Doe</h3>
                            <span>Volunteer</span>
                        </div>
                        <div class="testimonial-quote">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </blockquote>
                        </div>
                    </div>
                    <!-- /testimonial -->

                    <!-- testimonial -->
                    <div class="testimonial">
                        <div class="testimonial-meta">
                            <div class="testimonial-img">
                                <img src="{{asset('images/front_end/avatar-1.jpg')}}" alt="">
                            </div>
                            <h3>John Doe</h3>
                            <span>Volunteer</span>
                        </div>
                        <div class="testimonial-quote">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </blockquote>
                        </div>
                    </div>
                    <!-- /testimonial -->

                    <!-- testimonial -->
                    <div class="testimonial">
                        <div class="testimonial-meta">
                            <div class="testimonial-img">
                                <img src="{{asset('images/front_end/avatar-2.jpg')}}" alt="">
                            </div>
                            <h3>John Doe</h3>
                            <span>Volunteer</span>
                        </div>
                        <div class="testimonial-quote">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </blockquote>
                        </div>
                    </div>
                    <!-- /testimonial -->
                </div>
            </div>
            <!-- /Testimonial owl -->
        </div>
        <!-- /Row -->
    </div>
    <!-- /container -->
</div>
<!-- /TESTIMONIAL -->

<!-- BLOG -->
<div id="blog" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-8 col-md-offset-2">
                <div class="section-title text-center">
                    <h2 class="title">Our Blog</h2>
                    <p class="sub-title">No blogs here yet Please check out later.</p>
                </div>
            </div>
            <!-- /section title -->
            <!-- blog -->
            <div class="col-md-4">
                <div class="article">
                    <div class="article-img">
                        <a href="#">
                            <img src="{{asset('images/front_end/post-1.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="article-content">
                        <h3 class="article-title"><a href=""></a></h3>
                        <ul class="article-meta">
                            <li>Posted on</li>
                            <li>Posted By</li>
                            <li>0 Comments</li>
                        </ul>
                        <p>.</p>
                    </div>
                </div>
            </div>
            <!-- /blog -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BLOG -->
@endsection