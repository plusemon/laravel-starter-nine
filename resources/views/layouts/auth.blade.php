<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />

    <title>{{ $title }}</title>
</head>

<body class="bg-surface">

    <!--start wrapper-->
    <div class="wrapper">

        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-white rounded-0 border-bottom">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <h2 class="text-uppercase" style=" text-shadow: 3px 2px 2px #00000029;">{{ env('APP_NAME') }}</h2>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/about-us') }}">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                                    Services <i class="bi bi-chevron-down align-middle ms-2"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;">Contact Us</a>
                            </li>
                        </ul>

                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                                    English
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">Arabic</a></li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/help') }}">Help</a>
                            </li>
                        </ul>
                        <div class="d-flex ms-3 gap-3">
                            <a href="{{ route('login') }}"
                               class="btn btn-{{ request()->is('login') ? 'primary' : 'white' }} btn-sm px-4 radius-30">Login</a>
                            <a href="{{ route('register') }}"
                               class="btn btn-{{ request()->is('register') ? 'primary' : 'white' }} btn-sm px-4 radius-30">Register</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        @yield('main')

        <footer class="bg-white border-top p-3 text-center mt-3">
            <p class="mb-0">Copyright © 2022. All right reserved.</p>
        </footer>

    </div>
    <!--end wrapper-->

    <!-- Bootstrap bundle JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/pace.min.js"></script>

</body>

</html>
