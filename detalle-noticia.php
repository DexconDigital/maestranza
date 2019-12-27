<?php $page = "Noticias";
require 'variables/variables.php';
require_once('controllers/detalle_noticiasController.php'); ?>
<!DOCTYPE html>
<html lang="es">


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Detalle | Noticias</title>
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<link rel="stylesheet" href="./menu/bootstrap.css">
<link rel="stylesheet" href="./menu/menu.css">
<?php include 'layout/archivosheader.php'; ?>

<header class="webp-creative-header">

    <?php include 'layout/menu.php' ?>

</header>

<body>
    <div class="container-fluid cont_noticias">
        <div class="container">
            <div class="col-12 text-center mb-4">
                <h2><?php echo $nombre ?></h2>
            </div>
            <div class="col-12">
                <img id="cont_img_noticia" class="img-fluid-top mr-4 img_notica"  src="<?php echo $ruta_imagen ?>" alt="">
                <p class="text-justify"> <?php echo $noticia ?></p>
            </div>
        </div>
        <div class="container col-10 text-center mb-4 ">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-12">

                    <span class="text-muted"> Publicado el: <?php echo $fecha_complete; ?></span>
                </div>
                <div class="col-lg-4 col-md-2 col-1 mt-2 mb-2">
                    <?php if ($url != "") {
                        echo '
                                <a style="color:black;" href="' . $url . '" target="_blank"><i style="color:red;" class="fab fa-youtube mr-2"></i>Ver video</a> ';
                    } elseif ($insta_url != "") {
                        echo '
                                <a style="color:black;" href="' . $insta_url . '" target="_blank"><i style="color: #cf3c6d;font-size: 21px;" class="fab fa-instagram mr-2"></i>Ver imagenes</a> ';
                    }


                    ?>
                </div>
                <div class="col-lg-4 col-md-5 col-12">
                    <?php if ($ruta_archivo != $comparador . "") {
                        echo '<a style="color:black;" href="' . $ruta_archivo . '" download="Noticias.pdf"><i style="color:red;" class="fas fa-file-pdf mr-3"></i>Descargar Archivo Adjunto</a>';
                    } ?>
                </div>
            </div>
        </div>

    </div>

    <section id="footer" class="fondo">
        <div class="overlay">
        </div>
        <?php include 'layout/footer.php' ?>
    </section>
    </div>

    <script>
        var pagina = 'inicio'
    </script>

    <!-- jQuery -->
    <script src="./menu/jquery.min.js.download"></script>

    <!-- Bootstrap -->
    <script src="./menu/bootstrap.js.download"></script>

    <!-- from slider -->
    <script src="./menu/menu.js.download"></script>

    <?php include('layout/archivosfooter.php'); ?>

    <script src="conexion_api/buscador.js"></script>
</body>

</html>