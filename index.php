<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>

    <!--animacion-->
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/jquery.fittext.js"></script>
    <script src="js/jquery.lettering.js"></script>
    <script src="js/jquery.textillate.js"></script>

    <script>
        $(function () {
            $('.tlt').textillate({ in: { effect: 'fadeIn',initialDelay: 500, } });
        })
    </script>

    <!--scroll-->
    <script src="js/smooth-scroll.min.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
        scroll.animateScroll(750);
    </script>


    <script src="js/parallax.js"></script>

    <title>Gropoz</title>
</head>
<body>
<!--menu-->
<nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Brand -->
    <a class="navbar-brand logo" href="#">Gropoz</a>

    <!-- Links -->
    <div class="collapse navbar-collapse justify-content-md-center" id="nav-content">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-scroll href="#sec-1" >Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-scroll href="#sec-2" >About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-scroll href="#sec-3" >Link 3</a>
            </li>
        </ul>
</nav>

<!--eccion 1-->


    <div class="parallax-window" data-parallax="scroll" data-image-src="img/fondo.png" data-z-index="1" id="sec-1">
        <p class="parallax-window-into text-center tlt ">Gropoz Web Developer</p>
        <p class="parallax-window-into text-center tlt ">Start Bootstrap</p>
        <button type="button" class="btn btn-primary boton-parallax tlt ">Repository</button>
    </div>

<!--eccion 2-->
<div class="container-fluid seccion" style="background: #0062cc" id="sec-2"></div>
</div>
<!--eccion 3-->
<div class="container-fluid seccion" style="background: #cc88ff" id="sec-3"></div>

<footer>
    <div class="contaider-fluid footer"></div>
</footer>

</body>


<script src="js/bootstrap.min.js"></script>
</html>