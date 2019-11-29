<?php require 'variables/variables.php';
$page = 'samyl';
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

    <section id="symil">

        <?php include 'layout/header_Servicios.php' ?>

    </section>
    <section id="symil2">
        <div class="col-12 text-center mt-4">
            <h2 class="color_servicio"><?php echo $texto_servicios['samyl']['titulo'] ?></h2>
        </div>
    </section>
    <section>
        <div class="container" style="    margin-bottom: 10%;">

            <div class="col-12 text-center mt-3 d-flex justify-content-betwee">


                <div class="col-6">
                    <div class="row">
                        <div class="col-2 dimencion_imagen">
                            <img class="icono cuadro_button" src="images/limpieza-y-desinfección_azul.png" alt="">
                            <span class="cuadro_dorado"></span>
                        </div>
                        <div class="col-10 " >
                            <h5 class="estilo_titulo">Limpieza y desinfección:</h5>
                            <p class="text-justify"><?php echo $texto_servicios['samyl']['parrafos']['limpieza'][0] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 ml-5">
                    <div class="row">
                        <div class="col-2 dimencion_imagen_facility">
                            <img class="icono cuadro_button" src="images/facility-service_azul.png" alt="">
                            <span class="cuadro_dorado"></span>
                        </div>
                        <div class="col-10 ">
                            <h5 class="estilo_titulo">Facility Services:</h5>
                            <p class="text-justify"><?php echo $texto_servicios['samyl']['parrafos']['facility'][0] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center mt-5 d-flex justify-content-betwee">
                <div class="col-6">
                    <div class="row">
                        <div class="col-2 dimencion_imagen_mantenimiento"   >
                            <img class="icono cuadro_button" src="images/Mantenimiento_azul.png" alt="">
                            <span class="cuadro_dorado"></span>
                        </div>
                        <div class="col-10 ">
                            <h5 class="estilo_titulo" >Mantenimiento:</h5>
                            <p class="text-justify"><?php echo $texto_servicios['samyl']['parrafos']['mantenimiento'][0] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 ml-5">
                    <div class="row">
                        <div class="col-2 dimencion_imagen">
                            <img class="icono cuadro_button_exteriores" src="images/Exteriores_azul.png" alt="">
                            <span  class="cuadro_dorado"></span>
                        </div>
                        <div class="col-10 ">
                            <h5 class="estilo_titulo" >Exteriores:</h5>
                            <p class="text-justify"><?php echo $texto_servicios['samyl']['parrafos']['exteriores'][0] ?></p>
                        </div>
                    </div>
                </div>

                <!--  <div class="col-3">
                  <img class="icono posicion_servi" src="images/" alt="">
                  <p class="text-justify parrafo_Servi"><?php echo $texto_servicios['samyl']['parrafos']['limpieza'][0] ?></p>
              </div>
              <div class="col-3">
                  <img class="icono" src="images/" alt="">
                  <p class="text-justify parrafo"><?php echo $texto_servicios['samyl']['parrafos']['mantenimiento'][0] ?></p>
              </div>
              <div class="col-3">
                  <img class="icono" src="images/" alt="">
                  <p class="text-justify parrafo"><?php echo $texto_servicios['samyl']['parrafos']['facility'][0] ?></p>
              </div>
              <div class="col-3">
                  <img class="icono" src="images/Exteriores_dorado.png" alt="">
                  <p class="text-justify parrafo"><?php echo $texto_servicios['samyl']['parrafos']['exteriores'][0] ?></p>
              </div> -->

            </div>
        </div>
        </div>
    </section>

    <section id="footer" class="fondo">
        <?php include 'layout/footer.php' ?>
    </section>

</body>

<script>
    var pagina = 'servicios'
</script>

<!-- jQuery -->
<script src="./menu/jquery.min.js.download"></script>

<!-- Bootstrap -->
<script src="./menu/bootstrap.js.download"></script>

<!-- from slider -->
<script src="./menu/menu.js.download"></script>

<?php include('layout/archivosfooter.php'); ?>

</html>