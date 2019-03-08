<?php
/**
 * Created by PhpStorm.
 * User: fauzizone
 * Date: 08/03/19
 * Time: 20:16
 */
?>

        <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('public/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('public/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('public/plugins/node-waves/waves.css')}}" rel="stylesheet"/>

    <!-- Animation Css -->
    <link href="{{asset('public/plugins/animate-css/animate.css')}}" rel="stylesheet"/>

    <!-- Custom Css -->
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet">
    <style>
        .login-page {
            background-image: url("{{asset('public/img/app-header-bg.jpg')}}")  !important;
            padding-left: 0;
            margin: 5% auto;
            overflow-x: hidden;
            background-size: cover;
        }
    </style>
</head>
<body class="login-page">
<div class="login-box">
    @yield('authlogin')
</div>

<!-- Jquery Core Js -->
<script src="{{asset('public/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core Js -->
<script src="{{asset('public/plugins/bootstrap/js/bootstrap.js')}}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{asset('public/plugins/node-waves/waves.js')}}"></script>

<!-- Validation Plugin Js -->
<script src="{{asset('public/plugins/jquery-validation/jquery.validate.js')}}"></script>

<!-- Custom Js -->
<script src="{{asset('public/js/admin.js')}}"></script>
<script src="{{asset('public/js/pages/examples/sign-in.js')}}"></script>
</body>

</html>