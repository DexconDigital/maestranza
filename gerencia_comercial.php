<?php require 'variables/variables.php';
$page = 'Gerencia Comercial';
$nombre_inmobiliaria = 'Inmobiliaria Maestranza' ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/archivosheader.php'; ?>
    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria; ?></title>

</head>

<body>

    <section id="arrendamientos">
        <div class="overlay">
        </div>
        <div class="container col-12">
            <nav class="navbar navbar-light">
                <div class="col-6">
                    <a class="navbar-brand"> <img class="logo" src="images/isotipo-4.png" width="100" height="100" alt=""> </a>
                </div>
                <form class="form-inline">
                    <a class="color_a_nav" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><i class="fas fa-phone mr-2"></i><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?>&nbsp&nbsp</a>
                    <a class="color_a_nav" href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><i class="fas fa-mobile-alt mr-2"></i><?php echo $datos_contacto['celular']['imprimir'] ?></a>
                    <button class="btn  my-2 my-sm-0 boton_dorado rounded-0"onclick=" location.href='contactanos.php' " type="button">Contáctanos</button>
                </form>
            </nav>
            <div class="col-12 text-center titulo">
                <h2 class="color_servicio">Servicios</h2>
            </div>
        </div>

    </section>

    <section id="contenido_arrendamientos">
        <div class="container">
            <div class="col-12 text-center mt-4">
                <h2 class="color_servicio"><?php echo $texto_servicios['gerencia_comercial']['titulo'] ?></h2>
            </div>
            <div class="col-12 text-center mt-3">
                <h4><?php echo $texto_servicios['gerencia_comercial']['etapas']['titulo'] ?></h4>
                <ul class="lista">
                    <li class="mb-1">
                        <?php echo $texto_servicios['gerencia_comercial']['etapas'][0] ?>
                    </li>
                    <li class="mb-1">
                        <?php echo $texto_servicios['gerencia_comercial']['etapas'][1] ?>
                    </li>
                    <li class="mb-1">
                        <?php echo $texto_servicios['gerencia_comercial']['etapas'][2] ?>
                    </li>
                    <li class="mb-1">
                        <?php echo $texto_servicios['gerencia_comercial']['etapas'][3] ?>
                    </li>
                </ul>
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

<?php include('layout/archivosfooter.php'); ?>

</html>