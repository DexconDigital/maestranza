<?php require 'variables/variables.php';
//require 'controllers/indexController.php';
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
<title> <?php echo $page . ' | ' . $nombre_inmobiliaria; ?></title>

<header class="webp-creative-header">

    <?php include 'layout/menu.php' ?>

</header>

<body>


    <div id="contenedor" class="container-fluid body">

        <section id="nav">
            <div class="container col-12 ">
                <nav class="navbar navbar-light">
                    <div class="col-5">
                        <a href="index.php" class="navbar-brand contenedor_imagen"> <img class="logo" src="images/isotipo-4.png" width="100" height="100" alt=""> </a>
                    </div>
                    <div class="col-5">
                        <form class="form-inline espacio_contacto">
                            <a class="color_a_nav" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><i class="fas fa-phone mr-2"></i><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?>&nbsp&nbsp</a>
                            <a class="color_a_nav" href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><i class="fas fa-mobile-alt mr-2"></i><?php echo $datos_contacto['celular']['imprimir'] ?></a>
                            <button class="btn  my-2 my-sm-0 boton_dorado rounded-0" onclick=" location.href='contactanos.php' " type="button">Contáctanos</button>
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
                            <img class="d-block w-100" id="style_slider_img" src="images/Manchester Render.jpg" alt="Third slide">
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
            <div class="col-12">
                <img src="images/Maestranza Logo 3.png" width="300" height="300" alt="">
            </div>
            <div class="col-12 contenedor_parrafo">
                <p class="text-justify"><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][0] ?></p>
                <p class="text-justify"><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][1] ?></p>
                <button type="button" class="btn rounded-0 col-2 boton_buscar boton_azul" onclick=" location.href='quienes_somos.php' " id="buscar"><span>Ver más</span></button>
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

                                <!-- <?php
                                        if (is_array($api)) {
                                            inmuebles_destacados($api);
                                        } else {
                                            echo '<h2 class="text-center" >No tiene Inmuebles Destacados</h2>';
                                        }
                                        ?> -->
                            </div>
                        </div>
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
                            <h2 class="main-title letra_gruesa2"> Nuestros servicios</h2>
                            <p class="mt-4 color_blanco">Somos especialistas en</p>
                        </div>
                        <div class="col-7 ">
                            <div class="cont_servi col-12 ">
                                <div class="row">
                                    <div class="col-5 border color_fichas border-dark cont_servi cont_arrendamiento">
                                        <a href="administracion.php">
                                            <div class="text-center">
                                                <i class="cont_icono <?php echo $iconos_servicios['administracion'] ?>"></i>
                                            </div>
                                            <h4 class="text-center text_servi">Administración</h4>
                                        </a>
                                    </div>
                                    <div class="col-5 border color_fichas border-dark cont_servi cont_ventas">
                                        <a href="samyl.php">
                                            <div class="text-center">
                                                <i class="cont_icono <?php echo $iconos_servicios['samyl'] ?>"></i>
                                            </div>
                                            <h4 class="text-center text_servi">Samyl</h4>
                                        </a>
                                    </div>
                                    <div class="col-5 border color_fichas border-dark cont_servi cont_arrendamiento">
                                        <a href="corretaje.php">
                                            <div class="text-center">
                                                <i class="cont_icono <?php echo $iconos_servicios['corretaje'] ?>"></i>
                                            </div>
                                            <h4 class="text-center text_servi">Corretaje</h4>
                                        </a>
                                    </div>
                                    <div class="col-5 border color_fichas border-dark cont_servi cont_ventas">
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

        <section id="asesores">
            <div class="container espacio_margen">
                <div class="col-12">
                    <h2 class="letra_titulo text-center"> Nuestros Asesores</h2>
                </div>

                <div class="col-12 mt-5">
                    <div class="owl-carousel owl-theme margen" style="" id="aliados2">
                        <div class="item">
                            <div class="card style_card" style="width: 15rem;">
                                <a href="detalle_asesor.php">
                                    <img src="images/no_image.png" class="card-img-top imagen_card" alt="...">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center color_titulo_Card">Daniel</h5>
                                    <p class="text-center color_parrafo">Administrador</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card style_card" style="width: 15rem;">
                                <img src="images/no_image.png" class="card-img-top imagen_card" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center color_titulo_Card">Daniel</h5>
                                    <p class="text-center color_parrafo">Administrador</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <div class="col-12">
            <h2 class="text-center titulo_Servi">
                Formularios aseguradoras
            </h2>
        </div>
        <div class="">
            <div class="">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/aseguradoras.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/aseguradoras.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/aseguradoras.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="aliados">
            <div class="container margen_cont">
                <div class="col-12">
                    <div class="row">
                        <div class="col-5 margen_titulo">
                            <h1 class="titulo main-title">Nuestros Aliados</h1>
                        </div>
                        <div class="col-7">
                            <div class="owl-carousel owl-theme" id="aliados_slide1">
                                <div class="item">
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
                                        <img src="<?php echo $logos_aliados[5] ?>" class="card-img-top imagen_card" alt="...">
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

        <section id="ultimas_noticias">
            <div class="container espacio_margen">
                <div class="col-12 mb-4">
                    <h2 class="text-center letra_titulo"> Últimas Noticias</h2>
                </div>
                <div class="col-12 mt-4">
                    <div class="row">
                        <div class="col-4">
                            <div class="card" style="width: 21rem;">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4>Últimas Ofertas</h4>
                                    <p class="card-text">2019-11-14</p>
                                    <p class="card-text">Carta de presentación</p>
                                    <hr>
                                    <a href="" class="btn boton_ver_mas rounded-0">Ver Más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="width: 21rem;">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4>Últimas Ofertas</h4>
                                    <p class="card-text">2019-11-14</p>
                                    <p class="card-text">Carta de presentación</p>
                                    <hr>
                                    <a href="" class="btn boton_ver_mas rounded-0">Ver Más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="width: 21rem;">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4>Últimas Ofertas</h4>
                                    <p class="card-text">2019-11-14</p>
                                    <p class="card-text">Carta de presentación</p>
                                    <hr>
                                    <a href="" class="btn boton_ver_mas rounded-0">Ver Más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="consignar">
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
        </section>

        <section id="footer" class="fondo">
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