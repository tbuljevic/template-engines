<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('page_title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="/styles/style.css" />
</head>
<body>
    @yield('content_title')

    @yield('content_intro')

    @yield('content_main')

    @yield('content_footer')

</body>