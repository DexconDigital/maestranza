<?php
require_once 'conexion.php';

$url_proyect=$_REQUEST["url_proyect"];
$nombre_proyect=$_REQUEST["nombre_proyect"];
$foto=$_FILES["img_proyect"]["name"];
$ruta=$_FILES["img_proyect"]["tmp_name"];
$nombre_foto = str_replace(" ","",$foto);
$destino="fotos/".$nombre_foto;
$id_inmo = 12;

$con = Conect();
copy($ruta,$destino);

mysqli_query($con, "INSERT INTO `image_proyect` (`id`, `url_proyect`,`img_proyect`,`nombre_proyect`,`id_inmobiliaria`) VALUES (NULL, '$url_proyect','$destino','$nombre_proyect','$id_inmo')");
header("Location: lista-proyect.php");


?>