<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <title>Admindek | Admin Template</title>


    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="colorlib"/>

    <link rel="icon" href="https://colorlib.com//polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/feather/css/feather.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages.css') }}">
</head>
<body>

<div class="loader-bg">
    <div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content" style="margin-left: 0">

                    <div class="page-header card">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <i class="feather icon-clipboard bg-c-blue"></i>
                                    <div class="d-inline">
                                        <h5>Система подсчета стоимости доставки</h5>
                                        <span>Возможность подсчета суммы доставки в зависимости от ее типа и расстояния</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class=" breadcrumb breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="/"><i class="feather icon-home"></i></a>
                                        </li>
                                        @yield('breadcrumbs')
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    @if(session('status'))
                                        <div class="alert alert-info background-info">
                                            <button type="button" class="close mt-1" data-dismiss="alert" aria-label="Close">
                                                <i class="icofont icofont-close-line-circled text-white"></i>
                                            </button>
                                            <strong>{{ session('status') }}</strong>
                                        </div>
                                    @endif

                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="{{ asset('assets/images/browser/chrome.png') }}" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="{{ asset('assets/images/browser/firefox.png') }}" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="{{ asset('assets/images/browser/opera.png') }}" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="{{ asset('assets/images/browser/safari.png') }}" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="{{ asset('assets/images/browser/ie.png') }}" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div><![endif]-->


<script type="text/javascript" src="{{ asset('bower_components/jquery/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/popper.js/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/bootstrap/js/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>

<script src="{{ asset('assets/pages/waves/js/waves.min.js') }}" type="0bded538577b7c8617876ef7-text/javascript"></script>

<script type="text/javascript" src="{{ asset('bower_components/modernizr/js/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/modernizr/js/css-scrollbars.js') }}"></script>

<script src="{{ asset('assets/js/pcoded.min.js') }}" type="0bded538577b7c8617876ef7-text/javascript"></script>
<script src="{{ asset('assets/js/vertical/vertical-layout.min.js') }}" type="0bded538577b7c8617876ef7-text/javascript"></script>
<script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}" type="0bded538577b7c8617876ef7-text/javascript"></script>
<script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/js/rocket-loader.min.js') }}" data-cf-settings="0bded538577b7c8617876ef7-|49" defer=""></script>

@stack('scripts')
</body>

<!-- Mirrored from colorlib.com//polygon/admindek/default/form-elements-component.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jun 2019 14:01:24 GMT -->
</html>
