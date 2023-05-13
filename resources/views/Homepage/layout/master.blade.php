<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="S-Guide stands for student and security guidance. we guide. we service. we respect the rights." />
    <meta name="author" content="Joshua Villanueva" />
    <title> S-GUIDE @yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/S-Guide.png') }}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <!-- CDN of Link CSS Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Custom JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




    <!-- Scripts -->

    {{-- <script src="{{ asset('index/assets/js/custom.js') }}"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body class="d-flex flex-column h-100">
    @include('modal')
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/SG 2.png') }}"
                        width="45px" /> - GUIDE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-uppercase">
                        <li class="nav-item"><a href="{{ url('/') }}"
                                class="nav-link {{ '/' == request()->path() ? 'active' : '' }}">HOME</a></li>
                        <li class="nav-item"><a href="{{ url('about') }}"
                                class="nav-link {{ 'about' == request()->path() ? 'active' : '' }}">ABOUT</a></li>
                        <li class="nav-item"><a href="{{ url('services') }}"
                                class="nav-link {{ 'services' == request()->path() ? 'active' : '' }}">SERVICES</a>
                        </li>
                        <li class="nav-item"><a href="{{ url('contact') }}"
                                class="nav-link {{ 'contact' == request()->path() ? 'active' : '' }}">CONTACT</a>
                        </li>
                        <li class="nav-item"><a href="{{ url('FAQ') }}"
                                class="nav-link {{ 'FAQ' == request()->path() ? 'active' : '' }}">FAQ</a></li>

                        @if (Route::has('login'))
                            @auth()
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ 'student/profile' == request()->path() ? 'active' : '' }}"
                                        id="profile" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        {{ Auth::user()->firstname }}
                                        {{ Auth::user()->lastname }}
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                                        <li><a class="dropdown-item" href="{{ url('student/profile') }}">PROFILE</a></li>
                                        <li><a class="dropdown-item" href="{{ url('student/online-reporting') }}">ONLINE
                                                REPORT</a></li>
                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#logout">LOGOUT</a></li>
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item"><a href="{{ url('login') }}"
                                        class="nav-link {{ 'login' == request()->path() ? 'active' : '' }}">LOGIN</a></li>
                            @endauth
                        @endif
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')


    </main>
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; BigBro 2023</div>
                </div>
                <div class="col-auto">
                    <a class="link-light small" href="{{ url('privacy') }}">Privacy</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="{{ url('terms') }}">Terms</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="{{ url('contact') }}">Contact</a>
                </div>
            </div>
        </div>
    </footer>


</body>

</html>
