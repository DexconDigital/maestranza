<?php $page = "Lista de Noticias";
require("seguridad.php");
require_once("conexion.php");
include 'layout/layout.php';
$id = $_GET["id"];
$con = Conect();
$qry = "SELECT * FROM image_proyect where id ='$id' and id_inmobiliaria = 12";
$sql = mysqli_query($con, $qry);
$res =  mysqli_fetch_array($sql);
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
        border-color: #B58D10
         !important;
        box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075)inset, 0 0 8px #B58D10
         !important;
        outline: 0 none;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9" style=" margin-top: 27px;">
            <h2 class="text-center">Editar Proyecto</h2>
            <form method="post" action="uptade-proyect.php" enctype="multipart/form-data">

                <input type="hidden" name="id" id="id" value="<?php echo $res[0]; ?>">
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Nombre del proyecto</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nombre_proyect" id="nombre_proyect" value="<?php echo $res[3]; ?>">
                        <small id="tituloHepl" class="form-text text-muted">Nombre Actual del proyecto</small>
                    </div>
                </div>
                <div class="form-group row mb-4 ">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Url del detalle de Proyecto</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="url_proyect" id="url_proyect" value="<?php echo $res[1]; ?>">
                        <small id="tituloHepl" class="form-text text-muted">Nombre de la url del detalle del proyecto</small>
                    </div>
                </div>
               
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Imagen del Proyecto</label>
                    <div class="col-sm-10">
                        <img src="<?php echo $res[2]; ?>" alt="" width="200px" height="auto">
                    </div>
                    <div class="col-sm-10 offset-2">
                        <input type="file" class="form-control-file" name="img_proyect" id="img_proyect" accept="image/*">
                        <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB de peso y tamaño de 185 pixeles de Ancho por 255 pixeles de Alto</small> 
                    </div>
                </div>
               
                <div class="form-group row">
                    <div class="col-8 offset-2 conct_botton">
                        <button class="btn color_boton">Actualizar Proyecto</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="../js/jquery.min.js"></script>
<script src="../js/validacion.js"></script>
<?php include 'layout/layoutFooter.php'; ?>