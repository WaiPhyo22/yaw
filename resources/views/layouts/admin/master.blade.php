<!DOCTYPE html>
<html lang="ja">
<head>
    @include('layouts.admin.head_meta')
    @yield('meta')
    @include('layouts.admin.head_links')
    @yield('pageCss')
    <!-- to provent menu toggle page reflash -->
    <style>
        body{
        display: none;
    }
    </style>
</head>
<body>
<div class="d-flex" id="wrapper">
    @include('layouts.admin.sidebar')
    <div id="page-content-wrapper">
        @include('layouts.admin.nav')
        <div class="container-fluid content-height">
            @yield('content')
        </div>
    </div>
    </div>
    @include('layouts.admin.footer_links')
    @yield('pageJs')
</body>
</html>
