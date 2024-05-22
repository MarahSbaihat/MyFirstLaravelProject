<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="assets/CSS/bootstrap.min.css">
        <link rel="stylesheet" href="assets/CSS/style.css">
    </head>
<body>

    @include('layouts.header')

        <!-- Begin page content -->
        @yield('content')

    @include('layouts.footer')

    <script src="assets/JS/bootstrap.bundle.min.js"></script>
    <script src="assets/JS/main.js"></script>
</body>
</html>
