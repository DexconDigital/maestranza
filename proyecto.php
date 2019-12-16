<?php require 'variables/variables.php';
$page = 'Proyectos';
$nombre_inmobiliaria = 'Inmobiliaria Maestranza';
$fec = date('YmdHis'); ?>

<!DOCTYPE html>
<html lang="es">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/proyectosNvo.css?range='.$fec.'">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="./menu/bootstrap.css">
<link rel="stylesheet" href="./menu/menu.css">
<?php include 'layout/archivosheader.php'; ?>
<link rel="stylesheet" type="text/css" href="proyectos_data/js/rangejs/jquery-ui.css">
<title> <?php echo $page . ' | ' . $nombre_inmobiliaria; ?></title>

<header class="webp-creative-header">

    <?php include 'layout/menu.php' ?>

</header>

<body>

    <section id="proyecto">

        <?php include 'layout/header2.php' ?>

    </section>
    <!-- Buscador de proyectos -->
    <!-- <section id="" class="text-center">
        <div class="cuerpo_proyecto">
            <div class="filtrobusqueda">
                <div class="container">
                    <div class="formFilter">
                        <form name="formFilter" class="row">
                            <input type="hidden" name="inmo" value="459">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Destinación</label>
                                    <select class="form-control" name="destinacion" id="destinacion">
                                        <option value="0">Cualquiera</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Ubicacion</label>
                                    <select class="form-control" id="ciudades" name="ciudad">
                                        <option value="0">Cualquiera</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Ordenar Por</label>
                                    <select class="form-control" name="ordenar">
                                        <option value="0">Cualquiera</option>
                                        <option value="asc">A-Z</option>
                                        <option value="desc">Z-A</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 d-none">
                                <div>
                                    <p id="amount" class="amount"></p>
                                    <div id="slider-range"></div>
                                    <input type="hidden" id="amount1" name="pdesde">
                                    <input type="hidden" id="amount2" name="phasta">
                                </div>
                            </div>
                            <div class="col-md-6 d-none">
                                <div>
                                    <p id="amountA" class="amountA"></p>
                                    <div id="slider-rangeA"></div>
                                    <input type="hidden" id="amount1A" name="adesde">
                                    <input type="hidden" id="amount2A" name="ahasta">
                                </div>
                            </div>
                            <div class="col-12 offset-1 form-group pt-4">
                                <button type="submit" class="col-10 btn btn-light btn-submitFilter">Buscar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
 -->


    <!-- Resultado de proyectos encontrados -->

    <!-- <section id="container">
        <section id="main-content">
            <section class="wrapper">
                <div class="container jumbotronn" id="headJumbotron">
                    <div class="viewHead col-md-4">
                        <h1><span class="countInm">0</span> Proyectos encontrados</h1>
                    </div>
                    <div class="viewFoot col-md-8">
                        <div class="btn-group viewRigth" role="group" aria-label="...">

                        </div>
                    </div>

                </div>
                <div class="container clearfix row mx-auto" id="list-proyects">
                </div>
            </section>
        </section>
    </section> -->

    <section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    

    </section>

    <section id="footer" class="fondo">
        <div class="overlay">
        </div>
        <?php include 'layout/footer.php' ?>
    </section>

</body>

<script>
    var pagina = 'Proyecto'
</script>
<!-- jQuery -->
<script src="./menu/jquery.min.js.download"></script>

<!-- Bootstrap -->
<script src="./menu/bootstrap.js.download"></script>
<!-- from slider -->
<script src="./menu/menu.js.download"></script>
<?php include('layout/archivosfooter.php'); ?>

<!-- Archivos api proyectos -->
<script type="text/javascript" src="proyectos_data/js/proyectos.js"></script>
<script type="text/javascript" src="proyectos_data/js/rangejs/jquery-ui.js"></script>
<script type="text/javascript" src="proyectos_data/js/formatnumber/jquery.number.js"></script>
<script type="text/javascript" src="proyectos_data/webservice/apisimi.js"></script>

</html>