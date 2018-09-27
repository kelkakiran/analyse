<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Analysed | Dashboard</title>
    <meta name="description" content="Analysed is a virtual recruitment platform which provides AI based tools for the recruiters and the job-seekers, thereby making job-search easy and fast.">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/font.css">
    <link rel="stylesheet" href="/js/select2/select2.css">
    <link rel="stylesheet" href="/css/app.v2.css" type="text/css">

    <!--[if lt IE 9]>
    <script src="/js/ie/respond.min.js"></script>
    <script src="/js/ie/html5.js"></script>
    <script src="/js/ie/excanvas.min.js"></script>
    <![endif]-->
</head>
<body class="navbar-fixed">

<header id="header" class="navbar">
    <ul class="nav navbar-nav navbar-avatar pull-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="hidden-xs-only">{{ $user->name }}</span> <span class="thumb-small avatar inline"><img src="https://via.placeholder.com/320x320" alt="Mika Sokeil" class="img-circle"></span> <b class="caret hidden-xs-only"></b> </a>
            <ul class="dropdown-menu pull-right">
                <li><a href="#">{{ __('Settings') }}</a></li>
                <li><a href="#">{{ __('Profile') }}</a></li>
                <li><a href="#"><span class="badge bg-danger pull-right">3</span>{{ __('Notifications') }}</a></li>
                <li class="divider"></li>
                <li><a href="#">{{ __('Help') }}</a></li>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <a class="navbar-brand" href="index.html#" style="border-right: none;">Analysed</a> <button type="button" class="btn btn-link pull-left nav-toggle visible-xs" data-toggle="class:slide-nav slide-nav-left" data-target="body"> <i class="fa fa-bars fa-lg text-default"></i> </button>
    <ul class="nav navbar-nav hidden-xs">
        <li>
            <div class="m-t m-b-small" id="panel-notifications">
                <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-comment-o fa-fw fa-lg text-default"></i>
                    <b class="badge badge-notes bg-danger count-n">2</b>
                </a>

                {{--Notification panel--}}
                <section class="dropdown-menu m-l-small m-t-mini">
                    <section class="panel panel-large arrow arrow-top">
                        <header class="panel-heading bg-white">
                            <span class="h5"><strong>You have <span class="count-n">2</span> notifications</strong></span>
                        </header>
                        <div class="list-group">
                            <a href="index.html#" class="media list-group-item">
                                <span class="pull-left thumb-small">
                                    <img src="images/avatar.jpg" alt="John said" class="img-circle">
                                </span>
                                <span class="media-body block m-b-none">
                                    Moved to Bootstrap 3.0<br> <small class="text-muted">23 June 13</small>
                                </span>
                            </a>
                            <a href="index.html#" class="media list-group-item">
                                <span class="media-body block m-b-none">
                                    first v.1 (Bootstrap 2.3 based) released<br> <small class="text-muted">19 June 13</small>
                                </span>
                            </a>
                        </div>
                        <footer class="panel-footer text-small">
                            <a href="index.html#" class="pull-right">
                                <i class="fa fa-cog"></i>
                            </a>
                            <a href="index.html#">See all the notifications</a>
                        </footer>
                    </section>
                </section>
                {{--End Notification Panel--}}

            </div>
        </li>

        @if($user->hasRole('recruiter'))
            <li>
                <div class="m-t-small">
                    <a class="btn btn-sm btn-info" href="/post-job">
                        <i class="fa fa-fw fa-plus"></i> {{ __('Post new Recruitment') }}
                    </a>
                </div>
            </li>
        @endif

        <form class="navbar-form pull-left shift" action="#" data-toggle="shift:appendTo" data-target=".nav-primary">
            <i class="fa fa-search text-muted"></i>
            <input type="text" class="input-sm form-control" placeholder="Search">
        </form>
    </ul>
</header>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<nav id="nav" class="nav-primary hidden-xs nav-vertical">
    <ul class="nav" data-spy="affix" data-offset-top="50">
        <li class="active"><a href="index.html"><i class="fa fa-dashboard fa-lg"></i><span>Dashboard</span></a></li>
        <li class="dropdown-submenu">
            <a href="#"><i class="fa fa-th fa-lg"></i><span>{{ __('Dummy') }}</span></a>
            <ul class="dropdown-menu">
                <li><a href="">{{ __('Dummy') }}</a></li>
                <li><a href=""><b class="badge pull-right">302</b>{{ __('Dummy') }}</a></li>
                <li><a href="">{{ __('Dummy') }}</a></li>
                <li><a href=""><b class="badge bg-primary pull-right">8</b>{{ __('Dummy') }}</a></li>
                <li><a href=""><b class="badge pull-right">18</b>{{ __('Dummy') }}</a></li>
                <li><a href="">{{ __('Dummy') }}</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a href="#"><i class="fa fa-list fa-lg"></i><span>{{ __('Dummy') }}</span></a>
        </li>
        <li><a href="#"><i class="fa fa-edit fa-lg"></i><span>{{ __('Dummy') }}</span></a></li>
        <li><a href="#"><i class="fa fa-signal fa-lg"></i><span>{{ __('Dummy') }}</span></a></li>
    </ul>
</nav>

@yield('content')

</body>
</html>