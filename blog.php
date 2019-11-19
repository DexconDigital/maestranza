<?php require 'variables/variables.php';
$page = 'Blog';
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

    <section id="blog">
        <div class="overlay">
        </div>
        <div class="container col-12">
            <nav class="navbar navbar-light">
                <div class="col-6">
                    <a href="index.php" class="navbar-brand"> <img class="logo" src="images/isotipo-4.png" width="100" height="100" alt=""> </a>
                </div>
                <form class="form-inline">
                    <a class="color_a_nav" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><i class="fas fa-phone mr-2"></i><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?>&nbsp&nbsp</a>
                    <a class="color_a_nav" href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><i class="fas fa-mobile-alt mr-2"></i><?php echo $datos_contacto['celular']['imprimir'] ?></a>
                    <button class="btn  my-2 my-sm-0 boton_dorado rounded-0 boton" onclick=" location.href='contactanos.php' " type="button">Contáctanos</button>
                </form>
            </nav>
            <div class="col-12 text-center titulo">
                <h2 class="tit">Blog</h2>
            </div>
        </div>

    </section>

    <section>
        <div class="container margen_blog">
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="card" style="border-color: white;">
                            <img src="images/no_image.png" class="card-img-top imagen_card" alt="...">
                            <div class="card-body espacio_tageta mt-4">
                                <h4 class="card-title">Últimas Ofertas</h4>
                                <p>2019-09-14</p>
                                <p class="card-text_blog">Carta de presentacion</p>
                                <a id="bonton_verde" href="" class="btn rounded-0 text-center waves-effect waves-light boton_blog">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="border-color: white;">
                            <img src="images/no_image.png" class="card-img-top imagen_card" alt="...">
                            <div class="card-body espacio_tageta mt-4">
                                <h4 class="card-title">Últimas Ofertas</h4>
                                <p>2019-09-14</p>
                                <p class="card-text_blog">Carta de presentacion</p>
                                <a id="bonton_verde" href="" class="btn rounded-0 text-center waves-effect waves-light boton_blog">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="border-color: white;">
                            <img src="images/no_image.png" class="card-img-top imagen_card" alt="...">
                            <div class="card-body espacio_tageta mt-4">
                                <h4 class="card-title">Últimas Ofertas</h4>
                                <p>2019-09-14</p>
                                <p class="card-text_blog">Carta de presentacion</p>
                                <a id="bonton_verde" href="" class="btn rounded-0 text-center waves-effect waves-light boton_blog">Ver más</a>
                            </div>
                        </div>
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
    var pagina = 'blog'
</script>
<!-- jQuery -->
<script src="./menu/jquery.min.js.download"></script>

<!-- Bootstrap -->
<script src="./menu/bootstrap.js.download"></script>

<!-- from slider -->
<script src="./menu/menu.js.download"></script>
<?php include('layout/archivosfooter.php'); ?>

</html>