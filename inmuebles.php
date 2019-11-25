<?php require 'variables/variables.php';
require 'controllers/inmueblesController.php';
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
                    <a href="index.php" class="navbar-brand"> <img class="logo" src="images/isotipo-4.png" width="100" height="100" alt=""> </a>
                </div>
                <form class="form-inline">
                    <a class="color_a_nav" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><i class="fas fa-phone mr-2"></i><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?>&nbsp&nbsp</a>
                    <a class="color_a_nav" href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><i class="fas fa-mobile-alt mr-2"></i><?php echo $datos_contacto['celular']['imprimir'] ?></a>
                    <button class="btn  my-2 my-sm-0 boton_dorado rounded-0 boton " onclick=" location.href='contactanos.php' " type="button">Contáctanos</button>
                </form>
            </nav>
            <div class="col-12 text-center titulo">
                <h2 class="tit">Propiedades</h2>
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

                <!-- propiedades -->
                <?php
                if (is_array($api)) {
                    listar_inmuebles($api['Inmuebles']);
                } else {
                    echo '<div class="col-12">
                        <h2 class="text-center" >No se encontraron inmuebles</h2>
                    </div>';
                }
                ?>
    
            </div>
        </div>
        <div class="col-12 text-center">
            <?php if (is_array($api)) : ?>
                <ul class="pagination mt-4 align-items-end justify-content-center">
                    <?php if ($paginator->getPrevUrl()) : ?>
                        <li class="page-item"><a href="<?php echo $paginator->getPrevUrl(); ?>" class="page-link">&laquo; Atras</a></li>
                    <?php endif; ?>
                    <?php foreach ($paginator->getPages() as $page) : ?>
                        <?php if ($page['url']) : ?>
                            <li <?php echo $page['isCurrent'] ? 'class="page-item active"' : ''; ?>>
                                <a href="<?php echo $page['url']; ?>" class="page-link"><?php echo $page['num']; ?></a>
                            </li>
                        <?php else : ?>
                            <li class="page-item disabled"><span><?php echo $page['num']; ?></span></li>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <?php if ($paginator->getNextUrl()) : ?>
                        <li class="page-item"><a href="<?php echo $paginator->getNextUrl(); ?>" class="page-link">Siguiente &raquo;</a></li>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>
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

<!-- from slider -->
<script src="./menu/menu.js.download"></script>


<?php include('layout/archivosfooter.php'); ?>

</html>