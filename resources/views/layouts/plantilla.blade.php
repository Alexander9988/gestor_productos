<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- FAVICON --}}

    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
   

    {{-- CDN BOOTSTRAP V4 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/animate.css">


</head>

<body>
    <div class="barra wow fadeInDown" data-wow-delay="0.2s">

        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item hvr-sweep-to-top">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item hvr-sweep-to-top">
                            <a class="nav-link" href="/productos">Productos</a>
                        </li>

                        <li class="nav-item hvr-sweep-to-top">
                            <a class="nav-link" href="/almacenes">Almacenes</a>
                        </li>
                        <li class="nav-item hvr-sweep-to-top">
                            <a class="nav-link" href="/categorias">Categorias</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <section class="main">

        @yield('content')

    </section>

    <footer>
        <div class="container">

            <p class="wow fadeInDown" data-wow-delay="2s">Prueba realizada por <a
                    href="https://linktr.ee/alexander9988">Alexander Cedrés Santana</a>
            </p>
        </div>
    </footer>

    {{-- CDN BOOTSTRAP --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    {{-- WOW INIT --}}
    <script src="../js/wow.js"></script>
    <script>
        window.onload = function() {

            new WOW().init();
        }

    </script>
</body>

</html>
