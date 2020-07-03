<?php $page = "Agregar Noticia";
require("seguridad.php");
require_once("conexion.php");
include 'layout/layout.php';
?>
<style>
    .color_boton {
        background-color: #002230;
        color: white;

    }

    .color_boton:hover {
        color: white;
    }

    .conct_botton {
        text-align: center;

    }

    .container {
        background-color: white;
    }

    input[type]:focus {
        border-color: #B58D10 !important;
        box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075)inset, 0 0 8px #B58D10 !important;
        outline: 0 none;
    }
</style>
<div class="container-fluid p-0">


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9" style="    margin-top: 27px;">
                <h2 style="margin-bottom: 35px;" class="text-center">Agregar Imagen de Proyecto</h2>
                <form method="POST" action="guardar-imagen.php" enctype="multipart/form-data">

                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Nombre del proyecto</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nombre_proyect" id="nombre_proyect" placeholder="Nombre del Proyecto" required>
                            <small id="tituloHepl" class="form-text text-muted">Nombre de la imagen del proyecto</small>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Url del detalle de Proyecto</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="url_proyect" id="url_proyect" placeholder="Url de redireccionamiento al proyecto" required>
                            <small id="tituloHepl" class="form-text text-muted">Url de redireccionamiento al proyecto</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Imagen del Proyecto</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control-file" name="img_proyect" id="img_proyect" accept="image/*" required>
                            <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB de peso y tamaño de 185 pixeles de Ancho por 225 pixeles de Alto</small>
                        </div>
                    </div>
                    <input type="hidden" id="fecha" name="fecha">
                    <div class="form-group row">
                        <div class="col-8 offset-2 conct_botton">
                            <button class="btn color_boton" value="crear">Guardar Cambios</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="../js/jquery.min.js"></script>
<script src="../js/validacion.js"></script>

<?php include 'layout/layoutFooter.php'; ?>