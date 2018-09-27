<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') . ' | Register' }}</title>
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
                    <form action="{{ route('register') }}" method="post" class="panel-body" autocomplete="off">
                        <div class="block">
                            <label class="control-label" for="name">{{ __('Full name') }}</label>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Your full name" class="form-control" id="name" required>

                            @if ($errors->has('name'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="block">
                            <label class="control-label" for="email">{{ __('E-mail Address') }}</label>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="dummy@example.com" class="form-control" id="email" required>

                            @if ($errors->has('email'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="block">
                            <label class="control-label" for="mobile">{{ __('Mobile Number') }}</label>
                            <input type="text" name="mobile" value="{{ old('mobile') }}" placeholder="Your 10-digit mobile number" class="form-control" id="mobile" required>

                            @if ($errors->has('mobile'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('mobile') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="block">
                            <label class="control-label" for="password">{{ __('Password') }}</label>
                            <input type="password" name="password" placeholder="Password" class="form-control" id="password">

                            @if ($errors->has('password'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="block">
                            <label class="control-label" for="password-confirm">{{ __('Password') }}</label>
                            <input type="password" name="password_confirmation" placeholder="Repeat password" class="form-control" id="password-confirm">
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-4">{{ __('Account Type') }}</label>

                            <div class="col-md-8">
                                <div class="form-check form-check-inline">
                                    <input class="col-form-input" type="radio" name="role" id="recruiter" value="recruiter" {{ old('role') == 'recruiter' ? 'checked' : '' }}>
                                    &nbsp;
                                    <label class="col-form-label" for="recruiter">{{ __('Recruiter') }}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="col-form-input" type="radio" name="role" id="job-seeker" value="job-seeker" {{ old('role') == 'job-seeker' ? 'checked' : '' }}>
                                    &nbsp;
                                    <label class="col-form-label" for="job-seeker">{{ __('Job Seeker') }}</label>
                                </div>

                                @if ($errors->has('role'))
                                    <span class="text-danger pull-left" role="alert" style="display: block;">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @csrf

                        <button type="submit" class="btn btn-info btn-block">{{ __('Register') }}</button>

                        <div class="line line-dashed"></div>

                        <a href="#" class="btn btn-primary btn-block m-b-small">
                            <i class="fa fa-google pull-left"></i>{{ __('Sign up with Google') }}
                        </a>

                        <div class="line line-dashed"></div>

                        <p class="text-muted text-center"><small>{{ __('Already have an account?') }}</small></p>
                        <a href="{{ route('login') }}" class="btn btn-white btn-block">{{ __('Sign In') }}</a>
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