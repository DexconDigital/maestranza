<?php
    require_once('controllers/conexion.php');
    $codigo = 0;
    $codigo = $_GET['co'];

    $link = Conect();

    $sql = "SELECT * FROM noticias WHERE id = $codigo";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    while ($field = mysqli_fetch_array($result)) {
        $nombre = $field['nombre'];
        $id = $field['id'];
        $descripcion = $field['descripcion'];
        $imagen = $field['imagen'];
        $archivo = $field['archivo'];
        $noticia = $field['noticia'];
        $url = $field['video_url'];
        $insta_url = $field['instagram_url'];
        $fecha_complete = $field['fecha'];
    }
    $comparador='./Maestranza-Admin/admin/';
    $ruta_imagen='./Maestranza-Admin/admin/'.$imagen;
    $ruta_archivo= $comparador.$archivo;

?>  