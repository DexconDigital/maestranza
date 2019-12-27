<?php require 'variables/variables.php';
require 'controllers/noticiasController.php';
$page = 'Infomativo inmobilario';
$nombre_inmobiliaria = 'Inmobiliaria Maestranza';
$inmo          = $_GET['inmo'];
$codinm        = $_GET['codinm'];
$onlyScript    = 1;
$fec           = date('YmdHis'); ?>

<!DOCTYPE html>
<html lang="es">


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="./menu/bootstrap.css">
<link rel="stylesheet" href="./menu/menu.css">
<?php include 'layout/archivosheader.php'; ?>
<link rel="stylesheet" type="text/css" href="css/detalleProyecto.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
<link rel="stylesheet" href="mapas/leaflet.css" crossorigin="" />
<link rel="stylesheet" href="css/carousel.inmuebles.css">
<title> <?php echo $page . ' | ' . $nombre_inmobiliaria; ?></title>

<header class="webp-creative-header">

  <?php include 'layout/menu.php' ?>

</header>

<body>

  <div class="container-fluid body" id="detalle">
    <section id="slide_fotos_deatalle" class="mt-4">
      <div class="container">
        <div class="col-12">
          <div class="justify-content-center">
            <!-- titulo -->
            <div class="col-12 text-center mb-4">
              <div class="nomproyectoLog" id="nomproyectoLog">
                <!-- Imprimir titulo de JS -->
              </div>
            </div>
            <div class="col-12">
              <!-- imprimir imagenes -->
              <div class="col-12 col-md-12 col-lg-12 pr-0 justify-content-center">
                <div id="carouselExampleControls" class="carousel slide w-100 overflow-hidden pl-4 pl-md-0" data-ride="carousel">
                  <div class="carousel-inner fondo_carrousel">
                    <!-- Imprimir las imagenes -->
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>

            </div>

            <div class="col-12 mt-5">
              <div class="row">
                <div class="col-lg-4 col-md-12 col-12 mb-4">
                  <!-- CARACTERÍSTICAS -->
                  <div class="cd-section" id="">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">
                          CARACTERÍSTICAS DEL PROYECTO
                        </h4>
                        <p class="rtejustify descrLarga card-text">
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 mb-4 cd-section">
                  <!-- Zonas COMUNES -->
                  <div class="card ">
                    <div class="card-body">
                      <h4 class="card-title">
                        ZONAS COMUNES
                      </h4>
                      <div class="col-md-11 col-md-offset-1" id="listZonas">
                        <div class="col-md-12 list">
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="col-lg-4 col-md-12 col-12 mb-4 cd-section">
                  <!-- Otras Zonas -->
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">OTRAS</h4>
                      <div class="col-md-11 col-md-offset-1" id="listOtras">
                        <div class="col-md-12 list">
                        </div>
                      </div>

                    </div>
                  </div>

                </div>

                <div class="col-12 mt-4 mb-3">
                  <!-- Mapas -->
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Mapa</h4>
                      <div id="map" class="w-100"></div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <!-- videos -->
                  <div class="card video_url">
                    <div class="card-body">
                      <h4 class="card-title">Video</h4>
                      <iframe class="iframeVideo" width="100%" height="320" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </section>
  </div>

  <div class="caracproyecto text-center">


    <div class=" container col-md-12 col-12 mb-4 text-center">
      <a class="btn btn-block col-lg-4 col-md-4 col-6 boton_dorado" href="proyectos.php">Ver más proyectos</a>
    </div>


    <script type="text/javascript">
      var map = "";
      var codInmu = "<?php echo $codinm; ?>";
      var inmo = "<?php echo $inmo; ?>";
      pagina = false;
    </script>


    <section id="footer" class="fondo">
      <div class="overlay">
      </div>
      <?php include 'layout/footer.php' ?>
    </section>
  </div>
</body>

<script>
  var pagina = 'blog'
</script>
<!-- jQuery -->
<script src="./menu/jquery.min.js.download"></script>

<!-- Bootstrap -->
<script src="./menu/bootstrap.js.download"></script>

<!-- from slider -->
<script src="./menu/menu.js.download"></script>
<script src="mapas/leaflet.js" crossorigin=""></script>
<?php include('layout/archivosfooter.php'); ?>
<script type="text/javascript" src="js/slider-responsive/jquery.bxslider.js"></script>
<script type="text/javascript" src="js/tabs/responsive-tabs.js"></script>
<script type="text/javascript" src="js/funciones/funcionesGenerales.js"></script>
<script type="text/javascript" src="js/parsley/parsley.js"></script>
<script type="text/javascript" src="js/proyectos.js?range=' . $fec . '"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

</html>