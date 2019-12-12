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


    <div class="container-fluid mt-5">
        <div class="row justify-content-center ">


            <div class="col-11 col-md-8 col-lg-6 margen_imagen_detalle" style="margin-bottom: -1%;">
                <div class="text-center" style="height: 80%; width: 100%;object-fit: contain;">
                    <img style="object-fit: contain ;width: 100%;height: 100%;" src="<?php echo $ruta_imagen ?>" alt="" class="img-fluid-top">
                    <div class="col-12">
                    </div>
                </div>
            </div>

            <div class="col-12" style="    margin-top: -30px;">
                <div class="col-12 p-0 text-center">
                    <h3 style="color:black"><?php echo $nombre ?></h3>
                </div>
                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2" style="text-align: justify;">
                    <?php echo $noticia ?>
                </div>
                
                <div class="container col-12 col-md-10  col-lg-8 borde-detalle-inmueble">
                    <div class="row mb-4">
                        <div class="col-12 col-md-5">
                            Publicado el: <?php echo $fecha_complete; ?>
                        </div>
                        <div class="col-12 col-md-3">
                            <?php if($url !="" ){
                                echo '
                                <a style="color:black;" href="'.$url.'" target="_blank"><i style="color:red;" class="fab fa-youtube mr-2"></i>Ver video</a> ';
                            } elseif ($insta_url !="" ){
                                echo'
                                <a style="color:black;" href="'.$insta_url.'" target="_blank"><i style="color: #cf3c6d;font-size: 21px;" class="fab fa-instagram mr-2"></i>Ver imagenes</a> ';
                            }
                           
                            
                            ?>
                        </div>
                        <div class="col-12 col-md-4" style="text-align: end;">
                            <?php if ($ruta_archivo != $comparador . "") {
                                echo '<a style="color:black;" href="' . $ruta_archivo . '" download="Noticias.pdf"><i style="color:red;" class="fas fa-file-pdf mr-3"></i>Descargar Archivo Adjunto</a>';
                            } ?>
                        </div>
                    </div>
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