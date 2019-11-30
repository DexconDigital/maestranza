<?php
    require_once('controllers/conexion.php');
    $codigo = 0;
    $codigo = $_GET['co'];

    $link = Conect();

    $sql = "SELECT * FROM asesores WHERE id = $codigo";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    while ($field = mysqli_fetch_array($result)) {
        $id = $field['id'];
        $nombre = $field['nombre'];
        $celular = $field['telefono'];
        $correo = $field['correo'];
        $imagen = $field['imagen'];
        $cargo = $field['cargo'];
        $descripcion = $field['descripcion'];
        
    }
    $comparador='Maestranza-Admin/admin/';
    $ruta_imagen='Maestranza-Admin/admin/'.$imagen;
    

?>