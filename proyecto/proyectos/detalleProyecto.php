<?php

$titleDocument = "Detalle Proyecto";
$inmo          = $_GET['inmo'];
$codinm        = $_GET['codinm'];
$onlyScript    = 1;
$fec           = date('YmdHis');

?>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/detalleProyecto.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">

<input type="hidden" id="latitud" value="0">
<input type="hidden" id="longitud" value="0">
<div class="">
  <div class="col-md-4 col-md-offset-2">
    <a class="btn btn-block btn-success" href="proyectosNvo.php">Ver más proyectos</a>
  </div>

  <div class="col-md-4">
    <button class="btn btn-block btn-info btn-moreInfo">Solicitar Información</button>
  </div>
</div>
<div>&nbsp;</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="nomproyectoLog" id="nomproyectoLog">
          
        </div>
        <div class="item active galleryFotos">
            <div class="primaryFoto">
              <!-- <a class="imagen fancybox" rel="group2" href="http://amarilo.com/sites/default/files/sliders/planogeneral_9.jpg" style="background-image: url(http://amarilo.com/sites/default/files/sliders/planogeneral_9.jpg)">
              </a> -->
            </div>
            <div class="secondFotos">
              <!-- <a class="imagen fancybox" rel="group2" href="http://amarilo.com/sites/default/files/sliders/planogeneral_9.jpg" style="background-image: url(http://amarilo.com/sites/default/files/sliders/planogeneral_9.jpg);display: none">
              </a>
              <a class="imagen fancybox" rel="group2" href="http://amarilo.com/sites/default/files/sliders/planogeneral_9.jpg" style="background-image: url(http://amarilo.com/sites/default/files/sliders/planogeneral_9.jpg);display: none">
              </a>
              <a class="imagen fancybox" rel="group2" href="http://amarilo.com/sites/default/files/sliders/planogeneral_9.jpg" style="background-image: url(http://amarilo.com/sites/default/files/sliders/planogeneral_9.jpg);display: none">
              </a> -->
            </div>
            <div class="hoverMore">
                <div class="table">
                    <div class="tableCell">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Item -->
        <div class="item">
            <div id="mapaFilter">

            </div>
        </div>
        <div class="item">
          <iframe class="iframeVideo" src=""></iframe>
        </div>
        <!-- End Item -->
        <!-- End Item -->
    </div>
    <!-- End Carousel Inner -->
    <ul id="indiCarousel" class="nav nav-pills nav-justified">
        <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#"><i class="fa fa-picture-o"></i> Imagenes</a></li>
        <li data-target="#myCarousel" class="viewMapa" data-slide-to="1"><a href="#"><i class="fa fa-map-o"></i> Ubicación</a></li>
        <li data-target="#myCarousel" class="viewVideo" data-slide-to="2"><a href="#"><i class="fa fa-video-camera" aria-hidden="true"></i> Video</a></li>
    </ul>
