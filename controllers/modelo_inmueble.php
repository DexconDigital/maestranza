<?php

// modelo inmueble propiedades destacadas
function modelo_inmueble($r, $cantidad_inmuebles)
{
    for ($i = 0; $i < $cantidad_inmuebles; $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("987-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];

        echo '
           

                      <div class="item" style="height: 180px;">
                      <div class="card">
                          <a href="./detalle_inmueble.php?co=' . $codigo . '">
                              <img src="' . $imagen . '" class="card-img-top" alt="...">
                          </a>
                          <span class="precio_inmueble">';
                          if ($api['Gestion'] == 'Arriendo/venta') {
                              echo '$' . $api['Canon'] . ' <br>$' . $api['Venta'];
                          } else if ($api['Gestion'] == 'Arriendo') {
                              echo '$' . $api['Canon'];
                          } else {
                              echo '$' . $api['Venta'];
                          }
                          echo '
                          </span>
                          <span class="gestion_inmueble">' . $api['Tipo_Inmueble'] . ' en ' . $api['Gestion'] . '</span>
                          <div class="card-body">
                              <div class="col-md-12 row">
                                  <div class="col-md-12">
                                      <p class="mb-1">
                                          <i class="fas fa-map-marker-alt mr-2 dorado">
                                              <b class="color_palabras">' . $api['Barrio'] . ', ' . $api['Ciudad'] . '</b>
                                          </i>
                                      </p>
                                  </div>

                                  <div class="col-md-12">
                                      <p class="mb-1">
                                          <b class="color_palabras">Código: ' . $codigo . '</b>
                                      </p>
                                  </div>
                                  <div class="col-md-12">
                                      <p class="mb-1">
                                          <a href="detalle_inmueble.php?co=' . $codigo . '" class="btn rounded-0 col-9 boton_cards contenedor_bot_card"><span>Ver Más</span></a>
                                      </p>
                                  </div>
                              </div>
                              <hr class="color_linea_divisora_Card">
                              <div class="col-md-12 row ">

                                  <ul class="info_inmueble mt-3">
                                      <li class="container_li">
                                          <i class="fas fa-chart-area icono_inmueble mr-1 dorado"></i>
                                          <b class="color_palabras"> ' . $api['AreaConstruida'] . 'm<sup>2</sup></b>

                                      </li>
                                      <li class="container_li">
                                          <i class="fas fa-bath icono_inmueble mr-1 dorado"></i>
                                          <b class="color_palabras"> ' . $api['banios'] . '</b>

                                      </li>
                                      <li class="container_li">
                                          <i class="fa fa-bed icono_inmueble mr-1 dorado"></i>
                                          <b class="color_palabras"> ' . $api['Alcobas'] . '</b>

                                      </li>
                                      <li class="container_li">
                                          <i class="fa fa-car icono_inmueble mr-1 dorado"></i>
                                          <b class="color_palabras"> ' . $api['garaje'] . '</b>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
            ';
    }
}
//modelo inmueble de la pagina de inmuebles.php
function modelo_inmueble2($r)
{
    for ($i = 0; $i < count($r); $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("987-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];

        $descripcion = $api['descripcionlarga'];
        $limite_de_cadena = 10;
        // recortar cadena
        if (strlen($descripcion) <= $limite_de_cadena) {
            $descripcion = substr($descripcion, 0, $limite_de_cadena) . '...';
        } else {
            $descripcion = $descripcion . '...';
        }
        // fin de recortar cadena
        echo '
    <div class="col-4 margen_cards">
     <div class="item" style="height: 180px;">
        <div class="card">
            <a style="    width: auto;"  href="./detalle_inmueble.php?co=' . $codigo . '">
            
                <img class="imagenes_inmueble" src="' . $imagen . '" class="card-img-top" alt="...">
            
            </a>
            <span class="precio_inmueble">$';
        if ($api['Gestion'] == 'Arriendo') {
            echo $api['Canon'];
        } else if ($api['Gestion'] == 'Venta') {
            echo $api['Venta'];
        } else {
            echo $api['Canon'] . '/ $' . $api['Venta'];
        }
        echo '
            </span>
            <span class="gestion_inmueble">' . $api['Tipo_Inmueble'] . ' en ' . $api['Gestion'] . '</span>
            <div class="card-body">
                <div class="col-md-12 row">
                    <div class="col-md-12">
                        <p class="mb-1">
                            <i class="fas fa-map-marker-alt mr-2 dorado">
                                <b class="color_palabras">' . $api['Barrio'] . ', ' . $api['Ciudad'] . '</b>
                            </i>
                        </p>
                    </div>

                    <div class="col-md-12">
                        <p class="mb-1">
                            <b class="color_palabras">Código: ' . $codigo . '</b>
                        </p>
                    </div>
                    <div class="col-md-12">
                        <p class="mb-1">
                            <a href="./detalle_inmueble.php?co=' . $codigo . '" class="btn rounded-0 col-9 boton_cards contenedor_bot_card"><span>Ver Más</span></a>
                        </p>
                    </div>
                </div>
                <hr class="color_linea_divisora_Card">
                <div class="col-md-12 row ">

                    <ul class="info_inmueble mt-3">
                        <li class="container_li mr-3">
                            <i class="fas fa-chart-area icono_inmueble mr-1 dorado"></i>
                            <b class="color_palabras">' . $api['AreaConstruida'] . 'm<sup>2</b>

                        </li>
                        <li class="container_li mr-3">
                            <i class="fas fa-bath icono_inmueble mr-1 dorado"></i>
                            <b class="color_palabras"> ' . $api['banios'] . '</b>

                        </li>
                        <li class="container_li mr-3">
                            <i class="fa fa-bed icono_inmueble mr-1 dorado"></i>
                            <b class="color_palabras"> ' . $api['Alcobas'] . '</b>

                        </li>
                        <li class="container_li mr-3">
                            <i class="fa fa-car icono_inmueble mr-1 dorado"></i>
                            <b class="color_palabras">' . $api['garaje'] . '</b>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
 </div>
 ';
    }
}

//similares
function modelo_inmueble_similare($r)
{

  for ($i = 0; $i < count($r); $i++) {
    $imagen = existeImagen(($r[$i]['foto1']));
    $codigo = str_ireplace("987-", "", $r[$i]['Codigo_Inmueble']);
    $api = $r[$i];

    echo ' <div class="item mb-4">
    <div class="card" style="">
        <div class="property">
            <a href="./detalle_inmueble.php?co=' . $codigo . '">
                <div class="property-image">
                    <img class="alto_img" alt="" src="'. $imagen . '"></div>
                <div class="overlay">

                </div>
            </a>
        </div>
        <div class=" row col-12 margen_card">
            <div class="col-12">
                <p class="mb-1"><b>' . $api['Tipo_Inmueble'] . ' en ' . $api['Gestion'] . ' </b></p>
            </div>
            <div class="col-12">
                <p class="mb-1"><i class="fas fa-map-marker-alt mr-2"></i>' . $api['Barrio'] . ', ' . $api['Ciudad'] . '</p>
            </div>
            <hr>
            <div class="col-12">
                <p class="mb-1"> <small>
                        Código: ' . $codigo . '
                    </small>
                </p>
            </div>
        </div>
    </div>
 </div> ';
  }
}
// Funciones para los modelos de propiedades
function existeImagen($r)
{
    if ($r == "") {
        $r = "images/no_image.png";
    }
    return $r;
}

?>