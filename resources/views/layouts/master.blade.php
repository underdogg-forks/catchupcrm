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
    <style>
        .container {
            background-color: #d5d5d5;
            font-weight: 100;
            /*height: 100vh;*/
        }
    </style>
</head>

<body class="nav-md">
master
<div class="container body">
    <div class="main_container" style="height: 100vh">

        @include('partials/sidebar')

        @include('partials/topbar')

    <!-- page content -->
    <aside class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield('content-header')
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="main_content" role="main">
            {{--@include('partials.notifications')--}}
            @yield('content')
        </div>
        <!-- /page content -->
        </section><!-- /.content -->
    </aside><!-- /.right-side -->
    </div><!-- /class="main_container -->
    <div class="footer_fixed">
        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>


<!-- jQuery -->
<script src="{{ asset("themes/gentelella/js/jquery.min.js") }}"></script>
<!-- Bootstrap -->
<script src="{{ asset("themes/gentelella/js/bootstrap.min.js") }}"></script>
<!-- Custom Theme Scripts -->
<script src="{{ asset("themes/gentelella/js/gentelella.min.js") }}"></script>

<?php if (isset($jsFiles)): ?>
@foreach($jsFiles as $js)
    <script src="{{ URL::asset($js) }}" type="text/javascript"></script>
@endforeach
<?php endif; ?>


<?php //if (is_module_enabled('Notification')): ?>
    <script src="https://js.pusher.com/3.0/pusher.min.js"></script>
    {{-- <script src="{{ Module::asset('notification:js/pusherNotifications.js') }}"></script> --}}
    <script>
        /*$(".notifications-list").pusherNotifications({
            pusherKey: '{{ env('PUSHER_KEY') }}',
            loggedInUserId:  currentUser->id
        });*/
    </script>
<?php //endif; ?>


@stack('scripts')

</body>
</html>