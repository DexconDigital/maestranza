<?php 

require_once("conexion.php");

$link = Conect();
$array = array();

$sql = "SELECT * FROM image_proyect  where id_inmobiliaria = 12 order by id desc";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
while ($field = mysqli_fetch_array($result)) {

    $id = $field['id'];
    $img_proyect= $field['img_proyect'];
    $url_proyect= $field['url_proyect'];
    $nombre_proyect= $field['nombre_proyect'];
    $proyect_array[] = array(
        'id' => $id,
        'imagen' => 'Maestranza-Admin/admin/' .$img_proyect,
        'url' => $url_proyect,
        'nombre' => $nombre_proyect,

    );
}

    function imagenes_proyect ($r) {
        
        if (count($r) > 2) {
            $cantidad_noticias = 3;
        } else {
            $cantidad_noticias = count($r);
        }
        for ($i = 0; $i < $cantidad_noticias; $i++) {

            echo '
             <div class="col-lg-4 col-md-4 col-12">
                <a href="' . $r[$i]['url'] . '">
                    <img src="' . $r[$i]['imagen'] . '" style="width: 100%;object-fit: contain;height: 100%;" alt="">
                </a>
            </div>
            ';
        }
    }

