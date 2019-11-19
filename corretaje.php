<?php require 'variables/variables.php';
$page = 'Corretaje';
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

    <section id="corretaje">
        <div class="overlay">
        </div>
        <div class="container col-12">
            <nav class="navbar navbar-light">
                <div class="col-6">
                    <a href="index.php" class="navbar-brand"> <img class="logo" src="images/isotipo-4.png" width="100" height="100" alt=""> </a>
                </div>
                <form class="form-inline">
                    <a  class="color_a_nav" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><i class="fas fa-phone mr-2"></i><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?>&nbsp&nbsp</a>
                    <a class="color_a_nav" href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><i class="fas fa-mobile-alt mr-2"></i><?php echo $datos_contacto['celular']['imprimir'] ?></a>
                    <button class="btn  my-2 my-sm-0 boton_dorado rounded-0 boton" onclick=" location.href='contactanos.php' " type="button">Contáctanos</button>
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
                <h2 class="color_servicio"><?php echo $texto_servicios['corretaje']['titulo'] ?></h2>
            </div>
            <div class="col-12 text-center mt-3">
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
                    <li class="mb-1">
                        <p><?php echo $texto_servicios['corretaje']['parrafos'][3] ?></p>
                        
                    </li>
                    <li class="mb-1">
                        <p>  <?php echo $texto_servicios['corretaje']['parrafos'][4] ?></p>
                      
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
<!-- jQuery -->
<script src="./menu/jquery.min.js.download"></script>

<!-- Bootstrap -->
<script src="./menu/bootstrap.js.download"></script>

<!-- from slider -->
<script src="./menu/menu.js.download"></script>


<?php include('layout/archivosfooter.php'); ?>

</html>