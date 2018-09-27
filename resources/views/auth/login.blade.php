<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') . ' | Login' }}</title>
    <meta name="description" content="mobile first, app, web app, responsive, admin dashboard, flat, flat ui">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.v2.css" type="text/css">
    <link rel="stylesheet" href="/css/font.css">

    <!--[if lt IE 9]>
    <script src="/js/ie/respond.min.js"></script>
    <script src="/js/ie/html5.js"></script>
    <![endif]-->
</head>
<body>

<header id="header" class="navbar" data-offset-top="1">
    <div class="container">
        <button type="button" class="btn btn-link btn-sm pull-right visible-xs navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <i class="fa fa-bars fa-lg text-default"></i>
        </button>
        <a class="navbar-brand" href="/" style="border-right: none;">{{ env('APP_NAME', 'Analysed') }}</a>
        {{--<p class="navbar-text pull-left text-muted hidden-xs"><small><em>Base on Bootstrap 3</em></small></p>--}}
        <ul class="nav navbar-nav navbar-right collapse navbar-collapse">
            <li class=""> <a href="{{ route('login') }}">{{ __('Login') }}</a> </li>
            <li class=""> <a href="{{ route('register') }}">{{ __('Register') }}</a> </li>
            <li class=""> <a href="/#about-us">{{ __('About Us') }}</a> </li>
        </ul>
    </div>
</header>

<section id="content">
    <div class="main padder">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4 m-t-large">
                <section class="panel">
                    <header class="panel-heading text-center"> {{ __('Login') }} </header>
                    <form action="{{ route('login') }}" method="post" class="panel-body" autocomplete="off">
                        <div class="block">
                            <label class="control-label" for="email">{{ __('Email') }}</label>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="dummy@example.com" class="form-control" id="email" required>

                            @if ($errors->has('email'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="block">
                            <label class="control-label" for="password">{{ __('Password') }}</label>
                            <input type="password" name="password" placeholder="Password" class="form-control" id="password" required>
                        </div>
                        @csrf
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                            </label>
                        </div>

                        <a href="#" class="m-t-mini">
                            <small>{{ __('Forgot your password?') }}</small>
                        </a><br><br>
                        <button type="submit" class="btn btn-info btn-block">{{ __('Login') }}</button>

                        <div class="line line-dashed"></div>

                        <a href="#" class="btn btn-primary btn-block m-b-small">
                            <i class="fa fa-google pull-left"></i>{{ __('Login with Google') }}
                        </a>

                        <div class="line line-dashed"></div>

                        <p class="text-muted text-center"><small>{{ __('Do not have an account already?') }}</small></p>
                        <a href="{{ route('register') }}" class="btn btn-white btn-block">{{ __('Create an account') }}</a>
                    </form>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- footer -->
<footer id="footer">
    <div class="text-center padder clearfix">
        <p>
            <small>&copy; Copyright | Analysed.ml</small>
            <br><br>
            <a href="#" class="btn btn-xs btn-circle btn-twitter">
                <i class="fa fa-twitter"></i>
            </a>&nbsp;
            <a href="#" class="btn btn-xs btn-circle btn-facebook">
                <i class="fa fa-facebook"></i>
            </a>&nbsp;
            <a href="#" class="btn btn-xs btn-circle btn-gplus">
                <i class="fa fa-google-plus"></i>
            </a>
        </p>
    </div>
</footer>
<script src="/js/app.v2.js"></script>
</body>
</html>