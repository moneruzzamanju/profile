<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('backend.layout._header')
</head>
<body class="theme-cyan font-montserrat light_version">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <div class="bar4"></div>
        <div class="bar5"></div>
    </div>
</div>
<!-- Theme Setting -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<div id="wrapper">
    @include('backend.layout._top_nav')
    @include('backend.layout._sidebar')
    <div id="main-content">
        <div class="container-fluid">
            @yield('MainSection')
        </div>
    </div>
</div>
@include('backend.layout._footer_js')
</body>
</html>

