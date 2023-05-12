<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tanajil - Home -client</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('client/images/favicon.png')}}"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
    rel="stylesheet"
    />
    {{-- css --}}
    @include("client.public.css")
    @yield("cssstyle")
    {{-- end css --}}
</head>
<body class="home">
    {{-- header --}}
    @include("client.component.header")
{{-- end header --}}
{{-- main --}}
    @yield("content")
{{-- endmain --}}
{{-- footer --}}
    @include("client.component.footer")
{{-- endfooter --}}
{{-- script --}}
    @include("client.public.javacript")
{{-- end script --}}
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
@include("client.component.quick_view")
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
></script>
@yield("javascript")
</body>

</html>