</div>
<input type="hidden" id="urlVideo" value="0">
<div class="clearfix">&nbsp;</div>
<div class="caracproyecto">
    <div class="col-md-12" id="caracproyecto">
        <div class="col-sm-12 col-xs-12 col-md-2 col-md-offset-1" style="display: flex;align-items: center;margin-bottom: 5px">
            <div class="iconCarac">
                <i class="fa fa-building"></i>
            </div>
            <div class="textCarac">
                <span class="number countTorres">0</span>
                <p class="text">Torres</p>
            </div>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-2" style="display: flex;align-items: center;margin-bottom: 5px">
            <div class="iconCarac">
                <i class="fa fa-home" aria-hidden="true"></i>
            </div>
            <div class="textCarac">
                <span class="number countUnidades">0</span>
                <p class="text">Unidades</p>
            </div>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-2" style="display: flex;align-items: center;margin-bottom: 5px">
            <div class="iconCarac">
                <i class="fa fa-arrows-h" aria-hidden="true"></i>
            </div>
            <div class="textCarac">
                <p class="text">Área desde: <span class="countArea">0</span>m<sup>2</sup></p>
            </div>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-2" style="display: flex;align-items: center;margin-bottom: 5px">
            <div class="iconCarac">
                <i class="fa fa-car" aria-hidden="true"></i>
            </div>
            <div class="textCarac">
                <span class="number countParking">0</span>
                <p class="text">Parqueaderos</p>
            </div>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-2" style="display: flex;align-items: center;margin-bottom: 5px">
            <div class="iconCarac price">
                <i class="fa fa-usd" aria-hidden="true"></i>
            </div>
            <div class="textCarac">
                <span class="number priceInmu">0</span>
                <p class="text">Precio desde</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 cd-section" id="caracespeproyectos">
        <div class="container">
            <div class="titleCaracEspec col-md-11 col-md-offset-1">
                <h3>CARACTERÍSTICAS DEL PROYECTO</h3>
            </div>
            <div class="col-md-11 col-md-offset-1" id="infocaracter">
                <div class="col-md-7">
                    <p class="rtejustify descrLarga">
                    </p>
                </div>
                <div class="col-md-5" id="listAlre">
                    <!-- <ul>
                        <li>Almacén&nbsp;Constructor: 1</li>
                        <li>Supermercados: 2</li>
                        <li>Centros&nbsp;comerciales: 2</li>
                        <li>Avenidas&nbsp;principales: 2</li>
                        <li>Parque: 1</li>
                        <li>Consecionarios: 2</li>
                    </ul> -->
                </div>
            </div>
            <!-- <div class="titleZonasComunes col-md-11 col-md-offset-1">
                <h5>ALREDEDORES</h5>
            </div>
            <div class="col-md-11 col-md-offset-1" id="listAlre">
                <div class="col-md-12 list">
                </div>
            </div> -->
            <div class="titleZonasComunes col-md-11 col-md-offset-1">
                <h5 class="titleZonas">ZONAS COMUNES</h5>
            </div>
            <div class="col-md-11 col-md-offset-1" id="listZonas">
                <div class="col-md-12 list">
                </div>
            </div>
            <div class="titleZonasComunes col-md-11 col-md-offset-1">
                <h5 class="titleOtras">OTRAS</h5>
            </div>
            <div class="col-md-11 col-md-offset-1" id="listOtras">
                <div class="col-md-12 list">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalInfo">
  <div class="modal-dialog">
    <div class="modal-content">
       <div class=" panel-heading">
              <button type="button" class="close"
                 data-dismiss="modal">
                     <span aria-hidden="true">&times;</span>
                     <span class="sr-only">Close</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">
                 Solicitar información
              </h4>
          </div>
      <div class="modal-body">
        <div class="row">
          <form name="formMoreInfo">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nombre</label>
                <input type="text" style="border-color:#CCCCCC;margin:0px;border-bottom: solid 1px #CCCCCC !important" data-parsley-required data-parsley-errors-messages-disabled name="nombres" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Apellidos</label>
                <input type="text" style="border-color:#CCCCCC;margin:0px;border-bottom: solid 1px #CCCCCC !important"  data-parsley-required data-parsley-errors-messages-disabled name="apellidos" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Correo</label>
                <input type="email"  data-parsley-required data-parsley-errors-messages-disabled data-parsley-type="email" name="correo" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Numero de contacto</label>
                <input type="number"  data-parsley-required data-parsley-errors-messages-disabled data-parsley-minlength="7" data-parsley-maxlength="10" name="telefono" class="form-control">
              </div>
            </div>
            <input type="hidden" name="codinm" id="codinmContact">
            <input type="hidden" name="cotizacion" value="1">
            <div class="col-md-12">
              <button class="btn btn-block btn-success btn-enviarMore" type="submit">Enviar</button>
            </div>
          </form>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="alert alert-msn contact-alert" style="display: none"></div>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-success">Enviar</button> -->
      </div>
    </div>
  </div>
</div>
 <script type="text/javascript">
  var map = "";
  var codInmu = "<?php echo $codinm; ?>";
  var inmo = "<?php echo $inmo; ?>";
 </script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="js/slider-responsive/jquery.bxslider.js"></script>
  <script type="text/javascript" src="js/tabs/responsive-tabs.js"></script>
  <script type="text/javascript" src="js/funciones/funcionesGenerales.js"></script>
<script type="text/javascript" src="js/parsley/parsley.js"></script>
<script type="text/javascript" src="js/proyectos.js?range=' . $fec . '"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

?>