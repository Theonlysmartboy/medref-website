@extends('layouts.front_layout.page_design')
@section('content')
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
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="#">Projects</a></li>
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
<!-- Project 1 -->
<div id="about" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- about content -->
            <div class="col-md-5">
                <div class="section-title">
                    <h2 class="title">KEEPING HER HIV FREE</h2></div>
                <div class="about-content">
                    <p>Young people are the fastest growing segment of the 
                        population in both poor and middle-income developing 
                        countries, and they are almost always evident in the 
                        status of their sexual and reproductive health (SRH) 
                        and rights; particularly for girls and young women. </p>
                    <p>Girls and young women in developing countries face 
                        systematic disadvantages according to a wide range of 
                        indicators, including health and nutrition, education, 
                        protection, labor force participation and the burden 
                        of household tasks1. Each year, 1in 3 girls, an 
                        estimated 14.2 million, are married before the age of 
                        18. 1in 9 girls are married before the age of 15. Child 
                        marriage is a human rights violation, and form of 
                        violence that denies millions of girls their childhood 
                        as well as put them at risk of early pregnancy.</p>
                </div>
            </div>
            <!-- /about content -->

            <!-- about video -->
            <div class="col-md-offset-1 col-md-6">
                <a href="#" class="about-video">
                    <i class="play-icon fa fa-play"></i>
                    <img src="{{asset('images/front_end/background-2.jpg')}}" alt="">
                </a>
            </div>
            <!-- /about video -->
        </div>
    </div>
    <!-- Container-->

</div>
<!-- End Project 1 -->
<!-- Project 2 -->
<div id="about" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- about content -->
            <div class="col-md-5">
                <div class="section-title">
                    <h2 class="title">COMMUNITY RESOURCE CENTER</h2></div>
                <div class="about-content">
                    <p>The idea behind the creation of a Community resource 
                        centre was to provide a safe haven for community youths; 
                        a place where they can grow and develop skills including 
                        information and knowledge on sexual reproductive health 
                        issues, especially HIV/AIDS. </p>
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
    </div>
    <!-- Container-->

</div>
<!-- end Project 2 -->
<div id="about" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- about content -->
            <div class="col-md-5">
                <div class="section-title">
                    <h2 class="title">COMMUNITY HEALTH CARE</h2></div>
                <div class="about-content">
                    <p>Most community healthcare takes place in people’s homes. 
                        Teams of nurses and therapists coordinate care, working 
                        with professions including GPs and social care. 
                        Additionally community health provides preventative and 
                        health improvement services, often with partners from 
                        local government and the other sector. </p>
                </div>
            </div>
            <!-- /about content -->

            <!-- about video -->
            <div class="col-md-offset-1 col-md-6">
                <a href="#" class="about-video">
                    <i class="play-icon fa fa-play"></i>
                    <img src="{{asset('images/front_end/background-4.jpg')}}" alt="">
                </a>
            </div>
            <!-- /about video -->
        </div>
    </div>
    <!-- Container-->

</div>
<!-- end Project 3 -->
@endsection