<?php require 'variables/variables.php';
$page = 'Inicio';
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
    <div id="contenedor" class="container-fluid body">

        <section id="nav">
            <div class="container col-12">
                <nav class="navbar navbar-light">
                    <div class="col-6">
                        <a class="navbar-brand"> <img class="logo" src="images/isotipo-4.png" width="100" height="100" alt=""> </a>
                    </div>
                    <form class="form-inline">
                        <a class="color_a_nav" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><i class="fas fa-phone mr-2"></i><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?>&nbsp&nbsp</a>
                        <a class="color_a_nav" href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><i class="fas fa-mobile-alt mr-2"></i><?php echo $datos_contacto['celular']['imprimir'] ?></a>
                        <button class="btn  my-2 my-sm-0 boton_dorado rounded-0" type="submit">Contáctanos</button>
                    </form>
                </nav>
            </div>
        </section>

        <section id="hero" class="margen_slider">
            <!--Carousel Wrapper-->
            <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">

                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="view container_movil">
                            <img class="d-block w-100" id="style_slider_img" src="images/ciudad-1.jpg" alt="First slide">
                            <div class="mask rgba-black-light waves-light"></div>
                        </div>
                        <div class="carousel-caption wow fadeInUp" data-wow-delay="0.6s">
                            <h1 id="style_slide_uno" class="h3-responsive"> Maestranza Gestión Inmobiliaria</h1>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view  container_movil">
                            <img class="d-block w-100" id="style_slider_img" src="images/ciudad-3.jpg" alt="Second slide">
                            <div class="mask rgba-black-light waves-light"></div>
                        </div>
                        <div class="carousel-caption wow fadeInLeft" data-wow-delay="0.6s">
                            <h1 id="style_slide_dos" class="h3-responsive"> Trabajamos en tus sueños porque creemos en ellos</h1>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view  container_movil">
                            <img class="d-block w-100" id="style_slider_img" src="images/Manchester Render.jpg" alt="Third slide">
                            <div class="mask rgba-black-light waves-light"></div>
                        </div>
                        <div class="carousel-caption wow fadeInDown" data-wow-delay="0.6s">
                            <h1 id="style_slide_tres" class="h3-responsive">Encuentra la propiedad que siempre has querido</h1>

                        </div>
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left nex_slide "></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right nex_slide "></i></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->

            <!--
            <div class="col-2">
                <img class="d-block w-100" id="logo" src="images/isotipo-4.png" alt="">
            </div>
