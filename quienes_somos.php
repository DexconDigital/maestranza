<?php require 'variables/variables.php';
$page = 'Quiénes Somos';
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

<body class="container-fluid p-0">

    <section id="contact">
        <?php include 'layout/header2.php'  ?>
    </section>

    <section id="texto_contacto" class="container text-center">
        <div class="col-12">
            <img src="images/Maestranza Logo 3.png" width="300" height="300" alt="">
        </div>
        <h2 class="titulo_cont"><?php echo $texto_quienes_somos['quienes_somos']['titulo'] ?></h2>
        <div class="col-12 mt-4">
            <div class="container text-justify">
                <p><?php echo $texto_quienes_somos['quienes_somos']['parrafos'][0] ?>&nbsp<?php echo $texto_quienes_somos['quienes_somos']['parrafos'][1] ?></p>

            </div>
        </div>

    </section>

    <section id="banner_contador">
        <div class="cont" id="contador">
            <div class="col-12">
                <div class="row text-center">
                    <div class="col-lg-3 col-md-6 col-12 mb-4 color_conted">
                        <h1 id="counter-propertys"></h1>
                        <h5>Total Inmuebles</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-4 color_conted">
                        <h1 id="counter-rent"></h1>
                        <h5> Inmuebles en Arriendo</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-4 color_conted">
                        <h1 id="counter-sale"></h1>
                        <h5>Inmuebles en Venta</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-4 color_conted">
                        <h1 id="counter-sale-rent"></h1>
                        <h5>Inmuebles en Arriendo/Venta</h5>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section id="slider_mision_vision" class="slider1_quienes">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner ">
                    <div class="carousel-item">
                        <img src="images/fondo_blanco.JPG" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block cont_top">
                            <h2>
                                <?php echo $texto_quienes_somos['mision']['titulo'] ?>
                            </h2>
                            <p>
                                <?php echo $texto_quienes_somos['mision']['parrafo'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/fondo_blanco.JPG" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block cont_top">
                            <h2>
                                <?php echo $texto_quienes_somos['vision']['titulo'] ?>
                            </h2>
                            <p> <?php echo $texto_quienes_somos['vision']['parrafo'] ?></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/fondo_blanco.JPG" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block cont_top_valores">
                            <h2 class="color_titulo"><?php echo $texto_quienes_somos['valores']['titulo'] ?></h2>
                            <div class="col-12">
                                <div class="row text-center">
                                    <div class="col-lg-4 col-md-6 col-4">
                                        <h5 class="color_titulo_valores"><?php echo $texto_quienes_somos['valores']['parrafos'][0]['titulo'] ?></h5>
                                        <p class="text-justify"><?php echo $texto_quienes_somos['valores']['parrafos'][0]['parrafo'] ?></p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-4">
                                        <h5 class="color_titulo_valores"><?php echo $texto_quienes_somos['valores']['parrafos'][2]['titulo'] ?></h5>
                                        <p class="text-justify"><?php echo $texto_quienes_somos['valores']['parrafos'][2]['parrafo'] ?></p>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-4">
                                        <h5 class="color_titulo_valores"><?php echo $texto_quienes_somos['valores']['parrafos'][1]['titulo'] ?></h5>
                                        <p class="text-justify"><?php echo $texto_quienes_somos['valores']['parrafos'][1]['parrafo'] ?></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- active -->
                    <div class="carousel-item active">
                        <img src="images/fondo_blanco.JPG" class="d-block w-100" alt="...">
                        <div id="cont_top_valores2" class="carousel-caption d-none d-md-block">
                            <h2 id="valores" class="color_titulo"><?php echo $texto_quienes_somos['valores']['titulo'] ?></h2>
                            <div class="col-12">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <h5 class="color_titulo_valores"><?php echo $texto_quienes_somos['valores']['parrafos'][3]['titulo'] ?></h5>
                                        <p class="text-justify"><?php echo $texto_quienes_somos['valores']['parrafos'][3]['parrafo'] ?></p>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="color_titulo_valores"><?php echo $texto_quienes_somos['valores']['parrafos'][4]['titulo'] ?></h5>
                                        <p class="text-justify"><?php echo $texto_quienes_somos['valores']['parrafos'][4]['parrafo'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="" aria-hidden="true">
                        <i class="fas fa-angle-left color"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="" aria-hidden="true">
                        <i class="fas fa-angle-right color"></i>
                    </span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <!-- slider movil -->
    <section id="slider22_mision_vision" class="mt-5 mb-5  slider22_quienes">
        <div class="bd-example22">
            <div id="carouselExampleCaptions2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaption2" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaption2" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaption2" data-slide-to="2"></li>
                </ol>
                <!-- mision -->
                <div class="carousel-inner">
                    <div class="carousel-item active" style="padding-top: 10%;">
                        <img src="images/fondo_blanco.JPG" class="d-block w-100" alt="...">
                        <div class="carousel-caption  cont_top_valores_mision22">
                            <h2 id="color_titulo_valores22">
                                <?php echo $texto_quienes_somos['mision']['titulo'] ?>
                            </h2>
                            <p class="tamaños_parrafo">
                                <?php echo $texto_quienes_somos['mision']['parrafo'] ?>
                            </p>
                        </div>
                    </div>
                    <!-- vision -->
                    <div class="carousel-item" style="padding-top: 6%;">
                        <img src="images/fondo_blanco.JPG" class="d-block w-100" alt="...">
                        <div class="carousel-caption  cont_top_valores22">
                            <h2 id="color_titulo_valores22">
                                <?php echo $texto_quienes_somos['vision']['titulo'] ?>
                            </h2>
                            <p class="tamaños_parrafo"> <?php echo $texto_quienes_somos['vision']['parrafo'] ?></p>
                        </div>
                    </div>
                    <!-- honestidad -->
                    <div class="carousel-item" style="padding-top: 11%;">
                        <img src="images/fondo_blanco.JPG" class="d-block w-100" alt="...">
                        <div class="carousel-caption  cont_top_valores_honestidad22">
                            <h2 class="color_titulo22"><?php echo $texto_quienes_somos['valores']['titulo'] ?></h2>

                            <div class="col-lg-12 col-md-6 col-12">
                                <h5 id="color_titulo_valores22"><?php echo $texto_quienes_somos['valores']['parrafos'][0]['titulo'] ?></h5>
                                <p class="text-center tamaños_parrafo"><?php echo $texto_quienes_somos['valores']['parrafos'][0]['parrafo'] ?></p>
                            </div>

                        </div>
                    </div>
                    <!-- responsabilidad -->
                    <div class="carousel-item " style="padding-top: 11%;">
                        <img src="images/fondo_blanco.JPG" class="d-block w-100" alt="...">
                        <div class="carousel-caption  cont_top_valores_responsa22">
                            <h2 class="color_titulo22"><?php echo $texto_quienes_somos['valores']['titulo'] ?></h2>

                            <div class="col-lg-12 col-md-6 col-12">
                                <h5 id="color_titulo_valores22"><?php echo $texto_quienes_somos['valores']['parrafos'][1]['titulo'] ?></h5>
                                <p class="text-center tamaños_parrafo"><?php echo $texto_quienes_somos['valores']['parrafos'][1]['parrafo'] ?></p>
                            </div>

                        </div>
                    </div>
                    <!-- respeto -->
                    <div class="carousel-item">
                        <img src="images/fondo_blanco.JPG" class="d-block w-100" alt="...">
                        <div class="carousel-caption  cont_top_valores_respeto22">
                            <h2 class="color_titulo22"><?php echo $texto_quienes_somos['valores']['titulo'] ?></h2>
                            <div class="col-lg-12 col-md-12 col-12">
                                <h5 id="color_titulo_valores22"><?php echo $texto_quienes_somos['valores']['parrafos'][2]['titulo'] ?></h5>
                                <p class="text-center tamaños_parrafo"><?php echo $texto_quienes_somos['valores']['parrafos'][2]['parrafo'] ?></p>
                            </div>

                        </div>
                    </div>
                    <!-- active -->
                    <!-- trabajo en equipo -->
                    <div class="carousel-item" style="padding-top: 8%;">
                        <img src="images/fondo_blanco.JPG" class="d-block w-100" alt="...">
                        <div class="carousel-caption  cont_top_valores222">
                            <h2 class="color_titulo22"><?php echo $texto_quienes_somos['valores']['titulo'] ?></h2>
                            <div class="col-12">
                                <h5 id="color_titulo_valores22"><?php echo $texto_quienes_somos['valores']['parrafos'][3]['titulo'] ?></h5>
                                <p class="text-center tamaños_parrafo"><?php echo $texto_quienes_somos['valores']['parrafos'][3]['parrafo'] ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- calidad -->
                    <div class="carousel-item" style="padding-top: 8%;">
                        <img src="images/fondo_blanco.JPG" class="d-block w-100" alt="...">
                        <div class="carousel-caption  cont_top_valores_calidad222">
                            <h2 class="color_titulo22"><?php echo $texto_quienes_somos['valores']['titulo'] ?></h2>
                            <div class="col-12">
                                <h5 id="color_titulo_valores22"><?php echo $texto_quienes_somos['valores']['parrafos'][4]['titulo'] ?></h5>
                                <p class="text-center tamaños_parrafo"><?php echo $texto_quienes_somos['valores']['parrafos'][4]['parrafo'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions2" role="button" data-slide="prev">
                    <span class="" aria-hidden="true">
                        <i class="fas fa-angle-left color"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions2" role="button" data-slide="next">
                    <span class="" aria-hidden="true">
                        <i class="fas fa-angle-right color"></i>
                    </span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <i class="fas fa-angle-double-up subir"></i>
    <section id="footer" class="fondo">
        <div class="overlay">
        </div>
        <footer>
            <div class="">
                <div class=" container col-11 ">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12  text-center">
                            <a href="index.php">
                                <img class="logo_footer" src="images/isotipo-4.png" alt="">
                            </a>
                            <ul class="margen_iconos pl-0">
                                <a href="<?php echo $redes_sociales['facebook']['link'] ?>" target="_blank">
                                    <i class="<?php echo $redes_sociales['facebook']['icono'] ?> style_icono"></i>
                                </a>
                                <a href="<?php echo $redes_sociales['instagram']['link'] ?>" target="_blank">
                                    <i class="<?php echo $redes_sociales['instagram']['icono'] ?> style_icono"></i>
                                </a>
                                <a href="<?php echo $redes_sociales['twitter']['link'] ?>" target="_blank">
                                    <i class="<?php echo $redes_sociales['twitter']['icono'] ?> style_icono"></i>
                                </a>
                                <a href="<?php echo $redes_sociales['linkedin']['link'] ?>" target="_blank">
                                    <i class="<?php echo $redes_sociales['linkedin']['icono'] ?> style_icono"></i>
                                </a>
                                <a href="<?php echo $redes_sociales['youtube']['link'] ?>" target="_blank">
                                    <i class="<?php echo $redes_sociales['youtube']['icono'] ?> style_icono"></i>
                                </a>
                            </ul>
                        </div>
                        <div class="col-lg-5 col-md-12 col-12 text-center  top_mapa">
                            <iframe class="tamaño_mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.482739032481!2d-75.57444938573427!3d6.1998657285622025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e468287192c26c9%3A0xaa897f73e144ce40!2sMaestranza%20Gesti%C3%B3n%20Inmobilaria!5e0!3m2!1ses!2sco!4v1573754140859!5m2!1ses!2sco" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            <div class="container pl-0">
                                <a target="blanck" href="https://www.google.com/maps/place/Maestranza+Gesti%C3%B3n+Inmobilaria/@6.1998657,-75.5744494,17z/data=!3m1!4b1!4m5!3m4!1s0x8e468287192c26c9:0xaa897f73e144ce40!8m2!3d6.1998604!4d-75.5722607" class="btn col-12 rounded-0 boton_como_llegar">Como llegar</a>
                            </div>
                        </div>

                        <div class="col-lg-3  col-md-6 col-12 margen_telefono">
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
                                <!-- <li class="estylo_teelfonos">
                            <a href=" <?php echo $datos_contacto['whatsapp']['link'] ?>" target="blanck">
                                <i class="mr-2 <?php echo $datos_contacto['whatsapp']['icono'] ?>"></i>
                                <?php echo $datos_contacto['whatsapp']['imprimir'] ?>
                            </a>
                        </li> -->
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer-bottom-area row col-12 mt-4 contenedor_footer">
                <div class="container col-lg-9 col-md-7 col-10 texto_footer2">
                    <p class="copy_style"> Diseñado y Desarrollado por <a class="color_a_foot_imper" target="blanck" href="https://www.dexcondigital.com">Dexcon Digital </a>©Copyright 2020 para Inmobiliaria Maestranza. Todos los derechos reservados.</p>
                </div>
                <div class="container col-lg-3 col-md-3  col-12 p-0 tex-politica">
                    <p class=""><a class="color_a_foot_imper" href="Politica_de_tratamiento_de_datos_personales.pdf" download="Politica de tratamiento de infromación.pdf"> Política de tratamiento de datos</p>
                </div>
            </div>
        </footer>
    </section>

</body>

<script>
    var pagina = 'quienes_somos'
</script>
<!-- jQuery -->
<script src="./menu/jquery.min.js.download"></script>
<!-- Bootstrap -->
<script src="./menu/bootstrap.js.download"></script>
<!-- from slider -->
<script src="./menu/menu.js.download"></script>
<?php include('layout/archivosfooter.php'); ?>
<!--  contador -->
<script src="js/countUp.min.js"></script>
<script src="js/counter-propertys.js"></script>

</html>