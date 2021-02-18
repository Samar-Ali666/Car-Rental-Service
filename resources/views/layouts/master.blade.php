<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Open Graph -->
    <meta property="og:title" content="Your Page Title Here" />
    <meta property="og:url" content="http://dev.thememountain.com/faulkner/project-style-one.html" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="Your Page Description Here" />

    <!-- Twitter Theme -->
    <meta name="twitter:widgets:theme" content="light">
    
    <!-- Title &amp; Favicon -->
    <title>Issem-rent-a-ride</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/theme-mountain-favicon.png')}}">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700%7CHind+Madurai:400,500&amp;subset=latin-ext" rel="stylesheet">
    
    <!-- Css -->
    <link rel="stylesheet" href="{{asset('assets/css/core.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/skin.css')}}" />
    <!--[if lt IE 9]>
        <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body class="shop home-page">

    @yield('content')
    
    <!-- Js -->
    <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3JCAhNj6tVAO_LSb8M-AzMlidiT-RPAs"></script> --}}
    <script src="{{asset('assets/js/jquery.tm.avalanche.js')}}"></script>
    <script src="{{asset('assets/js/timber.master.min.js')}}"></script>
    @include('sweetalert::alert')
</body>
</html>