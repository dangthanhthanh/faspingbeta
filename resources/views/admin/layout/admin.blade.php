<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="{{asset('admin/img/favicon.png')}}" rel="icon">
  <link href="{{asset('admin/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- CSS Files -->
  @include("admin.public.css")
  @yield("cssstyle")
  <!-- end CSS Files -->
</head>

<body>
  <!-- ======= Header ======= -->
  @include("admin.component.header")
  <!-- End Header -->
  <!-- ======= Sidebar ======= -->
  @include("admin.component.sidebar")
  <!-- End Sidebar-->
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route("admin.dashboard")}}">Admin</a></li>
            @yield("title","Page")
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->
    @yield("content")
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  @include("admin.component.footer")
  <!-- End Footer -->
  <!-- JS Files -->
  @include("admin.public.javascript")
  <!-- end JS Files -->
  @yield("javascript")
</body>

</html>