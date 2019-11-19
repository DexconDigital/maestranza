<?php require 'variables/variables.php';
$page = 'Detalle Inmueble';
$nombre_inmobiliaria = 'Inmobiliaria Maestranza' ?>

<!DOCTYPE html>
<html lang="es">


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php include 'layout/archivosheader.php'; ?>
<link rel="stylesheet" href="./css/carousel.tamanos.css">
<link rel="stylesheet" href="./css/slick.css">
<link rel="stylesheet" href="./css/slick-theme.css">
<link rel="stylesheet" href="./menu/bootstrap.css">
<link rel="stylesheet" href="./menu/menu.css">
<title> <?php echo $page . ' | ' . $nombre_inmobiliaria; ?></title>

<header class="webp-creative-header">

    <?php include 'layout/menu.php' ?>

</header>


<body>

    <section id="cont_margen_total">
        <div class="container">
            <div class="col-12">
                <div class="col-6">
                    <h4>Apartamento en Arriendo</h4>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3">
                                <p>Código: <span> 3</span></p>
                            </div>
                            <div class="col-8">
                                <p>Precio: <span> $300.000</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contacto">
        <div class="container">
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <!-- main slider carousel items -->
                        <section class="mt-3" id="slide-detalle">
                            <div class="contenedor-img">
                                <img src="images/no_image.png" alt="">
                            </div>
                            <div class="contenedor-img">
                                <img src="images/no_image.png" alt="">
                            </div>
                            <div class="contenedor-img">
                                <img src="images/no_image.png" alt="">
                            </div>
                            <div class="contenedor-img">
                                <img src="images/no_image.png" alt="">
                            </div>


                        </section>
                        <section class="vertical-center-4 slider" id="miniaturas">
                            <div class="contenedor-img">
                                <img src="images/no_image.png" alt="">
                            </div>
                            <div class="contenedor-img">
                                <img src="images/no_image.png" alt="">
                            </div>
                            <div class="contenedor-img">
                                <img src="images/no_image.png" alt="">
                            </div>
                            <div class="contenedor-img">
                                <img src="images/no_image.png" alt="">
                            </div>
                            <div class="contenedor-img">
                                <img src="images/no_image.png" alt="">
                            </div>

                        </section>
                        <div class="col-12 mt-4">
                            <div class="row">
                                <div class="col-7">
                                    <button type="button" class="btn color_comparit rounded-0 col-8 compartir_boton" name=""><a class="color_blanco_url" href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?" target="_blank">Imprimir ficha</a></button>
                                </div>

                                <div class="col-md-3 col-lg-4 col-6 col-sm-1 mr-2 texto_compartir">
                                    <h5 class="compartir">Compartir por :</h5>
                                </div>
                                <div class="col-2 margen_iconos">
                                    <div class="row">
                                        <div class="col-md-5 col-2 col-sm-1 mr-1 icon_foot row"><a href="" target="_blank"><i class="fab fa-whatsapp"></i></a></div>
                                        <div class="col-md-5 col-2 col-sm-1 mr-2 icon_foot row"><a href="" target="_blank"><i class="fab fa-twitter "></i></a></div>
                                        <div class="col-md-5 col-2 col-sm-1 mr-1 icon_foot row"><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="referencia_inmueble" class="col-md-12 mt-4">
                            <h4 class="property-single-detail-title">Descripción</h4>
                            <!--  <p style="text-align: justify;"><?php echo $descripcion ?></p> -->
                        </div>
                        <div class="col-md-12" style="margin-bottom: 12px;">
                            <h4 class="property-single-detail-title">Características</h4>
                            <!--   <ul class="pl-4">
                                <li>Código: <?php echo $co; ?></li>
                                <li>Alcobas: <?php echo $alcobas; ?></li>
                                <li>Baños: <?php echo $banios; ?></li>
                                <li>Área Construida: <?php echo $area_construida; ?>m<sup>2<sup></li>
                                <li>Área Privada: <?php echo $area_privada; ?>m<sup>2<sup></li>
                                <li>Garaje: <?php echo $garaje; ?></li>
                                <li>Estrato: <?php echo $estrato; ?></li>
                                <li>Edad Inmueble: <?php echo $edad_inmueble; ?> años</li>
                                <?php if ($administracion != "") {
                                    echo '<li>Administración: $' . $administracion . '</li>';
                                } ?>
                            </ul> -->
                        </div>
                        <div id="referencia_inmueble" class="col-md-12 mt-3  ">
                            <h4 class="property-single-detail-title">Video</h4>
                        </div>
                        <div class="col-md-12">
                            <h4 class="property-single-detail-title">Mapa de Ubicación</h4>
                            <div class="card mapa_tamaño">
                                <div class="">
                                    <div id="map" class="w-100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row caja">
                            <div class="col-4">
                                <img src="images/no_image.png" width="100%" height="100%" alt="">
                            </div>
                            <div class="col-8">
                                <p>Nombre: <span>Nombre y Apellido</span></p>
                                <p>Telefono:<span> 321 321 321</span></p>
                                <p>Correo: <span>Dominio@ejemplo.com</span></p>
                            </div>
                        </div>
                        <div class="container p-3">
                            <div class="col-12">
                                <div class="col-xl-12 col-md-4 col-12  margen_busca">
                                    <input type="text" class="form-control rounded-0" id="" placeholder="Nombre y Apellido">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="col-xl-12 col-md-4 col-12  margen_busca">
                                    <input type="text" class="form-control rounded-0" id="" placeholder="Correo Electrónico">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="col-xl-12 col-md-4 col-12  margen_busca">
                                    <input type="text" class="form-control rounded-0" id="" placeholder="Teléfono">
                                </div>
                            </div>
                            <div class="col-12 caja_texto">
                                <div class="form-group">
                                    <textarea cols="15" rows="5" name="message" class="textarea form-control tamaño_tex_area" placeholder="Mensaje"></textarea>
                                </div>
                            </div>
                            <div class="col-12 div_condiciones">
                                <div class="custom-control custom-checkbox mb-4">
                                    <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy" required>
                                    <label class="custom-control-label" for="defaultContactFormCopy">Confimo que he leído, entendido y acepto la<a class="color_a_condiciones" href="Política de tratamiento de datos personales.pdf" download="Politica de tratamiento de infromación.pdf"> política de tratamiento de datos personales.</a></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 p-5">
                            <div class="text-center">
                                <h5 class="propiedades_similares">
                                    Propiedades Similares
                                </h5>
                            </div>
                            <div class="">
                                <div class="item mb-4">
                                    <div class="card" style="">
                                        <div class="property">
                                            <a href="detalle_inmueble.php?co=40">
                                                <div class="property-image">
                                                    <img class="alto_img" alt="" src="images/no_image.png"></div>
                                                <div class="overlay">

                                                </div>
                                            </a>
                                        </div>
                                        <div class=" row col-12 margen_card">
                                            <div class="col-12">
                                                <p class="mb-1"><b>Oficinas en Arriendo</b></p>
                                            </div>
                                            <div class="col-12">
                                                <p class="mb-1"><i class="fas fa-map-marker-alt mr-2"></i>El Contador, Bogota</p>
                                            </div>
                                            <hr>
                                            <div class="col-12">
                                                <p class="mb-1"> <small>
                                                        Código:40
                                                    </small>
                                                </p>
                                            </div>
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






    <section id="footer" class="fondo">
        <?php include 'layout/footer.php' ?>
    </section>

</body>

<script>
    var pagina = 'detalle_inmuebles'
</script>
<!-- jQuery -->
<script src="./menu/jquery.min.js.download"></script>

<!-- Bootstrap -->
<script src="./menu/bootstrap.js.download"></script>

<!-- from slider -->
<script src="./menu/menu.js.download"></script>
<?php include('layout/archivosfooter.php'); ?>
<script src="js/slick.min.js"></script>
<script>
    $('#slide-detalle').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '#miniaturas'
    });
    $('#miniaturas').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '#slide-detalle',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        variableWidth: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }
        ]
    });
</script>

</html>