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
                        <li><a href="#">About</a></li>
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
<!-- ABOUT -->
<div id="about" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- about content -->
            <div class="col-md-5">
                <div class="section-title">
                    <h2 class="title">Who we are</h2>
                    <p class="sub-title">Medical & Eco-Development Research Foundation (MedRef)
                    </p>
                </div>
                <div class="about-content">
                    <p>We are passionate about the community and their health. We work tirelessly to ensure that the health of teenage girls, mothers and the community as a whole is well taken care of .</p>
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
        <h3 class="sub-title text-center text-success">Vision Statement <span class="fa fa-binoculars"></span></h3>
        <p class="text-center">To set the standard for research, health, healing 
            and comfort and in providing quality, innovative support to the communities.</p>

        <h3 class="sub-title text-center text-success">Mission Statement</h3>
        <p class="text-center">To inspire hope, and contribute to health and enhance
            quality of life for all by integrated positive social change and deliver 
            value <br>to communities through service, information, advocacy and research.</p>
        <h3 class="sub-title text-center text-success">Core Values</h3>
        <p class="text-center">At MEDReF, our core values are:</p>
        <ul class="text-center">
            <li>integrity</li>
            <li>Caring</li>
            <li>Safety</li>
            <li>Excellence</li>
        </ul>
        <h2 class="title text-center">Five Key Pillars of Organization</h2>
        <hr class="hr-success">
        <h3 class="sub-title text-center text-success"> Disease Control and Prevention</h3>
        <p>Working as a team, our organization provides appropriate services and 
            interventions to reduce and manage incidences of diseases in the 
            communities we work with as a basis of building the foundation for a 
            healthy future. Monitor the incidence of reportable diseases in the 
            community while conducts surveillance and case investigation of all 
            reportable diseases, outbreak management, contact identification, 
            patient and community education, and consultation to physicians, 
            infection control practitioners, schools and day care providers</p>
        <h3 class="sub-title text-center text-success">Community Capacity Building for Sustainability</h3>
        <p>MEDReF empowerment pillar involves communities in activities that enhances 
            their capacity and strengthens positive attitude, willingness, self-motivation, 
            enthusiasm, optimism andself-reliance. Thisempowers communities now and post
            external funding and inspires confidence </p>
        <h3 class="sub-title text-center text-success">Adolescent, Maternal and Child Health</h3>
        <p>MEDReF works to improve quality of care for adolescents and young adults 
            that are at an increased threat of infections due to their exposure to 
            risky behaviors and thus seeks to offer optimal health solutions for this 
            special group. We also support and delivers integrated, evidence-based and 
            cost-effective care for mothers and babies during pregnancy, childbirth and
            the postpartum period through investment in health facilities and health 
            systems strengthening. </p>
        <h3 class="sub-title text-center text-success">Emergency Preparedness Response</h3>
        <p>MEDReF Invest in turning awareness of the natural hazards and risks faced by
            a community into actions that improve its capability to respond to and 
            recover from disasters.  Our emergency response plan involves conducting a 
            risk assessment to identify potential emergency scenarios. An understanding 
            of what can happen to enables one to determine resource requirements and to 
            develop plans and procedures to counter emergency scenarios. </p>
        <p>MEDReF also takes actions that are critical in the initial minutes of an 
            emergency when it occurs.When it occurs, the first priority is always life 
            safety. The second priority is the stabilization of the incident.</p>
        <h3 class="sub-title text-center text-success">Sustainable Environmental Conservation </h3>
        <p>MEDReF works towards protection, preservation, management and restoration of 
            natural environments and the ecological communities that inhabit them. We 
            promote protection of our planet and conservation of natural resources so 
            that every living thing can have an improved quality of life.</p>
    </div>
    <!-- /container -->
</div>
<!-- /ABOUT -->
@endsection