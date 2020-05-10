<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head.php" ?>
</head>
<body>
<?php include "header.php" ?>
<div class="view " style="background-image: url('img/dibujo009x2-min.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

    <div class="container-fluid container-90">
        <!--Grid row-->
        <div class="row wrapper librosPola">

            <div class="col-md-6 col-lg-3 col-sm-12 col-12 item">
                <a href="poemas.php">
                    <div class="polaroid"><img src = "img/laus_deo-min.jpg" alt = "laus_deo" />
                        <div class="caption">Laus deo</div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-3 col-sm-12 col-12 item">
                <a href="poemas.php">
                    <div class="polaroid"><img src = "img/cartas_de_amor-min.png" alt = "cartas_de_amor"/>
                        <div class="caption">Cartas de amor</div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-3 col-sm-12  col-12 item">
                <a href="poemas.php">
                    <div class="polaroid"><img src = "img/todas_mis_primaveras.jpg" alt = "todas_mis_primaveras" />
                        <div class="caption">Todas mis primaveras</div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col col-lg-3 col-sm-12 col-12 item">
                <a href="poemas.php">
                    <div class="polaroid"><img src = "img/cuando_arrecia_la_vida-min.jpg" alt = "cuando_arrecia_la_vida" />
                     <div class="caption">Cuando arrecia la vida</div>
                    </div>
                </a>
            </div>

        </div>
        <div id="carouselExampleIndicators" class="carousel slide librosCarru" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner ">
                <div class="carousel-item active">
                    <a href="poemas.php">
                        <img src = "img/laus_deo-min.jpg" alt = "laus_deo" />
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="poemas.php">
                        <img src = "img/cartas_de_amor-min.png" alt = "cartas_de_amor"/>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="poemas.php">
                        <img src = "img/todas_mis_primaveras.jpg" alt = "todas_mis_primaveras" />
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="poemas.php">
                        <img src = "img/cuando_arrecia_la_vida-min.jpg" alt = "cuando_arrecia_la_vida" />
                    </a>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next " href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
</div>

<footer class="footer">
    <?php include "footer.php" ?>
</footer>
<?php include "scripts.php" ?>
</body>
</html>