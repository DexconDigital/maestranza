<?php require 'variables/variables.php';
$page = 'Quíenes Somos';
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

<body>

    <section id="contact">
        <?php include 'layout/header2.php'  ?>
    </section>

    <section id="texto_contacto" class="text-center">
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

    F<section id="banner_contador">
        <div class="cont" id="contador">
            <div class="col-12">
                <div class="row text-center">
                    <div class="col-3 color_conted">
                        <h1 id="counter-propertys"></h1>
                        <h5>Total Inmuebles</h5>
                    </div>
                    <div class="col-3 color_conted">
                        <h1 id="counter-rent"></h1>
                        <h5> Inmuebles en Arriendo</h5>
                    </div>
                    <div class="col-3 color_conted">
                        <h1 id="counter-sale"></h1>
                        <h5>Inmuebles en Venta</h5>
                    </div>
                    <div class="col-3 color_conted">
                        <h1 id="counter-sale-rent">0</h1>
                        <h5>Inmuebles en Arriendo/Venta</h5>
                    </div>
                </div>
            </div>
        </div> -->

    </section>

    <section id="slider_mision_vision" class="mt-5">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner ">
                    <div class="carousel-item active ">
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
                    <div class="carousel-item ">
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
                                    <div class="col-4">
                                        <h5 class="color_titulo_valores"><?php echo $texto_quienes_somos['valores']['parrafos'][0]['titulo'] ?></h5>
                                        <p class="text-justify"><?php echo $texto_quienes_somos['valores']['parrafos'][0]['parrafo'] ?></p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="color_titulo_valores"><?php echo $texto_quienes_somos['valores']['parrafos'][1]['titulo'] ?></h5>
                                        <p class="text-justify"><?php echo $texto_quienes_somos['valores']['parrafos'][1]['parrafo'] ?></p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="color_titulo_valores"><?php echo $texto_quienes_somos['valores']['parrafos'][2]['titulo'] ?></h5>
                                        <p class="text-justify"><?php echo $texto_quienes_somos['valores']['parrafos'][2]['parrafo'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/fondo_blanco.JPG" class="d-block w-100" alt="...">
                        <div id="cont_top_valores2" class="carousel-caption d-none d-md-block">
                            <h2 id="valores" class="color_titulo"><?php echo $texto_quienes_somos['valores']['titulo'] ?></h2>
                            <div class="col-12">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <h5 class="color_titulo_valores"><?php echo $texto_quienes_somos['valores']['parrafos'][3]['titulo'] ?></h5>
                                        <p class="text-justify"><?php echo $texto_quienes_somos['valores']['parrafos'][0]['parrafo'] ?></p>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="color_titulo_valores"><?php echo $texto_quienes_somos['valores']['parrafos'][4]['titulo'] ?></h5>
                                        <p class="text-justify"><?php echo $texto_quienes_somos['valores']['parrafos'][0]['parrafo'] ?></p>
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


    <section id="footer" class="fondo">
        <?php include 'layout/footer.php' ?>
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