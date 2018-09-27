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
            <li class="">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            </li>
        </ul>
    </div>
</header>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<section id="content">
    <div class="main padder">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4 m-t-large">
                <section class="panel">
                    <form method="post" class="panel-body" enctype="multipart/form-data" autocomplete="off">
                        <div class="block">
                            <label class="control-label" for="organization_name">{{ __('Organization\'s name') }}</label>
                            <input type="text" name="organization_name" value="{{ old('organization_name') }}" placeholder="Name of your organization" class="form-control" id="organization_name" required>

                            @if ($errors->has('organization_name'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('organization_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="block">
                            <label class="control-label" for="email">{{ __('Address of Your Organization') }}</label>
                            <input type="text" name="office_address_line_1" value="{{ old('office_address_line_1') }}" placeholder="Address Line 1" class="form-control" id="office_address_line_1" required>

                            @if ($errors->has('office_address_line_1'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('office_address_line_1') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="block">
                            <input type="text" name="office_address_line_2" value="{{ old('office_address_line_2') }}" placeholder="Address Line 2 (Optional)" class="form-control" id="office_address_line_2">

                            @if ($errors->has('office_address_line_2'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('office_address_line_2') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="block">
                            <label class="control-label" for="password">{{ __('Your Designation') }}</label>
                            <input type="text" name="designation" value="{{ old('designation') }}" placeholder="What's your designation?" class="form-control" id="designation">

                            @if ($errors->has('designation'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('designation') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="block">
                            <label class="control-label" for="organization_logo">{{ __('Organization\'s Logo (Optional)') }}</label>
                            <input type="file" name="organization_logo" id="organization_logo">

                            @if ($errors->has('organization_logo'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('organization_logo') }}</strong>
                                </span>
                            @endif
                        </div>

                        @csrf

                        <button type="submit" class="btn btn-primary btn-block">{{ __('Complete & Go to Dashboard') }}</button>
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