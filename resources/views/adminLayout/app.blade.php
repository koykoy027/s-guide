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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <style>
        main {
            height: 100vh;
            background: rgb(58, 218, 234);
            background: radial-gradient(circle, rgba(58, 218, 234, 1) 0%, rgba(37, 182, 213, 1) 50%, rgba(13, 139, 188, 1) 100%);
            /* overflow: hidden; */
        }

        .transparent {
            background: rgba(0, 0, 0, 0.3);

            color: #fff;
            padding: 3% 30%;
            border-radius: 10px;


        }
    </style>
</head>

<body>
    <main class="py-5 shadow-lg">
        <div class="container">
            @yield('content')
        </div>

    </main>


</body>

</html>
