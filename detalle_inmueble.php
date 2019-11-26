<?php require 'variables/variables.php';
require 'controllers/detalleInmuebleController.php';
$page = 'Detalle Inmueble';
$nombre_inmobiliaria = 'Inmobiliaria Maestranza' ?>

<!DOCTYPE html>
<html lang="es">


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php include 'layout/archivosheader.php'; ?>
<!--scrip importante -->
<?php include 'layout/archivosheader.php' ?>
<link rel="stylesheet" href="css/carousel.inmuebles.css">
<link rel="stylesheet" href="mapas/leaflet.css" crossorigin="" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
<meta property="og:title" content="<?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?>" />
<meta property="og:description" content="Inmueble ubicado en: <?php echo $r['barrio'] . ', ' . $r['ciudad'] . ', ' . $r['depto']; ?> " />
<meta property="og:image" itemprop="image" content="<?php echo $r['fotos'][0]['foto']; ?>" />
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="300">
<meta property="og:image:height" content="300">
<style>
    #map {
        height: 350px;
        z-index: 20;
    }

    .leaflet-control {
        z-index: 200;
    }

    .leaflet-control {
        z-index: 20;
    }
</style>
<link rel="stylesheet" href="./css/carousel.tamanos.css">
<link rel="stylesheet" href="./css/all.min.css">
<link rel="stylesheet" href="./css/slick.css">
<link rel="stylesheet" href="./css/slick-theme.css">
<link rel="stylesheet" href="./menu/bootstrap.css">
<link rel="stylesheet" href="./menu/menu.css">
<title> <?php echo $page . ' | ' . $nombre_inmobiliaria; ?></title>
<link itemprop="thumbnailUrl" href="<?php echo $r['fotos'][0]['foto']; ?>">
<span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
    <link itemprop="url" href="<?php echo $r['fotos'][0]['foto']; ?>">
