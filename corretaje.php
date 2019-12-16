<?php require 'variables/variables.php';
$page = 'Corretaje';
$nombre_inmobiliaria = 'Inmobiliaria Maestranza' ?>

<!DOCTYPE html>
<html lang="es">


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="./menu/bootstrap.css">
<link rel="stylesheet" href="./menu/menu.css">
<?php include 'layout/archivosheader.php'; ?>
<title> <?php echo $page . ' | ' . $nombre_inmobiliaria; ?></title>
<header class="webp-creative-header">

    <?php include 'layout/menu.php' ?>

</header>


<body>

    <section id="corretaje">

        <?php include 'layout/header_Servicios.php' ?>

    </section>

    <section id="contenido_arrendamientos">
        <div class="container">
            <div class="col-12 text-center mt-4">
                <h2 class="color_servicio"><?php echo $texto_servicios['corretaje']['titulo'] ?></h2>
            </div>
            <div class="col-12 text-center mt-3">
                <div class="row">
                    <div class="col-6">
                        <ul class="lista">
                            <li class="mb-1">
                                <p><?php echo $texto_servicios['corretaje']['parrafos'][0] ?></p>

                            </li>
                            <li class="mb-1">
                                <p><?php echo $texto_servicios['corretaje']['parrafos'][1] ?></p>

                            </li>
                            <li class="mb-1">
                                <p> <?php echo $texto_servicios['corretaje']['parrafos'][2] ?></p>

                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="lista">
                            <li class="mb-1">
                                <p><?php echo $texto_servicios['corretaje']['parrafos'][3] ?></p>

                            </li>
                            <li class="mb-1">
                                <p> <?php echo $texto_servicios['corretaje']['parrafos'][4] ?></p>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer" class="fondo">
        <div class="overlay">
        </div>
        <?php include 'layout/footer.php' ?>
    </section>

</body>

<script>
    var pagina = 'servicios'
</script>
<!-- jQuery -->
<script src="./menu/jquery.min.js.download"></script>

<!-- Bootstrap -->
<script src="./menu/bootstrap.js.download"></script>

<!-- from slider -->
<script src="./menu/menu.js.download"></script>


<?php include('layout/archivosfooter.php'); ?>

</html>