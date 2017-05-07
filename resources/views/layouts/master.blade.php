<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentellela Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ asset("themes/gentelella/css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("themes/gentelella/css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("themes/gentelella/css/gentelella.min.css") }}" rel="stylesheet">

    @stack('stylesheets')

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

        @include('partials/sidebar')

        @include('partials/topbar')

        @yield('content')

    </div>
</div>

<!-- jQuery -->
<script src="{{ asset("themes/gentelella/js/jquery.min.js") }}"></script>
<!-- Bootstrap -->
<script src="{{ asset("themes/gentelella/js/bootstrap.min.js") }}"></script>
<!-- Custom Theme Scripts -->
<script src="{{ asset("themes/gentelella/js/gentelella.min.js") }}"></script>

@stack('scripts')

</body>
</html>