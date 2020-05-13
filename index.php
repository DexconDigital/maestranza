<?php
require 'variables/variables.php';
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
<?php require 'variables/metaEtiquetas.php'; ?>
<?php include 'layout/archivosheader.php'; ?>
<?php require 'controllers/indexController.php'; ?>
<title> <?php echo $page . ' | ' . $nombre_inmobiliaria; ?></title>

<header class="webp-creative-header">

    <?php include 'layout/menu.php'; ?>


</header>

<body>


    <div id="contenedor" class="container-fluid body">

        <section id="nav">
            <div class="container col-12 ">
                <nav class="navbar navbar-light ">
                    <div class="col-5">
                        <a href="index.php" class="navbar-brand contenedor_imagen"> <img class="logo" src="images/Maestranza_logoazul.png" width="100" height="100" alt=""> </a>
                    </div>
                    <div class="col-5 margen_top d-none d-md-block">
                        <form class="form-inline espacio_contacto">
                            <a class="color_a_nav" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><i class="fas fa-phone mr-2"></i><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?>&nbsp&nbsp</a>
                            <a class="color_a_nav mr-3" href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><i class="fas fa-mobile-alt mr-2"></i><?php echo $datos_contacto['celular']['imprimir'] ?></a>
                            <button class="btn  my-2 my-sm-0 boton_dorado rounded-0" onclick=" location.href='contactanos.php' " type="button">Contáctenos</button>
                        </form>
                    </div>
                </nav>
            </div>
        </section>

        <section id="hero" class="margen_slider">

            <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="view container_movil">
                            <img class="d-block w-100" id="style_slider_img" src="images/segunda.png" alt="First slide">
                            <!-- <div class="mask rgba-black-light waves-light"></div> -->
                        </div>
                        <div class="carousel-caption wow fadeInUp" data-wow-delay="0.6s">
                            <h1 id="style_slide_uno" class="h3-responsive"> <span class="color_dorado">Maestranza</span> <span class="color_azul">Gestión</span> <span class="color_dorado">Inmobiliaria</span></h1>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="view  container_movil">
                            <img class="d-block w-100" id="style_slider_img" src="images/ciudad-3.jpg" alt="Second slide">
                            <!-- <div class="mask rgba-black-light waves-light"></div> -->
                        </div>
                        <div class="carousel-caption wow fadeInLeft" data-wow-delay="0.6s">
                            <h1 id="style_slide_dos" class="h3-responsive"><span class="color_dorado">Trabajamos</span> <span class="color_azul">en tus</span> <span class="color_dorado">sueños,</span> <br> <span class="color_azul">porque</span> <span class="color_dorado">creemos</span> <span class="color_azul">en ellos</span></h1>

                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="view  container_movil">
                            <img class="d-block w-100" id="style_slider_img" src="images/ciudad-1.jpg" alt="Third slide">
                            <!-- <div class="mask rgba-black-light waves-light"></div> -->
                        </div>
                        <div class="carousel-caption wow fadeInDown" data-wow-delay="0.6s">
                            <h1 id="style_slide_tres" class="h3-responsive"> <span class="color_dorado">Encuentra</span> <span class="color_azul">la propiedad</span> <span class="color_azul">que</span> <br> <span class="color_azul">siempre</span> <span class="color_dorado"> has querido</span></h1>

                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev " href="#carousel-example-2" role="button" data-slide="prev">
                    <span id="posicion_flechas" class="carousel-control-prev-icon" aria-hidden="true">
                        <!-- <i class="fas fa-angle-left nex_slide "></i></span> -->
                        <!-- <span class="sr-only">Previous</span> -->
                </a>
                <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                    <span id="posicion_flechas" class="carousel-control-next-icon" aria-hidden="true">
                        <!-- <i class="fas fa-angle-right nex_slide "></i></span> -->
                        <!-- <span class="sr-only">Next</span> -->
                </a>

            </div>
        </section>

        <section id="buscador">
            <?php include 'layout/buscador.php'; ?>
        </section>

        <section id="texto_logo" class="text-center">
            <div class="col-12 d-flex justify-content-center">
                <div class="col-lg-3 col-md-4 col-5  mt-5 mb-5 efecto_zoom">
                    <a href="quienes_somos.php">
                        <img src="images/Maestranza_Logo 3.png" class="logo_inicio_seccion " alt="">
                    </a>

                </div>
            </div>

        </section>

        <section id="asesores" class="mb-5">
            <div class="container espacio_margen">
                <div class="col-12">
                    <h2 class="main-title letra_titulo text-left mb-5">Nuestro Equipo</h2>
                </div>

                <div class="col-12 mt-5 border">
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
                        <div class="col-lg-5 col-md-12 col-12 titulo_cont_servi ">
                            <h2 class="position-relative main-title letra_gruesa2">Servicios</h2>
                            <p class="mt-4 color_blanco">Somos especialistas en</p>
                        </div>
                        <div class="col-lg-7 col-md-12 col-12 ">
                            <div class="cont_servi col-12 ">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-11 border color_fichas cont_servi cont_arrendamiento">
                                        <a href="administracion.php">
                                            <div class="text-center">
                                                <i class="cont_icono <?php echo $iconos_servicios['administracion'] ?>"></i>
                                            </div>
                                            <h4 class="text-center text_servi">Administración</h4>
                                        </a>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-11 border color_fichas cont_servi cont_ventas">
                                        <a href="samyl.php">
                                            <div class="text-center">
                                                <i class="cont_icono <?php echo $iconos_servicios['samyl'] ?>"></i>
                                            </div>
                                            <h4 class="text-center text_servi">Samyl</h4>
                                        </a>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-11 border color_fichas cont_servi cont_arrendamiento">
                                        <a href="corretaje.php">
                                            <div class="text-center">
                                                <i class="cont_icono <?php echo $iconos_servicios['corretaje'] ?>"></i>
                                            </div>
                                            <h4 class="text-center text_servi">Corretaje</h4>
                                        </a>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-11 border color_fichas cont_servi cont_ventas">
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

        <section id="destacadas" class="mb-4">

            <div class="container">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-12 texto_propiedades">
                            <h2 class="position-relative main-title_destacadas  letra_gruesa"> Propiedades Destacadas</h2>
                            <p class="mt-4"> Nuestras propiedades destacadas en este momento</p>
                        </div>
                        <div class=" col-lg-8 col-md-12 col-12">
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
                        <div class="col-lg-5 col-md-12 col-12 margen_titulo">
                            <h1 class="position-relative titulo main-title text-left">Aliados</h1>
                        </div>
                        <div class="col-lg-7 col-md-10 col-12 aliados_contenedor">
                            <div class="owl-carousel owl-theme tamaño_slider" id="aliados_slide1">
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
                                <div class="item">
                                    <div class="" style="width: 10rem;">
                                        <img src="<?php echo $logos_aliados[17] ?>" class="card-img-top imagen_card" alt="...">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="" style="width: 10rem;">
                                        <img src="<?php echo $logos_aliados[18] ?>" class="card-img-top imagen_card" alt="...">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="" style="width: 10rem;">
                                        <img src="<?php echo $logos_aliados[19] ?>" class="card-img-top imagen_card" alt="...">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="" style="width: 10rem;">
                                        <img src="<?php echo $logos_aliados[20] ?>" class="card-img-top imagen_card" alt="...">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="" style="width: 10rem;">
                                        <img src="<?php echo $logos_aliados[21] ?>" class="card-img-top imagen_card" alt="...">
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
                        <div class="col-lg-5 col-md-12 col-12 titulo_cont_servi ">
                            <h2 class="main-title letra_gruesa2">Formularios</h2>
                        </div>
                        <div class="col-lg-7 col-md-12 col-12 ">
                            <div class="cont_servi col-12 ">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-10 border color_fichas cont_servi cont_arrendamiento">
                                        <a data-toggle="modal" data-target="#exampleModal">
                                            <div class="text-center">
                                                <i class="cont_icono fas fa-home"></i>
                                            </div>
                                            <h4 class="text-center text_servi">Consignar inmueble</h4>
                                        </a>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-10 border color_fichas cont_servi cont_ventas">
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

        <section id="transaccion">
            <div class="overlay">
            </div>
            <div class="container margen_cont">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-12 titulo_cont_servi ">
                            <h2 id="titulo" class="main-title main-title text-left">Transacciones en Línea</h2>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <div class="d-flex flex-wrap align-items-center justify-content-center ">
                        <div class="col-lg-4 col-md-6 col-12" id="arrendatario">
                            <div class="inner-box">
                                <div class="card" style="height: 14rem;">
                                    <img src="images/arrendatarios.png" class="card-img-top w-100 h-100" alt="...">
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3 style="color:white;">ARRENDATARIO</h3>
                                            </div>
                                            <a class="purchased" data-toggle="modal" data-target="#exampleModala">
                                                Ver más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12" id="propietario" class="border">
                            <div class="inner-box">
                                <div class="card" style="height: 14rem;">
                                    <img src="images/propietarios.jpg" class="card-img-top w-100 h-100" alt="...">
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3 style="color:white;">PROPIETARIO</h3>
                                            </div>
                                            <a class="purchased" data-toggle="modal" data-target="#exampleModalab">
                                                Ver más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12" id="pagospse" class="border">
                            <div class="inner-box border">
                                <div class="card">
                                    <img src="images/pagospse.png" class="card-img-top w-100 h-100 imagen" alt="...">
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3><a href="https://gateway2.tucompra.com.co/sites/MGI" target="_blanck" style="color:inherit;">PAGOS PSE</a></h3>
                                            </div>
                                            <!-- <a class="purchased" href="https://gateway2.tucompra.com.co/sites/MGI" target="_blanck">
                                                Ver más</a> -->
                                                <a class="purchased" data-toggle="modal" data-target="#exampleModalabc">
                                                Ver más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- modal arrendatario  -->

        <div class="modal fade" id="exampleModala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Arrendatarios</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <a type="button" href="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=987&tipo=2" target="_blank" class="btn option_modal tamaño_arrendatario_btn">Ingresar Aquí </a><br>
                        <a type="button" href="manuales/INSTRUCTIVO_ARRENDATARIOS_MAESTRANZA.pdf" target="blanck" class="btn option_modal">Ver Manual de Arrendatario </a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" id="btn_modal" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal propietario  -->
        <div class="modal fade" id="exampleModalab" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Propietarios</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <a type="button" href="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=987&tipo=1" target="_blank" class="btn option_modal tamaño_propietario_btn">Ingresar Aquí </a><br>
                        <a type="button" href="manuales/INSTRUCTIVO_PROPIETARIOS_MAESTRANZA.pdf" target="blanck" class="btn option_modal">Ver Manual de Propietario </a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" id="btn_modal" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal pse  -->
        <div class="modal fade" id="exampleModalabc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pagos PSE</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <a type="button" class="btn option_modal tamaño_propietario_btn">Ingresar Aquí </a><br>
                        <a type="button" href="manuales/INSTRUCTIVO_PSE_MAESTRANZA.pdf" target="blanck" class="btn option_modal">&nbsp&nbspVer Manual de Pagos PSE&nbsp&nbsp</a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" id="btn_modal" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>


        <section id="ultimas_noticias" class="mb-5">
            <div class="container margen_cont espacio_margen">
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