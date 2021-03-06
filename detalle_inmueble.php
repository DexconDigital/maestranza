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
<!-- Datos para compartir por facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'https://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
<meta property="og:title" content="<?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?>" />
<meta property="og:description" content="Inmueble ubicado en: <?php echo $r['barrio'] . ', ' . $r['ciudad'] . ', ' . $r['depto']; ?> " />
<meta property="og:image" itemprop="image" content="<?php echo $r['fotos'][0]['foto']; ?>" />
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="300">
<meta property="og:image:height" content="300">
<!-- fin de datos para compartir por facebook -->

<style>
    #map {
        height: 300px;
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
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <h4><?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?></h4>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-12 p-0 ">
                                    <p class="codigo_style">Código: <span> <?php echo $co; ?></span></p>
                                </div>
                                <div class="col-lg-8 col-md-8 col-12 p-0">
                                    <p class="codigo_style">Precio:
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
                    <div class="col-lg-6 col-md-6 col-12 texto_asesor ocultar_asesor">
                        <h4 class="text-center">Contacto con Asesor </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contacto">
        <div class="container">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
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
                        <div class="col-12 mt-4 text-center">
                            <div class="row">
                                <div class="col-lg-6 col-md-5 col-12">
                                    <button type="button" class="btn color_comparit rounded-0 col-8 compartir_boton" name=""><a class="color_blanco_url" href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?reg=987-<?php echo $co ?>" target="_blank">Imprimir ficha</a></button>
                                </div>

                                <div class="col-md-6 col-lg-6 col-12 text-center texto_compartir">
                                    <div class="row">

                                        <h5 class="compartir">Compartir por :</h5>


                                        <a class="icon_foot mr-3" href="<?php echo 'https://wa.me/?text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] . '%20http://www.maestranza.com.co/detalleInmueble.php?codigo%3d' . $co ?>" target="_blank"><i class="fab fa-whatsapp margen_icon"></i></a>
                                        <a class="icon_foot mr-2" href="<?php echo 'https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.maestranza.com.co%2Fdetalle_inmueble.php%3Fco%3D' . $co . '&text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] ?>" target="_blank"><i class="fab fa-twitter margen_icon"></i></a>
                                        <a class="icon_foot mr-2" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.maestranza.com.co%2Fdetalle_inmueble.php%3Fco%3D987-<?php echo $co; ?>" target="_blank"><i class="fab fa-facebook-f margen_icon"></i></a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div id="referencia_inmueble" class="col-md-12 mt-4">
                            <h4 class="property-single-detail-title">Descripción</h4>

                        </div>
                        <div class="col-md-12" style="margin-bottom: 12px;">
                            <h4 class="property-single-detail-title">Características</h4>
                            <ul class="">
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
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="row caja">
                            <div class="container">
                                <div class="row">
                                    <div id="texto_asesor2" class="col-12 mt-4 mb-4">
                                        <h4 class="text-center">Contacto con Asesor </h4>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 text-center">
                                        <img class="cont_img col-6 col-md-12 col-lg-12" src="<?php echo $asesor['FotoAsesor']; ?>" width="100%" height="100%" alt="">
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-12 mt-4">
                                        <p><i class="fas fa-user"></i></i> <span><?php echo $asesor['ntercero']; ?></span></p>
                                        <p><i class="fas fa-mobile-alt"></i></i> <span><a class="color_asesor" href="tel:+57<?php echo $asesor['celular']; ?>"><?php echo $asesor['celular']; ?></a></span></p>
                                        <p><i class="fas fa-envelope"></i></i> <span><a class="color_asesor" href="mailto:<?php echo $asesor['correo']; ?>"><?php echo $asesor['correo']; ?></a></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container p-0 mt-5">
                            <form action="email/Correodetalleinmueble.php" method="POST">
                                <div class="col-12 p-0">
                                    <div class="col-xl-12 col-md-12 col-12  margen_busca p-0">
                                        <input type="text" class="form-control rounded-0" id="" name="nombre" placeholder="Nombre y Apellido">
                                    </div>
                                </div>
                                <div class="col-12 p-0">
                                    <div class="col-xl-12 col-md-12 col-12  margen_busca p-0">
                                        <input type="text" class="form-control rounded-0" id="" name="correo" placeholder="Correo Electrónico">
                                    </div>
                                </div>
                                <div class="col-12 p-0">
                                    <div class="col-xl-12 col-md-12 col-12  margen_busca p-0">
                                        <input type="text" class="form-control rounded-0" id="" name="telefono" placeholder="Teléfono">
                                    </div>
                                </div>
                                <div class="col-12 caja_texto p-0 mt-3">
                                    <div class="form-group">
                                        <textarea cols="15" rows="5" name="mensaje" class="textarea form-control tamaño_tex_area rounded-0" placeholder="Mensaje"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 div_condiciones text-break">
                                    <div class="custom-control custom-checkbox pl-3">
                                        <input type="checkbox" class="custom-control-input" id="inmuebles" required>
                                        <label class="custom-control-label" for="inmuebles">&nbsp&nbsp&nbsp&nbsp&nbspConfimo que he leído, entendido y acepto la<a class="color_a_condiciones" href="Politica_de_tratamiento_de_datos_personales.pdf" download="Politica de tratamiento de infromación.pdf"> política de tratamiento de datos personales.</a></label>
                                    </div>
                                </div>
                                <select name="correo_asesor" class="invisible display:none">
                                    <!-- <option value="wdsp9898@gmail.com">wdsp9898@gmail.com</option> -->
                                </select>
                                <select name="nom_asesor" class="invisible display:none">
                                    <option value=" <?php echo $asesor['ntercero']; ?>"> <?php echo $asesor['ntercero']; ?></option>
                                </select>
                                <select name="codigo" class="invisible display:none">
                                    <option value=" <?php echo $co?>"> <?php echo $co ?></option>
                                </select>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn color_comparit rounded-0 col-4 compartir_boton" name=""><a class="color_blanco_url" href="">Enviar</a></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 contenedor_simialres">
                            <div class="text-center">
                                <h5 class="propiedades_similares mb-4">
                                    Propiedades Similares
                                </h5>
                            </div>
                            <div class="row">

                                <?php similares($r['IdCiudad'], $r['IdTpInm']); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <section id="footer" class="fondo">
        <div class="overlay">
        </div>
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
<!-- <?php include('layout/archivosfooter.php'); ?> -->
<script src="js/slick.min.js"></script>
<script>
    $('#slide-detalle').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplayTimeout: 4000,
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