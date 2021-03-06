<?php require 'variables/variables.php';
$page = 'Gerencia Comercial';
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

    <section id="arrendamientos">

        <?php include 'layout/header_Servicios.php' ?>

    </section>

    <section id="contenido_arrendamientos">
        <div class="container">
            <div class="col-12 text-center mt-4">
                <h2 class="color_servicio"><?php echo $texto_servicios['gerencia_comercial']['titulo'] ?></h2>
            </div>
            <div class="col-12 text-center mt-3 mb-4">
                <h4 class="sub_gerencial"><?php echo $texto_servicios['gerencia_comercial']['etapas']['titulo'] ?></h4>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="lista text-justify" style=" list-style: inherit !important;">
                            <li class="mb-1">
                                <p class="text-justify"><span><strong class="font-weight-bold">1. Planeación Comercial: </strong></span><?php echo $texto_servicios['gerencia_comercial']['etapas'][0] ?></p>

                            </li>
                            <li class="mb-1">
                                <p class="text-justify"><span><strong class="font-weight-bold">2. Implementación de Estrategia Comercial: </strong> </span><?php echo $texto_servicios['gerencia_comercial']['etapas'][1] ?></p>

                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="lista text-justify" style=" list-style: inherit !important;">
                            <li class="mb-1">
                                <p class="text-justify"><span><strong class="font-weight-bold">3. Cierres de Proceso de Ventas: </strong></span> <?php echo $texto_servicios['gerencia_comercial']['etapas'][2] ?></p>

                            </li>
                            <li class="mb-1">
                                <p class="text-justify"><span><strong class="font-weight-bold">4. Post Venta: </strong></span> <?php echo $texto_servicios['gerencia_comercial']['etapas'][3] ?></p>

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