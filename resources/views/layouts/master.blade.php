<html>

<head>
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- ----------------our carousel-------------- --}}
    <link rel="stylesheet" href="css/carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/carousel/owl.theme.default.min.css" />

    <script src="js/carousel/jquery-3.6.0.js"></script>
    <script src="js/carousel/owl.carousel.min.js"></script>
</head>

<body>
    <div class="color-content">
        <div class="container-fluid" style="margin: 0; padding:0">
            @yield('content')
        </div>
    </div>
    <script src="js/carousel/owl.js"></script>
</body>

</html>
