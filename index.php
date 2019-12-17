<?php require 'variables/variables.php';
require 'controllers/noticiasController.php';
require 'controllers/asesor_detalle.php';
$page = 'Inicio';
$nombre_inmobiliaria = 'Inmobiliaria Maestranza' ?>
<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<link rel="stylesheet" href="./menu/bootstrap.css">
<link rel="stylesheet" href="./menu/menu.css">

<?php include 'layout/archivosheader.php'; ?>
<?php require 'controllers/indexController.php'; ?>
<title> <?php echo $page . ' | ' . $nombre_inmobiliaria; ?></title>

<header class="webp-creative-header">

    <?php include 'layout/menu.php' ?>

</header>

<body>


    <div id="contenedor" class="container-fluid body">

        <section id="nav">
            <?php include 'layout/header.php' ?>
        </section>

        <section id="hero" class="margen_slider">

            <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="view container_movil">
                            <img class="d-block w-100" id="style_slider_img" src="images/ciudad-1.jpg" alt="First slide">
                            <div class="mask rgba-black-light waves-light"></div>
                        </div>
                        <div class="carousel-caption wow fadeInUp" data-wow-delay="0.6s">
                            <h1 id="style_slide_uno" class="h3-responsive"> <span class="color_dorado">Maestranza</span> <span class="color_azul">Gestión</span> <span class="color_dorado">Inmobiliaria</span></h1>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="view  container_movil">
                            <img class="d-block w-100" id="style_slider_img" src="images/ciudad-3.jpg" alt="Second slide">
                            <div class="mask rgba-black-light waves-light"></div>
                        </div>
                        <div class="carousel-caption wow fadeInLeft" data-wow-delay="0.6s">
                            <h1 id="style_slide_dos" class="h3-responsive"><span class="color_dorado">Trabajamos</span> <span class="color_azul">en tus</span> <span class="color_dorado">sueños,</span> <br> <span class="color_azul">porque</span> <span class="color_dorado">creemos</span> <span class="color_azul">en ellos</span></h1>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="view  container_movil">
                            <img class="d-block w-100" id="style_slider_img" src="images/Manchester_Render.jpg" alt="Third slide">
                            <div class="mask rgba-black-light waves-light"></div>
                        </div>
                        <div class="carousel-caption wow fadeInDown" data-wow-delay="0.6s">
                            <h1 id="style_slide_tres" class="h3-responsive"> <span class="color_dorado">Encuentra</span> <span class="color_azul">la propiedad</span> <span class="color_azul">que</span> <br> <span class="color_azul">siempre</span> <span class="color_dorado"> has querido</span></h1>

                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left nex_slide "></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right nex_slide "></i></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </section>

        <section id="buscador">
            <?php include 'layout/buscador.php'; ?>
        </section>

        <section id="texto_logo" class="text-center">
            <div class="col-12 d-flex justify-content-center">
                <div class="col-4  mt-5 mb-5 efecto_zoom">

                    <a href="quienes_somos.php">
                        <img src="images/Maestranza_Logo 3.png" class="logo_inicio_seccion " alt="">
                    </a>

                </div>
            </div>

        </section>

        <section id="asesores" class="mb-5">
            <div class="container espacio_margen">
                <div class="col-12">
                    <h2 class="main-title letra_titulo text-left mb-5">Asesores</h2>
                </div>

                <div class="col-12 mt-5">
                    <div class="row justify-content-center">


                        <?php if (isset($asesor_array)) {
                            modelo_asesor($asesor_array);
                        } else {
                            echo '<div class="col 12">
                        <h3 class="text-center">No hay asesores para mostrar<h3>
                        </div>';
                        }
                        ?>

                    </div>
                </div>


            </div>

        </section>

        <section id="servicios">
            <div class="overlay">
            </div>
            <div class="container espacio_margen ">
                <div class="col-12 ">
                    <div class="row">
                        <div class="col-5 titulo_cont_servi ">
                            <h2 class="main-title letra_gruesa2">Servicios</h2>
                            <p class="mt-4 color_blanco">Somos especialistas en</p>
                        </div>
                        <div class="col-7 ">
                            <div class="cont_servi col-12 ">
                                <div class="row">
                                    <div class="col-5 border color_fichas cont_servi cont_arrendamiento">
                                        <a href="administracion.php">
                                            <div class="text-center">
                                                <i class="cont_icono <?php echo $iconos_servicios['administracion'] ?>"></i>
                                            </div>
                                            <h4 class="text-center text_servi">Administración</h4>
                                        </a>
                                    </div>
                                    <div class="col-5 border color_fichas cont_servi cont_ventas">
                                        <a href="samyl.php">
                                            <div class="text-center">
                                                <i class="cont_icono <?php echo $iconos_servicios['samyl'] ?>"></i>
                                            </div>
                                            <h4 class="text-center text_servi">Samyl</h4>
                                        </a>
                                    </div>
                                    <div class="col-5 border color_fichas cont_servi cont_arrendamiento">
                                        <a href="corretaje.php">
                                            <div class="text-center">
                                                <i class="cont_icono <?php echo $iconos_servicios['corretaje'] ?>"></i>
                                            </div>
                                            <h4 class="text-center text_servi">Corretaje</h4>
                                        </a>
                                    </div>
                                    <div class="col-5 border color_fichas cont_servi cont_ventas">
                                        <a href="gerencia_comercial.php">
                                            <div class="text-center">
                                                <i class="cont_icono <?php echo $iconos_servicios['gerencia_comercial'] ?>"></i>
                                            </div>
                                            <h4 class="text-center text_servi">Gerencia Comercial</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="destacadas">

            <div class="container">
                <div class="col-12">
                    <div class="row">
                        <div class="col-4" style="margin-top: 8%;">
                            <h2 class=" main-title_destacadas  letra_gruesa"> Propiedades Destacadas</h2>
                            <p class="mt-4"> Nuestras propiedades destacadas en este momento</p>
                        </div>
                        <div class="col-8">
                            <div class="owl-carousel owl-theme" id="aliados_slide">

                                <?php
                                if (is_array($api)) {
                                    inmuebles_destacados($api);
                                } else {
                                    echo '<h2 class="text-center" >No tiene Inmuebles Destacados</h2>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="aliados">
            <div class="container margen_cont">
                <div class="col-12 margen">
                    <div class="row">
                        <div class="col-5 margen_titulo">
                            <h1 class="titulo main-title text-left">Aliados</h1>
                        </div>
                        <div class="col-7 aliados_contenedor">
                            <div class="owl-carousel owl-theme" style="width: 126%;" id="aliados_slide1">
                                <div class="item mr-3">
                                    <div class="" style="width: 10rem;">
                                        <img src="<?php echo $logos_aliados[0] ?>" class="card-img-top imagen_card" alt="...">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="" style="width: 10rem;">
                                        <img src="<?php echo $logos_aliados[1] ?>" class="card-img-top imagen_card" alt="...">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="" style="width: 10rem;">
                                        <img src="<?php echo $logos_aliados[3] ?>" class="card-img-top imagen_card" alt="...">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="" style="width: 10rem;">
                                        <img src="<?php echo $logos_aliados[4] ?>" class="card-img-top imagen_card" alt="...">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="" style="width: 10rem;">
                                        <img src="<?php echo $logos_aliados[6] ?>" class="card-img-top imagen_card" alt="...">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="" style="width: 10rem;">
                                        <img src="<?php echo $logos_aliados[7] ?>" class="card-img-top imagen_card" alt="...">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="" style="width: 10rem;">
                                        <img src="<?php echo $logos_aliados[8] ?>" class="card-img-top imagen_card" alt="...">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="" style="width: 10rem;">
                                        <img src="<?php echo $logos_aliados[9] ?>" class="card-img-top imagen_card" alt="...">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="" style="width: 10rem;">
                                        <img src="<?php echo $logos_aliados[10] ?>" class="card-img-top imagen_card" alt="...">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="" style="width: 10rem;">
                                        <img src="<?php echo $logos_aliados[11] ?>" class="card-img-top imagen_card" alt="...">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="" style="width: 10rem;">
                                        <img src="<?php echo $logos_aliados[12] ?>" class="card-img-top imagen_card" alt="...">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="" style="width: 10rem;">
                                        <img src="<?php echo $logos_aliados[13] ?>" class="card-img-top imagen_card" alt="...">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="" style="width: 10rem;">
                                        <img src="<?php echo $logos_aliados[14] ?>" class="card-img-top imagen_card" alt="...">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="" style="width: 10rem;">
                                        <img src="<?php echo $logos_aliados[15] ?>" class="card-img-top imagen_card" alt="...">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="" style="width: 10rem;">
                                        <img src="<?php echo $logos_aliados[16] ?>" class="card-img-top imagen_card" alt="...">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="" style="width: 10rem;">
                                        <img src="<?php echo $logos_aliados[6] ?>" class="card-img-top imagen_card" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="formulario">
            <div class="overlay">
            </div>
            <div class="container espacio_margen ">
                <div class="col-12 ">
                    <div class="row">
                        <div class="col-5 titulo_cont_servi ">
                            <h2 class="main-title letra_gruesa2">Formularios</h2>
                        </div>
                        <div class="col-7 ">
                            <div class="cont_servi col-12 ">
                                <div class="row">
                                    <div class="col-5 border color_fichas cont_servi cont_arrendamiento">
                                        <a data-toggle="modal" data-target="#exampleModal">
                                            <div class="text-center">
                                                <i class="cont_icono fas fa-home"></i>
                                            </div>
                                            <h4 class="text-center text_servi">Consignar inmueble</h4>
                                        </a>
                                    </div>
                                    <div class="col-5 border color_fichas cont_servi cont_ventas">
                                        <a href="https://www.unifianza.com.co/formularios-interactivos.html" target="_blank">
                                            <div class="text-center">
                                                <img class="tamaño_unifianza_logo" src="images/LOGO_UNIFIANZA.png" alt="">
                                            </div>
                                            <h4 class="text-center text_servi">Aseguradora Unifianza</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="ultimas_noticias" class="mb-5">
            <div class="container espacio_margen">
                <div class="col-12 mb-5">
                    <h2 class="main-title text-left letra_titulo"> Informativo Inmobiliario </h2>
                </div>
                <div class="col-12 mt-4">
                    <div class="row">
                        <?php if (isset($noticias_array)) {
                            modelo_ultima_noticia($noticias_array);
                        } else {
                            echo '<div class="col 12">
                        <h3 class="text-center">Muy pronto publicaremos contenido para ti<h3>
                        </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section id="consignar">
            <div class="container color_fondo">
                <div class="col-12">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-7">
                            <h2>¿Quieres consignar tu inmueble?</h2>
                        </div>
                       
                       
                        <div class="col-3">
                            <a class="btn color_btn rounded-0" data-toggle="modal" data-target="#exampleModal">Consignar Inmueble</a>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>

            </div>
        </section> -->

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
    <script src="conexion_api/validadores.js"></script>
    <script src="conexion_api/buscador.js"></script>

</body>

</html>