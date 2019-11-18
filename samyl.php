<?php require 'variables/variables.php';
$page = 'samyl';
$nombre_inmobiliaria = 'Inmobiliaria Maestranza' ?>

<!DOCTYPE html>
<html lang="es">


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php include 'layout/archivosheader.php'; ?>
<link rel="stylesheet" href="./menu/bootstrap.css">
<link rel="stylesheet" href="./menu/menu.css">
<title> <?php echo $page . ' | ' . $nombre_inmobiliaria; ?></title>
<header class="webp-creative-header">

    <?php include 'layout/menu.php' ?>

</header>

<body>

    <section id="symil">
        <div class="overlay">
        </div>
        <div class="container col-12">
            <nav class="navbar navbar-light">
                <div class="col-6">
                    <a class="navbar-brand"> <img class="logo" src="images/isotipo-4.png" width="100" height="100" alt=""> </a>
                </div>
                <form class="form-inline">
                    <a href="index.php" class="color_a_nav" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><i class="fas fa-phone mr-2"></i><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?>&nbsp&nbsp</a>
                    <a class="color_a_nav" href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><i class="fas fa-mobile-alt mr-2"></i><?php echo $datos_contacto['celular']['imprimir'] ?></a>
                    <button class="btn  my-2 my-sm-0 boton_dorado rounded-0 boton" type="submit">Contáctanos</button>
                </form>
            </nav>
            <div class="col-12 text-center titulo">
                <h2 class="color_servicio">Servicios</h2>
            </div>
        </div>

    </section>

    <section id="symil2">
        <div class="container">
            <div class="col-12 text-center mt-4">
                <h2 class="color_servicio"><?php echo $texto_servicios['samyl']['titulo'] ?></h2>
            </div>
            <div class="col-12 text-center mt-3">
                <div class="row">
                    <div class="col-3 border ">
                        <img class="icono posicion_servi" src="images/limpieza-y-desinfección.png" alt="">
                        <p class="text-justify parrafo_Servi"><?php echo $texto_servicios['samyl']['parrafos']['limpieza'][0] ?></p>
                    </div>
                    <div class="col-3 border ">
                        <img class="icono" src="images/Mantenimiento.png" alt="">
                        <p class="text-justify parrafo"><?php echo $texto_servicios['samyl']['parrafos']['mantenimiento'][0] ?></p>
                    </div>
                    <div class="col-3 border ">
                        <img class="icono" src="images/facility-service.png" alt="">
                        <p class="text-justify parrafo"><?php echo $texto_servicios['samyl']['parrafos']['facility'][0] ?></p>
                    </div>
                    <div class="col-3 border ">
                        <img class="icono" src="images/Exteriores.png" alt="">
                        <p class="text-justify parrafo"><?php echo $texto_servicios['samyl']['parrafos']['exteriores'][0] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer" class="fondo">
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