<?php
require 'variables/variables.php';
require 'controllers/inmueblesController.php';
$page = 'Inmuebles';
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

    <section id="inmuebles">
        <div class="overlay">
        </div>
        <div class="container col-12">
            <nav class="navbar navbar-light conten_header">
                <div class="col-6">
                    <a href="index.php" class="navbar-brand"> <img class="logo" src="images/Maestranza_Logo2 .png" width="100" height="100" alt=""> </a>
                </div>
                <form class="form-inline">
                    <a class="color_a_nav" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><i class="fas fa-phone mr-2"></i><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?>&nbsp&nbsp</a>
                    <a class="color_a_nav mr-3" href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><i class="fas fa-mobile-alt mr-2"></i><?php echo $datos_contacto['celular']['imprimir'] ?></a>
                    <button class="btn  my-2 my-sm-0 boton_dorado rounded-0 boton " onclick=" location.href='contactanos.php' " type="button">Contáctanos</button>
                </form>
            </nav>
            <div class="col-12 text-center titulo">
                <h2 class="texto_tamaño_est">Propiedades</h2>
            </div>
        </div>

    </section>

    <section id="buscador">
        <?php include 'layout/buscador.php'; ?>
    </section>

    <section id="buscador_inmuebles">
        <div class="col-12">
            <div class="row justify-content-center">
                <?php $totalinmuebles = 0;
                if (is_array($api)) {
                    $totalinmuebles = $api['datosGrales']['totalInmuebles'];
                } ?>
                <div class="col-12 mb-4">
                    <h4 class="titulo_totalinmuebles">Se han encontrado <span class="color_dorado"><?php echo $totalinmuebles?></span> inmuebles</h4>
                </div>
                <!-- propiedades -->
                <?php
                if (is_array($api)) {
                    listar_inmuebles($api['Inmuebles']);
                } else {
                    echo '<div class="col-12">
                        <h2 class="text-center" >No se encontraron inmuebles</h2>
                    </div>';
                }
                ?>

            </div>
        </div>
        <!-- paginador -->
        <div class="col-12 text-center">
            <?php if (is_array($api)) : ?>
                <ul class="pagination mt-4 align-items-end justify-content-center">
                    <?php if ($paginator->getPrevUrl()) : ?>
                        <li class="page-item"><a href="<?php echo $paginator->getPrevUrl(); ?>" class="page-link">&laquo; Atras</a></li>
                    <?php endif; ?>
                    <?php foreach ($paginator->getPages() as $page) : ?>
                        <?php if ($page['url']) : ?>
                            <li <?php echo $page['isCurrent'] ? 'class="page-item active"' : ''; ?>>
                                <a href="<?php echo $page['url']; ?>" class="page-link"><?php echo $page['num']; ?></a>
                            </li>
                        <?php else : ?>
                            <li class="page-item disabled"><span><?php echo $page['num']; ?></span></li>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <?php if ($paginator->getNextUrl()) : ?>
                        <li class="page-item"><a href="<?php echo $paginator->getNextUrl(); ?>" class="page-link">Siguiente &raquo;</a></li>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>

    <section id="footer" class="fondo">
        <div class="overlay">
        </div>
        <?php include 'layout/footer.php' ?>
    </section>

</body>

<script>
    var pagina = 'inmuebles'
</script>
<!-- jQuery -->
<script src="./menu/jquery.min.js.download"></script>

<!-- from slider -->
<script src="./menu/menu.js.download"></script>

<?php include('layout/archivosfooter.php'); ?>
<!-- buscador -->
<script src="conexion_api/buscador.js"></script>

</html>