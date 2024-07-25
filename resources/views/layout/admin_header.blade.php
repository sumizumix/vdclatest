<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VDC Admin Header</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/vdc-favicon.png') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/admin_styles.css') }}" />
 
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    @include('layout.admin_sidebar')
    <div class="body-wrapper">
      @include('layout.admin_app_header')
      @yield('admin_content')
    </div>
  </div>
  @include('layout.admin_footer')