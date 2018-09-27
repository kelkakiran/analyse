<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>{{ $title }}</title>

    <meta name="description" content="mobile first, app, web app, responsive, admin dashboard, flat, flat ui">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.v2.css" type="text/css">
    <link rel="stylesheet" href="/css/landing.css" type="text/css">
    <link rel="stylesheet" href="/css/font.css" type="text/css">

    <!--[if lt IE 9]>
    <script src="/js/ie/respond.min.js"></script>
    <script src="/js/ie/html5.js"></script>
    <![endif]-->

    <style type="text/css">
        .jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            z-index: 10000;
        }

        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>
</head>
<body data-spy="scroll" data-target="#header" class="landing" data-gr-c-s-loaded="true" style="" cz-shortcut-listen="true">

<header id="header" class="navbar navbar-fixed-top affix-top" data-spy="affix" data-offset-top="1">
    <div class="container">
        <button type="button" class="btn btn-link btn-sm pull-right visible-xs navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <i class="fa fa-bars fa-lg text-default"></i>
        </button>
        <a class="navbar-brand" href="/">Analysed</a>
        {{--<p class="navbar-text pull-left text-muted hidden-xs"><small><em>Base on Bootstrap 3</em></small></p>--}}
        <ul class="nav navbar-nav navbar-right collapse navbar-collapse">
            <li class=""> <a href="{{ route('login') }}">Login</a> </li>
            <li class=""> <a href="{{ route('register') }}">Register</a> </li>
            <li class=""> <a href="#about-us">About Us</a> </li>
        </ul>
    </div>
</header>
<section id="content">
    <div class="main-visual">
        <div class="bg-inverse">
            <div class="container text-center">
                <h1 class="animated fadeInUp">Lorel Ipsum is Simple a Dummy Text<br> This is a demo description.</h1>
                <p>
                    <a href="{{ route('register') }}" class="btn btn-lg btn-danger animated fadeInLeft m-l m-r m-b">Get Started</a>
                    <a href="{{ route('login') }}" class="btn btn-lg btn-primary animated fadeInRight m-l m-r m-b">Login</a>
                </p>
            </div>
        </div>
    </div>
    <div id="about">
        <div class="container">
            <p>&nbsp;</p>
            <div class="text-center m-large">
                <h2 class="font-thin" id="about-us">About Us</h2>
                <p>Lorel impus is a dummy text.</p>
            </div>
            <div class="text-center"> <img src="https://via.placeholder.com/1200x350"> </div>
            <div class="row m-large">
                <div class="col-lg-6 col-sm-6 media">
                    <span class="btn btn-circle btn-lg btn-default pull-left"><i class="fa fa-mobile-phone"></i></span>
                    <div class="media-body">
                        <h3 class="m-t-none">Demo</h3>
                        <p>Lorel Ipsum</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 media m-t-none">
                    <span class="btn btn-circle btn-lg btn-default pull-left"><i class="fa fa-signal"></i></span>
                    <div class="media-body">
                        <h3 class="m-t-none">Demo</h3>
                        <p>Lorel Ipsum</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-primary" id="features">
        <div class="container">
            <p>&nbsp;</p>
            <div class="text-center m-large">
                <h2 class="font-thin">Features</h2>
                <p>Lorel Ipsum</p>
            </div>
            <div class="row m-large">
                <div class="col-lg-4 col-sm-4">
                    <p class="text-center"><span class="btn btn-circle btn-lg btn-white"><i class="fa fa-bold"></i></span></p>
                    <div>
                        <h3 class="text-center">Bootstrap 3.0</h3>
                        <p>This project is based on Bootstrap 3. the sleek, intuitive, and powerful mobile-first front-end framework for faster and easier web development.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <p class="text-center"><span class="btn btn-circle btn-lg btn-warning"><i class="fa fa-bolt"></i></span></p>
                    <div>
                        <h3 class="text-center">Lightweight</h3>
                        <p>We only choose the lightweight plugins, but with rich functions. we use tiny components, css and js size is first consideration.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <p class="text-center"><span class="btn btn-circle btn-lg btn-danger"><i class="fa fa-html5"></i></span></p>
                    <div>
                        <h3 class="text-center">HTML5 &amp; CSS3</h3>
                        <p>first use HTML5 and CSS3 to build the components. the pages use header, nav, section to build the layout. this project have a good color scheme, can easy to change.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row m-large">
                <div class="col-lg-4 col-sm-4">
                    <p class="text-center"><span class="btn btn-circle btn-lg btn-primary"><i class="fa fa-tablet"></i></span></p>
                    <div>
                        <h3 class="text-center">Lorel impsum</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pharetra, mauris ut dapibus commodo, dolor arcu congue quam, et interdum neque lorem quis nisl. Cras luctus arcu a augue posuere ornare. Integer mauris libero, scelerisque at sodales a, venenatis et dui. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <p class="text-center"><span class="btn btn-circle btn-lg btn-default"><i class="fa fa-briefcase"></i></span></p>
                    <div>
                        <h3 class="text-center">Lorel impsum</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pharetra, mauris ut dapibus commodo, dolor arcu congue quam, et interdum neque lorem quis nisl. Cras luctus arcu a augue posuere ornare. Integer mauris libero, scelerisque at sodales a, venenatis et dui.  </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <p class="text-center"><span class="btn btn-circle btn-lg btn-success"><i class="fa fa-refresh"></i></span></p>
                    <div>
                        <h3 class="text-center">Lorel impsum</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pharetra, mauris ut dapibus commodo, dolor arcu congue quam, et interdum neque lorem quis nisl. Cras luctus arcu a augue posuere ornare. Integer mauris libero, scelerisque at sodales a, venenatis et dui. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light" id="screenshot">
        <div class="container gallery">
            <div class="row m-large gallery">
                <div class="col-lg-3 col-6"> <a href="#" class="thumbnail"><img src="https://via.placeholder.com/200x150"></a> </div>
                <div class="col-lg-3 col-6"> <a href="#" class="thumbnail"><img src="https://via.placeholder.com/200x150"></a> </div>
                <div class="col-lg-3 col-6"> <a href="#" class="thumbnail"><img src="https://via.placeholder.com/200x150"></a> </div>
                <div class="col-lg-3 col-6"> <a href="#" class="thumbnail"><img src="https://via.placeholder.com/200x150"></a> </div>
            </div>
        </div>
    </div>
    <div class="bg-inverse clearfix">
        <div class="container text-center m-large">
            <h2 class="font-thin">Footer</h2>
            <p>&nbsp;</p>
            <a href="#content"><i class="fa fa-arrow-up"></i><br>Back to top</a>
        </div>
    </div>
</section>
<script src="/js/app.v2.js"></script>
</body>
</html>