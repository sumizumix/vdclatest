<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VDC Admin Login</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/vdc-favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/admin_styles.min.css') }}" />
</head>

<body>
    @yield('admin_content')
    <script src="{{ asset('/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
