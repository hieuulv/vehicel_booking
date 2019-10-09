<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Demo</title>
    @include('front-end.layouts.include_front-end.top_asset')
</head>
<body>
@include('front-end.layouts.include_front-end.nav_asset')

@yield('content')

</body>
@include('front-end.layouts.include_front-end.bottom_asset')
</html>
