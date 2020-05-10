<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head.php" ?>
</head>
<body>
<?php include "header.php" ?>
<div class="view " style="background-image: url('img/dibujo009x2-min.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

    <div class="row wrapper" id="dibujos">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                    require_once 'conectar.php';
                    $sql = 'SELECT * from Dibujos';
                    foreach ($db -> query($sql) as $fila){
                ?>
                        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $fila['id']?>"></li>
                <?php
                    }
                ?>
            </ol>
            <div class="carousel-inner">
                <?php
                    foreach ($db -> query($sql) as $fila){
                        if ($fila['id']==1){
                        ?>
                            <div class="carousel-item active">
                                <img class="imagenCarrusel d-block w-100" src="img/<?php echo $fila['dibujo']?>">
                            </div>
                        <?php
                        }else{?>
                        <div class="carousel-item ">
                                <img class="imagenCarrusel d-block w-100" src="img/<?php echo $fila['dibujo']?>">
                            </div>
                <?php
                        }
                    }
                ?>

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