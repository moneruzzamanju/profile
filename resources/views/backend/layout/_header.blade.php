<title>{{ config('app.name', 'Profile Management System') }}</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="author" content="GetBootstrap, design by: puffintheme.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/animate-css/vivify.min.css')}}">

@yield('PageCSS')

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ asset('backend/assets/css/site.min.css') }}">
