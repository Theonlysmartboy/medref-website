<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo $title ?></title>
        <!-- fav icons-->
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/icons/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/icons/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="/{{asset('images/icons/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('images/icons/site.webmanifest')}}">
        <link rel="mask-icon" href="{{asset('images/icons/safari-pinned-tab.svg')}}" color="#5bbad5">
        <link rel="shortcut icon" href="{{asset('images/icons/favicon.ico')}}">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="{{asset('images/icons/browserconfig.xml')}}">
        <meta name="theme-color" content="#ffffff">
        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">
        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="{{asset('css/front_end/bootstrap.min.css')}}" />
        <!-- Owl Carousel -->
        <link type="text/css" rel="stylesheet" href="{{asset('css/front_end/owl.carousel.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('css/front_end/owl.theme.default.css')}}" />
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="{{asset('css/front_end/font-awesome.min.css')}}">
        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="{{asset('css/front_end/style.css')}}" />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->
    </head>
    <body>
        @include('layouts.front_layout.header')
        @yield('content')
        @include('layouts.front_layout.footer')
        <!-- jQuery Plugins -->
        <script src="{{asset('js/front_end/jquery.min.js')}}"></script>
        <script src="{{asset('js/front_end/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/front_end/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/front_end/jquery.stellar.min.js')}}"></script>
        <script src="{{asset('js/front_end/main.js')}}"></script>

    </body>
</html>