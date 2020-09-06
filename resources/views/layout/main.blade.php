<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap4/css/bootstrap.min.css">

    <title>@yield('title')</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Universitas Siliwangi</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="{{ url('/') }}">Home</a>
                    <a class="nav-item nav-link" href="{{ url('/about') }}">About</a>
                    <a class="nav-item nav-link" href="{{ url('/mahasiswa') }}">Mahasiswa</a>
                    <a class="nav-item nav-link" href="{{ url('/students') }}">Students</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('container')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap4/js/bootstrap.min.js"></script>

</html>