-->
        </section>

        <section id="buscador">
            <div class="container">
                <div class=" row col-12 cont_interno">
                    <div class="col-xl-3 col-md-4 col-12  margen_busca">
                        <input type="text" class="form-control rounded-0" id="codigo_buscar" placeholder="Código"></div>

                    <div class="col-xl-3 col-md-4 col-12  margen_busca">
                        <select id="ciudad_buscar" class="form-control rounded-0">
                            <option selected="" value="0">Ciudad</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-md-4 col-12  margen_busca"><select id="barrio_buscar" class="form-control rounded-0">
                            <option selected="" value="0">Barrio</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-md-4 col-12  margen_busca"><select id="tipo_gestion_buscar" class="form-control rounded-0">
                            <option selected="" value="0">Tipo de gestión</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-md-4 col-12  margen_busca"><select id="tipo_inmueble_buscar" class="form-control rounded-0">
                            <option selected="" value="0">Tipo de inmueble</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-md-4 col-12  margen_busca">
                        <input type="text" class="form-control rounded-0" id="" placeholder="Área Mínima">
                    </div>
                    <div class="col-xl-3 col-md-4 col-12  margen_busca">
                        <input type="text" class="form-control rounded-0" id="" placeholder="Área Máxima">
                    </div>
                    <div class="col-xl-3 col-md-4 col-12  margen_busca">
                        <input type="text" class="form-control rounded-0" id="" placeholder="Baños">
                    </div>


                    <div class="col-xl-3 col-md-4 col-12  margen_busca">
                        <input type="text" class="form-control rounded-0" id="" placeholder="Alcobas">
                    </div>


                    <div class="col-xl-3 col-md-4 col-12  margen_busca">
                        <input type="text" class="form-control rounded-0" id="codigo_buscar" placeholder="Garajes">
                    </div>


                    <div class="col-xl-3 col-md-4 col-12  margen_busca"><input type="text" class="form-control rounded-0" id="precio_minimo_buscar" onkeyup="format(this)" onchange="format(this)" placeholder=" Precio Mínimo"></div>
                    <div class="col-xl-3 col-md-4 col-12  margen_busca"><input type="text" class="form-control rounded-0" id="precio_maximo_buscar" onkeyup="format(this)" onchange="format(this)" placeholder=" Precio Máximo"></div>
                    <div class="col-xl-12 col-md-12 col-12  margen_busca">
                        <button type="button" class="btn rounded-0 col-9 boton_buscar boton_dorado posicion_buscar" id="buscar"><span>Buscar</span></button></div>

                </div>
            </div>
        </section>

        <section id="texto_logo" class="text-center">
            <div class="col-12">
                <img src="images/Maestranza Logo 3.png" width="300" height="300" alt="">
            </div>
            <div class="col-12 contenedor_parrafo">
                <p class="text-justify"><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][0] ?></p>
                <p class="text-justify"><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][1] ?></p>
                <button type="button" class="btn rounded-0 col-2 boton_buscar boton_azul" id="buscar"><span>Ver más</span></button>
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
                                <div class="item" style="height: 180px;">
                                    <div class="card">
                                        <a href="./detalle_inmueble.php?co=90">
                                            <img src="images/no_image.png" class="card-img-top" alt="...">
                                        </a>
                                        <span class="precio_inmueble">$950,000,000</span>
                                        <span class="gestion_inmueble">Apartamento en Venta</span>
                                        <div class="card-body">
                                            <div class="col-md-12 row">
                                                <div class="col-md-12">
                                                    <p class="mb-1">
                                                        <i class="fas fa-map-marker-alt mr-2 dorado">
                                                            <b class="color_palabras">Ubicación</b>
                                                        </i>
                                                    </p>
                                                </div>

                                                <div class="col-md-12">
                                                    <p class="mb-1">
                                                        <b class="color_palabras">Código: 90</b>
                                                    </p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="mb-1">
                                                        <a href="" class="btn rounded-0 col-9 boton_cards contenedor_bot_card"><span>Ver Más</span></a>
                                                    </p>
                                                </div>
                                            </div>
                                            <hr class="color_linea_divisora_Card">
                                            <div class="col-md-12 row ">

                                                <ul class="info_inmueble mt-3">
                                                    <li class="container_li">
                                                        <i class="fas fa-chart-area icono_inmueble mr-1 dorado"></i>
                                                        <b class="color_palabras">146m<sup>2</sup></b>

                                                    </li>
                                                    <li class="container_li">
                                                        <i class="fas fa-bath icono_inmueble mr-1 dorado"></i>
                                                        <b class="color_palabras"> 4</b>

                                                    </li>
                                                    <li class="container_li">
                                                        <i class="fa fa-bed icono_inmueble mr-1 dorado"></i>
                                                        <b class="color_palabras">3</b>

                                                    </li>
                                                    <li class="container_li">
                                                        <i class="fa fa-car icono_inmueble mr-1 dorado"></i>
                                                        <b class="color_palabras">3</b>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item" style="height: 180px;">
                                    <div class="card">
                                        <a href="./detalle_inmueble.php?co=90">
                                            <img src="images/no_image.png" class="card-img-top" alt="...">
                                        </a>
                                        <span class="precio_inmueble">$950,000,000</span>
                                        <span class="gestion_inmueble">Apartamento en Venta</span>
                                        <div class="card-body">
                                            <div class="col-md-12 row">
                                                <div class="col-md-12">
                                                    <p class="mb-1">
                                                        <i class="fas fa-map-marker-alt mr-2 dorado">
                                                            <b class="color_palabras">Ubicación</b>
                                                        </i>
                                                    </p>
                                                </div>

                                                <div class="col-md-12">
                                                    <p class="mb-1">
                                                        <b class="color_palabras">Código: 90</b>
                                                    </p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="mb-1">
                                                        <a href="" class="btn rounded-0 col-9 boton_cards contenedor_bot_card"><span>Ver Más</span></a>
                                                    </p>
                                                </div>
                                            </div>
                                            <hr class="color_linea_divisora_Card">
                                            <div class="col-md-12 row ">

                                                <ul class="info_inmueble mt-3">
                                                    <li class="container_li">
                                                        <i class="fas fa-chart-area icono_inmueble mr-1 dorado"></i>
                                                        <b class="color_palabras">146m<sup>2</sup></b>

                                                    </li>
                                                    <li class="container_li">
                                                        <i class="fas fa-bath icono_inmueble mr-1 dorado"></i>
                                                        <b class="color_palabras"> 4</b>

                                                    </li>
                                                    <li class="container_li">
                                                        <i class="fa fa-bed icono_inmueble mr-1 dorado"></i>
                                                        <b class="color_palabras">3</b>

                                                    </li>
                                                    <li class="container_li">
                                                        <i class="fa fa-car icono_inmueble mr-1 dorado"></i>
                                                        <b class="color_palabras">3</b>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item" style="height: 180px;">
                                    <div class="card">
                                        <a href="./detalle_inmueble.php?co=90">
                                            <img src="images/no_image.png" class="card-img-top" alt="...">
                                        </a>
                                        <span class="precio_inmueble">$950,000,000</span>
                                        <span class="gestion_inmueble">Apartamento en Venta</span>
                                        <div class="card-body">
                                            <div class="col-md-12 row">
                                                <div class="col-md-12">
                                                    <p class="mb-1">
                                                        <i class="fas fa-map-marker-alt mr-2 dorado">
                                                            <b class="color_palabras">Ubicación</b>
                                                        </i>
                                                    </p>
                                                </div>

                                                <div class="col-md-12">
                                                    <p class="mb-1">
                                                        <b class="color_palabras">Código: 90</b>
                                                    </p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="mb-1">
                                                        <a href="" class="btn rounded-0 col-9 boton_cards contenedor_bot_card"><span>Ver Más</span></a>
                                                    </p>
                                                </div>
                                            </div>
                                            <hr class="color_linea_divisora_Card">
                                            <div class="col-md-12 row ">

                                                <ul class="info_inmueble mt-3">
                                                    <li class="container_li">
                                                        <i class="fas fa-chart-area icono_inmueble mr-1 dorado"></i>
                                                        <b class="color_palabras">146m<sup>2</sup></b>

                                                    </li>
                                                    <li class="container_li">
                                                        <i class="fas fa-bath icono_inmueble mr-1 dorado"></i>
                                                        <b class="color_palabras"> 4</b>

                                                    </li>
                                                    <li class="container_li">
                                                        <i class="fa fa-bed icono_inmueble mr-1 dorado"></i>
                                                        <b class="color_palabras">3</b>

                                                    </li>
                                                    <li class="container_li">
                                                        <i class="fa fa-car icono_inmueble mr-1 dorado"></i>
                                                        <b class="color_palabras">3</b>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item" style="height: 180px;">
                                    <div class="card">
                                        <a href="./detalle_inmueble.php?co=90">
                                            <img src="images/no_image.png" class="card-img-top" alt="...">
                                        </a>
                                        <span class="precio_inmueble">$950,000,000</span>
                                        <span class="gestion_inmueble">Apartamento en Venta</span>
                                        <div class="card-body">
                                            <div class="col-md-12 row">
                                                <div class="col-md-12">
                                                    <p class="mb-1">
                                                        <i class="fas fa-map-marker-alt mr-2 dorado">
                                                            <b class="color_palabras">Ubicación</b>
                                                        </i>
                                                    </p>
                                                </div>

                                                <div class="col-md-12">
                                                    <p class="mb-1">
                                                        <b class="color_palabras">Código: 90</b>
                                                    </p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="mb-1">
                                                        <a href="" class="btn rounded-0 col-9 boton_cards contenedor_bot_card"><span>Ver Más</span></a>
                                                    </p>
                                                </div>
                                            </div>
                                            <hr class="color_linea_divisora_Card">
                                            <div class="col-md-12 row ">

                                                <ul class="info_inmueble mt-3">
                                                    <li class="container_li">
                                                        <i class="fas fa-chart-area icono_inmueble mr-1 dorado"></i>
                                                        <b class="color_palabras">146m<sup>2</sup></b>

                                                    </li>
                                                    <li class="container_li">
                                                        <i class="fas fa-bath icono_inmueble mr-1 dorado"></i>
                                                        <b class="color_palabras"> 4</b>

                                                    </li>
                                                    <li class="container_li">
                                                        <i class="fa fa-bed icono_inmueble mr-1 dorado"></i>
                                                        <b class="color_palabras">3</b>

                                                    </li>
                                                    <li class="container_li">
                                                        <i class="fa fa-car icono_inmueble mr-1 dorado"></i>
                                                        <b class="color_palabras">3</b>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                    <div class="col-5 border color_fichas border-dark cont_servi cont_servi cont_arrendamiento">
                                        <div class="text-center">
                                            <i class="cont_icono <?php echo $iconos_servicios['arrendamientos'] ?>"></i>
                                        </div>
                                        <h4 class="text-center text_servi">Arrendamientos</h4>
                                    </div>
                                    <div class="col-5 border color_fichas border-dark cont_servi cont_ventas">
                                        <div class="text-center">
                                            <i class="cont_icono <?php echo $iconos_servicios['ventas'] ?>"></i>
                                        </div>
                                        <h4 class="text-center text_servi">Ventas</h4>
                                    </div>
                                    <div class="col-5 border color_fichas border-dark cont_servi cont_arrendamiento">
                                        <div class="text-center">
                                            <i class="cont_icono <?php echo $iconos_servicios['administracion'] ?>"></i>
                                        </div>
                                        <h4 class="text-center text_servi">Administración</h4>
                                    </div>
                                    <div class="col-5 border color_fichas border-dark cont_servi cont_ventas">
                                        <div class="text-center">
                                            <i class="cont_icono <?php echo $iconos_servicios['samyl'] ?>"></i>
                                        </div>
                                        <h4 class="text-center text_servi">Samyl</h4>
                                    </div>
                                    <div class="col-5 border color_fichas border-dark cont_servi cont_arrendamiento">
                                        <div class="text-center">
                                            <i class="cont_icono <?php echo $iconos_servicios['corretaje'] ?>"></i>
                                        </div>
                                        <h4 class="text-center text_servi">Corretaje</h4>
                                    </div>
                                    <div class="col-5 border color_fichas border-dark cont_servi cont_ventas">
                                        <div class="text-center">
                                            <i class="cont_icono <?php echo $iconos_servicios['gerencia_comercial'] ?>"></i>
                                        </div>
                                        <h4 class="text-center text_servi">Gerencia Comercial</h4>
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
                                <a href="">
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
            <h2 class="text-center titulo">
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
                        <div class="col-5">
                            <h2>¿Quieres consignar tu inmueble?</h2>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-1"></div>
                        <div class="col-3">
                            <a href="" class="btn color_btn rounded-0">Consignar Inmueble</a>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>

            </div>
        </section>

        <section id="footer" class="fondo">
            <footer>
                <div class="">
                    <div class="col-12 border border-dark">
                        <div class="row">
                            <div class="col-4 border border-dark text-center">
                                <img class="logo_footer" src="images/isotipo-4.png" alt="">
                                <ul class="margen_iconos pl-0">
                                    <a href="<?php echo $redes_sociales['facebook']['link'] ?>" target="black">
                                        <i class="<?php echo $redes_sociales['facebook']['icono'] ?> style_icono"></i>
                                    </a>
                                    <a href="<?php echo $redes_sociales['instagram']['link'] ?>" target="black">
                                        <i class="<?php echo $redes_sociales['instagram']['icono'] ?> style_icono"></i>
                                    </a>
                                    <a href="<?php echo $redes_sociales['twitter']['link'] ?>" target="black">
                                        <i class="<?php echo $redes_sociales['twitter']['icono'] ?> style_icono"></i>
                                    </a>
                                    <a href="<?php echo $redes_sociales['linkedin']['link'] ?>" target="black">
                                        <i class="<?php echo $redes_sociales['linkedin']['icono'] ?> style_icono"></i>
                                    </a>
                                    <a href="<?php echo $redes_sociales['youtube']['link'] ?>" target="black">
                                        <i class="<?php echo $redes_sociales['youtube']['icono'] ?> style_icono"></i>
                                    </a>
                                </ul>
                            </div>
                            <div class="col-5 text-center border border-dark top_mapa">
                                <iframe class="tamaño_mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.482739032481!2d-75.57444938573427!3d6.1998657285622025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e468287192c26c9%3A0xaa897f73e144ce40!2sMaestranza%20Gesti%C3%B3n%20Inmobilaria!5e0!3m2!1ses!2sco!4v1573754140859!5m2!1ses!2sco" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                <div class="container">
                                    <a target="blanck" href="https://www.google.com/maps/place/Maestranza+Gesti%C3%B3n+Inmobilaria/@6.1998657,-75.5744494,17z/data=!3m1!4b1!4m5!3m4!1s0x8e468287192c26c9:0xaa897f73e144ce40!8m2!3d6.1998604!4d-75.5722607" class="btn col-12 rounded-0 boton_como_llegar">Como llegar</a>
                                </div>
                            </div>

                            <div class="col-3 margen_telefono">
                                <div class="col-12 text-center div_info">
                                    <h4 class="color_info">Información</h4>
                                </div>
                                <ul class="cont_contact">
                                    <li class="estylo_teelfonos">
                                        <a href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>">
                                            <i class=" <?php echo $datos_contacto['telefono_fijo']['icono'] ?>"></i>
                                            <?php echo $datos_contacto['telefono_fijo']['imprimir'] ?>
                                        </a>
                                    </li>
                                    <li class="estylo_teelfonos">
                                        <a href="tel:<?php echo $datos_contacto['celular']['link'] ?>">
                                            <i class="mr-2 <?php echo $datos_contacto['celular']['icono'] ?>"></i>
                                            <?php echo $datos_contacto['celular']['imprimir'] ?>
                                        </a>
                                    </li>
                                    <li class="estylo_teelfonos">
                                        <a href=" <?php echo $datos_contacto['whatsapp']['link'] ?>" target="blanck">
                                            <i class="mr-2 <?php echo $datos_contacto['whatsapp']['icono'] ?>"></i>
                                            <?php echo $datos_contacto['whatsapp']['imprimir'] ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="footer-bottom-area d-flex justify-content-between col-12 mt-4">
                    <div class="container col-9">
                        <p class="copy_style"> Diseñado y Desarrollado por <a class="color_a_foot_imper" target="blanck" href="https://www.dexcondigital.com">Dexcon Digital </a>©Copyright 2019 para Inmobiliaria Maestranza. Todos los derechos reservados.</p>
                    </div>
                    <div class="container col-3">
                        <p class=""><a class="color_a_foot_imper" href="Política de tratamiento de datos personales.pdf" download="Politica de tratamiento de infromación.pdf"> Política de tratamiento de datos</p>
                    </div>
                </div>
            </footer>
        </section>




        <script>
            var pagina = 'inicio'
        </script>

        <?php include('layout/archivosfooter.php'); ?>


</body>

</html>