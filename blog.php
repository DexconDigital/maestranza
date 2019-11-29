<?php require 'variables/variables.php';
$page = 'Blog';
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

    <section id="blog">
        <?php include 'layout/header2.php' ?>
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