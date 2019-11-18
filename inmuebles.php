<?php require 'variables/variables.php';
$page = 'Inmuebles';
$nombre_inmobiliaria = 'Inmobiliaria Maestranza' ?>

<!DOCTYPE html>
<html lang="es">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php include 'layout/archivosheader.php'; ?>
<link rel="stylesheet" href="./menu/bootstrap.css">
<link rel="stylesheet" href="./menu/menu.css">
<title> <?php echo $page . ' | ' . $nombre_inmobiliaria; ?></title>

<header class="webp-creative-header">

    <?php include 'layout/menu.php' ?>

</header>

<body>

    <section id="inmuebles">
        <div class="overlay">
        </div>
        <div class="container col-12">
            <nav class="navbar navbar-light">
                <div class="col-6">
                    <a class="navbar-brand"> <img class="logo" src="images/isotipo-4.png" width="100" height="100" alt=""> </a>
                </div>
                <form class="form-inline">
                    <a class="color_a_nav" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><i class="fas fa-phone mr-2"></i><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?>&nbsp&nbsp</a>
                    <a class="color_a_nav" href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><i class="fas fa-mobile-alt mr-2"></i><?php echo $datos_contacto['celular']['imprimir'] ?></a>
                    <button class="btn  my-2 my-sm-0 boton_dorado rounded-0 boton " onclick=" location.href='contactanos.php' " type="button">Contáctanos</button>
                </form>
            </nav>
            <div class="col-12 text-center titulo">
                <h2>Propiedades</h2>
            </div>
        </div>

    </section>

    <section id="buscador">
        <div class="container">
            <div class=" row col-12 cont_interno">
                <div class="col-xl-3 col-md-4 col-12  margen_busca">
                    <input type="text" class="form-control rounded-0" id="codigo_buscar" placeholder="Código">
                </div>

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
                <div class="col-xl-12 col-md-12 col-12 text-center margen_busca">
                    <button type="button" class="btn rounded-0 col-9 boton_buscar boton_dorado posicion_buscar" id="buscar"><span>Buscar</span></button></div>

            </div>
        </div>
    </section>

    <section id="buscador_inmuebles">
        <div class="col-12 p-5">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-4">
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
                                                <li class="container_li mr-2">
                                                    <i class="fas fa-chart-area icono_inmueble mr-1 dorado"></i>
                                                    <b class="color_palabras">146m<sup>2</sup></b>

                                                </li>
                                                <li class="container_li mr-2">
                                                    <i class="fas fa-bath icono_inmueble mr-1 dorado"></i>
                                                    <b class="color_palabras"> 4</b>

                                                </li>
                                                <li class="container_li mr-2">
                                                    <i class="fa fa-bed icono_inmueble mr-1 dorado"></i>
                                                    <b class="color_palabras">3</b>

                                                </li>
                                                <li class="container_li mr-2">
                                                    <i class="fa fa-car icono_inmueble mr-1 dorado"></i>
                                                    <b class="color_palabras">3</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
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
                                                <li class="container_li mr-2">
                                                    <i class="fas fa-chart-area icono_inmueble mr-1 dorado"></i>
                                                    <b class="color_palabras">146m<sup>2</sup></b>

                                                </li>
                                                <li class="container_li mr-2">
                                                    <i class="fas fa-bath icono_inmueble mr-1 dorado"></i>
                                                    <b class="color_palabras"> 4</b>

                                                </li>
                                                <li class="container_li mr-2">
                                                    <i class="fa fa-bed icono_inmueble mr-1 dorado"></i>
                                                    <b class="color_palabras">3</b>

                                                </li>
                                                <li class="container_li mr-2">
                                                    <i class="fa fa-car icono_inmueble mr-1 dorado"></i>
                                                    <b class="color_palabras">3</b>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
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
                                                <li class="container_li mr-2">
                                                    <i class="fas fa-chart-area icono_inmueble mr-1 dorado"></i>
                                                    <b class="color_palabras">146m<sup>2</sup></b>

                                                </li>
                                                <li class="container_li mr-2">
                                                    <i class="fas fa-bath icono_inmueble mr-1 dorado"></i>
                                                    <b class="color_palabras"> 4</b>

                                                </li>
                                                <li class="container_li mr-2">
                                                    <i class="fa fa-bed icono_inmueble mr-1 dorado"></i>
                                                    <b class="color_palabras">3</b>

                                                </li>
                                                <li class="container_li mr-2">
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

    <section id="footer" class="fondo">
        <?php include 'layout/footer.php' ?>
    </section>

</body>

<script>
    var pagina = 'inmuebles'
</script>
<!-- jQuery -->
<script src="./menu/jquery.min.js.download"></script>

<!-- Bootstrap -->
<script src="./menu/bootstrap.js.download"></script>
<!-- from slider -->
<script src="./menu/menu.js.download"></script>


<?php include('layout/archivosfooter.php'); ?>

</html>