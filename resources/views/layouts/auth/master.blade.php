<!DOCTYPE html>
<html lang="ja">
<head>
    @include('layouts.auth.head_meta')
    @yield('meta')
    @include('layouts.auth.head_links')
    @yield('pageCss')
</head>
<body style="background-color: gray;">
    @yield('content')
    @include('layouts.auth.footer_links')
    @yield('pageJs')
</body>
</html>
