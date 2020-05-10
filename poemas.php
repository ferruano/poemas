<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head.php" ?>
</head>
<body>
<?php include "header.php" ?>
<header>
<div class="view " style="background-image: url('img/dibujo009x2-min.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <br>
    <div class="container-fluid container-90">
        <!--Grid row-->
        <div class="row wrapper" id="libros">
            <div class="col-lg-2"></div>
            <div class="col-lg-5">
                <form action="" class="form-horizontal">
                    <fieldset>

                        <!-- Form Name -->
                        <legend class="letraCursiva">Poema:</legend>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <select id="identidad" name="identidad" class="form-control">
                                <?php
                                require_once 'conectar.php';
                                $sql = 'SELECT * from poemas';
                                foreach ($db -> query($sql) as $fila){
                                ?>
                                <option id="select_id" value="<?php echo $fila['id']?>"><?php echo $fila['Titulo']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <br>
                        <!-- Button -->
                        <div class="form-group">
                            <label class="control-label" for="submit"></label>
                            <button id="submit" onclick="mostrar()" name="singlebutton" class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">Leer Poema</button>
                        </div>

                    </fieldset>
                </form>
            </div>
            <img class="col-sm-3 col-lg-3 dibujoPoemas" src="img/cuando_arrecia_la_vida-min.jpg">
                <div class="col-lg-2"></div>
        </div>
    </div>
    <!-- MODAL -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="titulo"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-body">
                       <pre id="texto">
                       </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
<footer class="footer">
    <?php include "footer.php" ?>
</footer>
<script>
    function mostrar() {
        $id = document.getElementById("identidad").value;
        console.log($id);
        <?php
        $sql = 'SELECT * FROM poemas WHERE id = {$id}';
        $cmsData = $db->query($sql);
        $titulo = $cmsData['Titulo'];
        $texto = $cmsData['Texto'];
        ?>
        document.getElementById('titulo').innerHTML ="<?php echo $titulo;?>";
        document.getElementById('texto').innerHTML ="<?php echo $texto;?>";
    }
</script>
<?php include "scripts.php" ?>

</body>
</html>