<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Chonchol Mahmud">

    <title>deepfashion</title>

    <!-- Bootstrap core CSS -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}"/>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    @stack('styles')
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

</head>

<body>

@include('web.partials.navigation')

@yield('content')

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

@stack('scripts')

</body>

</html>

