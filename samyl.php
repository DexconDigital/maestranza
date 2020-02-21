<?php require 'variables/variables.php';
$page = 'samyl';
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

    <section id="symil">

        <?php include 'layout/header_Servicios.php' ?>

    </section>
    <section id="symil2">
        <div class="col-12 text-center mt-4">
            <h2 class="color_servicio"><?php echo $texto_servicios['samyl']['titulo'] ?></h2>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6 mb-4">
                        <div class="row">
                            <div class="align-items-center col-12 col-lg-2 col-md-2 d-flex dimencion_imagen_facility justify-content-center">
                                <img class="icono cuadro_button" src="images/limpieza-y-desinfeccion_cuadro.png" alt="">
                            </div>
                            <div class="col-lg-10 col-md-9 col-12">
                                <h5 class="estilo_titulo">Limpieza y Desinfección:</h5>
                                <p class="text-justify"><?php echo $texto_servicios['samyl']['parrafos']['limpieza'][0] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 mb-4">
                        <div class="row">
                            <div class="col-12 col-md-2 col-lg-2 d-flex dimencion_imagen_facility justify-content-center">
                                <img class="icono cuadro_button" src="images/servicios_cuadroamarillo.JPG" alt="">
                            </div>
                            <div class="col-lg-10 col-md-9 col-12">
                                <h5 class="estilo_titulo">Facility Services:</h5>
                                <p class="text-justify"><?php echo $texto_servicios['samyl']['parrafos']['facility'][0] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 mb-4">
                        <div class="row">
                            <div class="col-12 col-md-2 col-lg-2 d-flex dimencion_imagen_facility justify-content-center">
                                <img class="icono cuadro_button_exteriores" src="images/mantenimiento.JPG" alt="">
                            </div>
                            <div class="col-lg-10 col-md-9 col-12">
                                <h5 class="estilo_titulo">Mantenimiento:</h5>
                                <p class="text-justify"><?php echo $texto_servicios['samyl']['parrafos']['mantenimiento'][0] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 mb-4">
                        <div class="row">
                            <div class="col-12 col-md-2 col-lg-2 d-flex dimencion_imagen_facility justify-content-center">
                                <img class="icono cuadro_button222" src="images/Exteriores.JPG" alt="">
                            </div>
                            <div class="col-lg-10 col-md-9 col-12">
                                <h5 class="estilo_titulo">Medio Ambiente y Paisajismo:</h5>
                                <p class="text-justify"><?php echo $texto_servicios['samyl']['parrafos']['exteriores'][0] ?></p>
                            </div>
                        </div>
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