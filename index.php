<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/anicollection.css">
    <script src="js/jquery-3.3.1.min.js"></script>

    <!--scroll-->
    <script src="js/smooth-scroll.min.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');

    </script>

    <!--parallax-->
    <script src="js/parallax.js"></script>

    <title>Gropoz</title>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark esss">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Brand -->
    <a class="navbar-brand logo" href="#">Gropoz</a>

    <!-- Links -->
    <div class="collapse navbar-collapse justify-content-md-center" id="nav-content">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link nav-menu" data-scroll href="#sec-1" >Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-menu" data-scroll href="#sec-2" >About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-menu" data-scroll href="#sec-3" >Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-menu" data-scroll href="#sec-4" >Footer</a>
            </li>
        </ul>
</nav>

<main>
<!--seccion 1-->
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/fondo.png" data-z-index="1" id="sec-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 parallax-bock" data-anijs="if: onRunFinished, on: $AniJSNotifier, do: swing animated; if: animationend, on: .balloon, do: swing " >
                <p class=" parallax-text text-center">Gropoz</p>
                <p class=" parallax-text text-center">Web Developer bootstrap</p>
                <div class="text-center">
                <button type="button" class="btn btn-primary parallax-boton ">Repository</button>
                </div>
            </div>
        </div>
    </div>
    </div>

<!--seccion 2-->
    <div class="container-fluid" id="sec-2">
        <div class="row">
            <div class="col-md-6 secciones"></div>
            <div class="col-md-6 secciones" style="background: #212529;" data-anijs="if: scroll, on:window, do: bounceInLeft  animated, before: scrollReveal"></div>
        </div>
    </div>

<!--seccion 3-->
    <div class="container-fluid" id="sec-3">
    <div class="row">
        <div class="col-md-6 secciones" style="background: #212529;" data-anijs="if: scroll, on:window, do: fadeInRightBig  animated, before: scrollReveal"></div>
        <div class="col-md-6 secciones" >
            <h1>HOLA MUNDO</h1>
        </div>
    </div>



</main>

<footer id="sec-4">

</footer>



</body>
<script src="js/anijs-min.js"></script>
<script src="js/anijs-helper-scrollreveal-min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>