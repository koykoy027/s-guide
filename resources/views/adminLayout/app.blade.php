<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>S-GUIDE @yield('title')</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- ICON --}}
    <link rel="shortcut icon" href="{{ asset('images/SG 2.png') }}" type="image/x-icon">
    {{-- custom js --}}
    <script src="{{ asset('assets/dist/js/script.js') }}"></script>
    {{-- JQUERY CDN --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background: rgb(58, 218, 234);
            background: radial-gradient(circle, rgba(58, 218, 234, 1) 0%, rgba(37, 182, 213, 1) 50%, rgba(13, 139, 188, 1) 100%);
        }

        sup {
            color: red;
            text-transform: bold;
        }
    </style>
</head>

<body>
    <div class="navbar-area headroom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg sticky-top">
                        <a class="navbar-brand nav-link" href="{{ url('/') }}">
                            <img src="{{ asset('images/SG 2.png') }}" alt="S-GUIDE" width="50">
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <main class="py-5">
        <div class="container">
            @yield('content')
        </div>

    </main>


</body>

</html>