</span>


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
                                <p>Código: <span> <?php echo $co; ?></span></p>
                            </div>
                            <div class="col-8">
                                <p>Precio:
                                    <?php if ($r['Gestion'] == 'Arriendo') {
                                        echo '<span class="precio">$ ' . $r['ValorCanon'] . '</span>';
                                    } else if ($r['Gestion'] == 'Venta') {
                                        echo '<span class="precio">$ ' . $r['ValorVenta'] . '</span>';
                                    } else {
                                        echo '<span class="precio">$ ' . $r['ValorCanon'] . ' /$' . $r['ValorVenta'] . '</span>';
                                    }
                                    ?>
                                </p>
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
                            <?php
                            if (isset($r['fotos'])) {
                                for ($i = 0; $i < count($r['fotos']); $i++) {
                                    echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                                }
                            } else {
                                echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                            }
                            ?>
                        </section>
                        <section class="vertical-center-4 slider" id="miniaturas">
                            <?php
                            if (isset($r['fotos'])) {
                                for ($i = 0; $i < count($r['fotos']); $i++) {
                                    echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                                }
                            } else {
                                echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                            }
                            ?>
                        </section>
                        <div class="col-12 mt-4">
                            <div class="row">
                                <div class="col-7">
                                    <button type="button" class="btn color_comparit rounded-0 col-8 compartir_boton" name=""><a class="color_blanco_url" href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?reg=987-<?php echo $co ?>" target="_blank">Imprimir ficha</a></button>
                                </div>

                                <div class="col-md-3 col-lg-4 col-6 col-sm-1 mr-2 texto_compartir">
                                    <h5 class="compartir">Compartir por :</h5>
                                </div>
                                <div class="col-2 margen_iconos">
                                    <div class="row">
                                        <div class="col-md-5 col-2 col-sm-1 mr-1 icon_foot row"><a href="<?php echo 'https://wa.me/?text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] . '%20http://www..com.co/detalleInmueble.php?codigo%3d' . $co ?>" target="_blank"><i class="fab fa-whatsapp"></i></a></div>
                                        <div class="col-md-5 col-2 col-sm-1 mr-2 icon_foot row"><a href="<?php echo 'https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.maestranza.com.co%2Fdetalle_inmueble.php%3Fco%3D' . $co . '&text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] ?>" target="_blank"><i class="fab fa-twitter "></i></a></div>
                                        <div class="col-md-5 col-2 col-sm-1 mr-1 icon_foot row"><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.maestranza.com.co%2FdetalleInmueble%3Fcodigo%3D<?php echo $co; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="referencia_inmueble" class="col-md-12 mt-4">
                            <h4 class="property-single-detail-title">Descripción</h4>
                            <p style="text-align: justify;"><?php echo $descripcion ?></p>
                        </div>
                        <div class="col-md-12" style="margin-bottom: 12px;">
                            <h4 class="property-single-detail-title">Características</h4>
                            <ul class="pl-4">
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
                            </ul>
                        </div>
                        <?php
                        if (count($r['caracteristicasInternas']) > 0) {
                            echo
                                '<div class="col-md-12" style="margin-bottom: 12px;">
                                    <h4 class="property-single-detail-title"><strong>Características Internas</strong></h4>
                                        <ul>';
                            for ($i = 0; $i < count($r['caracteristicasInternas']); $i++) {
                                $caracteristicas = ltrim($r['caracteristicasInternas'][$i]['Descripcion']);
                                echo '<li>' . $caracteristicas . '</li>';
                            }
                            echo  '</ul>
                                </div>
                            ';
                        }
                        ?>
                        <?php
                        if (count($r['caracteristicasExternas']) > 0) {
                            echo
                                '<div class="col-md-12" style="margin-bottom: 12px;">
                                    <h4 class="property-single-detail-title"><strong>Características Externas</strong></h4>
                                        <ul>';
                            for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
                                $caracteristicas = ltrim($r['caracteristicasExternas'][$i]['Descripcion']);
                                echo '<li>' . $caracteristicas . '</li>';
                            }
                            echo  '</ul>
                                </div>
                            ';
                        }
                        ?>
                        <?php
                        if (count($r['caracteristicasAlrededores']) > 0) {
                            echo
                                '<div class="col-md-12" style="margin-bottom: 12px;">
                                    <h4 class="property-single-detail-title"><strong>Características de los alrededores</strong></h4>
                                        <ul>';
                            for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
                                $caracteristicas = ltrim($r['caracteristicasAlrededores'][$i]['Descripcion']);
                                echo '<li>' . $caracteristicas . '</li>';
                            }
                            echo  '</ul>
                                </div>
                            ';
                        }
                        ?>
                        <div id="referencia_inmueble" class="col-md-12 mt-3  ">
                            <?php if ($r['video'] != "") {
                                echo
                                    ' <h4 class="property-single-detail-title">Video</h4>
                                    <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Video</h5>
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                        <iframe src="' . $r['video'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                ';
                            } ?>

                        </div>
                        <div class="col-md-12 mb-3">
                            <h4 class="property-single-detail-title"><strong>Mapa de Ubicación</strong></h4>
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
                                <img class="cont_img" src="<?php echo $asesor['FotoAsesor']; ?>" width="100%" height="100%" alt="">
                            </div>
                            <div class="col-8">
                                <p>Nombre: <span><?php echo $asesor['ntercero']; ?></span></p>
                                <p>Telefono: <span><a class="color_asesor" href="tel:+57<?php echo $asesor['celular']; ?>"><?php echo $asesor['celular']; ?></a></span></p>
                                <p>Correo: <span><a class="color_asesor" href="mailto:<?php echo $asesor['correo']; ?>"><?php echo $asesor['correo']; ?></a></span></p>
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
                            <div class="col-12 div_condiciones text-break">
                                <div class="custom-control custom-checkbox mb-4">
                                    <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy" required>
                                    <label class="custom-control-label" for="defaultContactFormCopy">&nbsp&nbsp&nbsp&nbsp&nbspConfimo que he leído, entendido y acepto la<a class="color_a_condiciones" href="Política de tratamiento de datos personales.pdf" download="Politica de tratamiento de infromación.pdf"> política de tratamiento de datos personales.</a></label>
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
                                <?php similares($r['IdCiudad'], $r['IdTpInm']); ?>
                                <!-- <div class="item mb-4">
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
                                </div> -->
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
<!-- mapa del inmueble -->
<script src="mapas/leaflet.js" crossorigin=""></script>
<script>
    var map = L.map('map').setView([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>], 14);

    L.tileLayer('https://api.maptiler.com/maps/streets/256/{z}/{x}/{y}.png?key=1rAGHv3KcO1nrS6S9cgI', {
        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>'
    }).addTo(map);

    L.marker([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>]).addTo(map)
        .bindPopup('<img src="<?php echo $r['fotos'][0]['foto'] ?>"])" alt="" width="55px" height="auto"><br>Ubicación')
        .openPopup();
</script>

</html>