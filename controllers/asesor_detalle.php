<?php

require_once("conexion.php");

$link = Conect();
$array = array();

$sql1 = "SELECT * FROM asesores  where id_inmobiliaria = 12 order by id desc";
$result1 = mysqli_query($link, $sql1) or die(mysqli_error($link));
while ($field = mysqli_fetch_array($result1)) {
    $nombre = $field['nombre'];
    $id = $field['id'];
    $telefono = $field['telefono'];
    $correo = $field['correo'];
    $imagen = $field['imagen'];
    $fecha = $field['fecha'];
    $cargo = $field['cargo'];

    $asesor_array[] = array(
        'nombre' => $nombre,
        'id' => $id,
        'telefono' => $telefono,
        'correo' => $correo,
        'imagen' => $imagen,
        'fecha' => $fecha,
        'cargo' => $cargo,
    );
}


function modelo_asesor($r)
{
     for ($i = 0; $i < count($r); $i++) {
        $ruta_imagen = "./Maestranza-Admin/admin/" . $r[$i]['imagen'];
        echo '
     <div class="item col-lg-3">
            <div class="efecto">
        <a href="detalle_asesor.php?co=' . $r[$i]['id'] . '">
          <img class="imagen" src="' . $ruta_imagen . '" alt="">
        </a>
          </div>
          <div class="card-body">
            <h5 class="card-title text-center color_titulo_Card">' . $r[$i]['nombre'] . '</h5>
            <p class="text-center color_parrafo">' . $r[$i]['cargo'] . '</p>
          </div>    
    </div>
    ';
    }
}
