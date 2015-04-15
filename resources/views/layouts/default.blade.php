<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Generic Blog- Laravel Demo</title>

    <!-- Bootstrap Core CSS -->
    {!! HTML::style('/css/bootstrap.min.css')!!}
    {!! HTML::style('/css/blog-home.css') !!}

</head>

<body>

    <!-- Navigation -->
    @include('layouts.partials.nav')

    <!-- Page Content -->
    <div class="container">
        @yield('content')
        @include('layouts.partials.footer')
    </div>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
