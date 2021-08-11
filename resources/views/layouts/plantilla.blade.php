<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-success bg-dark">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                    <a class="nav-link active" aria-current="page">
                    <img src="https://i.blogs.es/5e5fa6/sonidos-consolas/1366_2000.jpg" class="img-thumbnail" style="width: 125px" alt="...">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active fs-1" aria-current="page" href="nintendo">--NINTENDO--</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-1" href="playstation">--PLAY STATION--</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-1" href="xbox">--X BOX--</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-1" href="pcgames">--PC GAMES--</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar-->

<div class="container">
    <div class="row">
        <!-- sidebar -->
        <div class="col-md-3" style="background-color: #000000">
            <br><br>
            <ul class="list-group">
                <li class="list-group-item list-group-item-dark active fs-3">Ultima consola</li>
                <li class="list-group-item list-group-item-dark fs-3">Reseña Historica</li>
                <li class="list-group-item list-group-item-dark fs-3">Crecimiento</li>
                <li class="list-group-item list-group-item-dark fs-3">Los 2000's</li>
                <li class="list-group-item list-group-item-dark fs-3">Creador</li>
            </ul>
            <br><br>
        </div>
        <!--End Sidebar -->
        <!-- Content--->
        <div class="col-md-9" style="">
            @yield('contenido')
        </div>
        <!-- end Content-->
    </div>
</div>
<footer class="text-center fs-2" style="background-color: blue">
    ¡¡LOS JUEGOS NOS ACOMPAÑARAN SIEMPRE!!
</footer>

</body>
</html>
