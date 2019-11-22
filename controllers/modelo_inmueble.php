<?php

// modelo inmueble propiedades destacadas
function modelo_inmueble($r, $cantidad_inmuebles)
{
  for ($i = 0; $i < $cantidad_inmuebles; $i++) {
    $imagen = existeImagen(($r[$i]['foto1']));
    $codigo = str_ireplace("987-", "", $r[$i]['Codigo_Inmueble']);
    $api = $r[$i];

    echo '
            <div class="col-md-12 col-12 col-lg-12 item">
            <div class="card mt-4" style="">
              <div class="property">
                <a href="detalle_inmueble.php?co=' . $codigo . '">
                  <div class="property-image">
                    <img alt="" src="' . $imagen . '"></div>
                  <div class="precio">';
                      if ($api['Gestion'] == 'Arriendo/venta') {
                        echo '$' . $api['Canon'] . ' <br>$' . $api['Venta'];
                      } else if ($api['Gestion'] == 'Arriendo') {
                        echo '$' . $api['Canon'];
                      } else {
                        echo '$' . $api['Venta'];
                      }
                      echo '
                  </div>
                  <div class="overlay">
                    <ul class="additional-info">
                      <li>
                        <header>Areá:</header>
                        <figure>' . $api['AreaConstruida'] . 'm<sup>2</sup></figure>
                      </li>
                      <li>
                        <header>Alcobas:</header>
                        <figure> ' . $api['Alcobas'] . '</figure>
                      </li>
                      <li>
                        <header>Baños:</header>
                        <figure>' . $api['banios'] . '</figure>
                      </li>
                      <li>
                        <header>Garaje:</header>
                        <figure>' . $api['garaje'] . '</figure>
                      </li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class=" row col-12">
                <div class="col-12">
                  <p class="mb-1"><b>' . $api['Tipo_Inmueble'] . ' en ' . $api['Gestion'] . '</b></p>
                </div>
                <div class="col-12">
                  <p class="mb-1"><i class="fas fa-map-marker-alt mr-2"></i>' . $api['Barrio'] . ', ' . $api['Ciudad'] . '</p>
                </div>
                <hr>
                <div class="col-12">
                  <p class="mb-1"> <small>
                      Código:' . $codigo . '
                    </small>
                  </p>
                </div>
              </div>
            </div>

          </div>
            ';
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

function price_validate($r)
{
    $precio = '';
    if ($r['Gestion'] == 'Arriendo') {
        $precio =  '$' . $r['Canon'];
    } else if ($r['Gestion'] == 'Venta') {
        $precio = '$' . $r['Venta'];
    } else {
        $precio = '$' . $r['Canon'] . '/ $' . $r['Venta'];
    }
    return $precio;
}

function console_log($output, $with_script_tags = true)
{
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}