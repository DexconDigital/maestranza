<?php require 'variables/variables.php';
$page = 'Detalle Asesor';
$nombre_inmobiliaria = 'Inmobiliaria Maestranza' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/archivosheader.php'; ?>
    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria; ?></title>

</head>

<body>

    <section id="detalle_asesor">
        <div class="container">
            <div class="col-12">
                <div class="row">
                    <div class="col-8 alineacion_izq">
                        <h4 class="style_titulo">Daniel Solano</h4>
                        <ul class="">
                            <li>
                                <font class="">
                                    <font class="info_espacio">Administrador: </font>
                                </font>
                                <span>
                                    <font>
                                        <font class="">Cargo</font>
                                    </font>
                                </span>
                            </li>
                            <li>
                                <font class="">
                                    <font class="info_espacio">+ 1-559-393-0227: </font>
                                </font>
                                <span>
                                    <font>
                                        <font class="">Celular</font>
                                    </font>
                                </span>
                            </li>
                            <li>
                                <font class="">
                                    <font class="info_espacio">ejemplo@dominio.com:</font>
                                </font>
                                <span>
                                    <font>
                                        <font class="">Correo</font>
                                    </font>
                                </span>
                            </li>
                        </ul>
                        <p><strong>Descripción:</strong> Lorem Ipsum es simplemente un texto ficticio de la industria de impresión y composición tipográfica. Lorem Ipsum ha sido el texto ficticio estándar de la industria desde el año 1500, cuando una impresora desconocida tomó una galera de tipo y la revolvió para hacer un libro de muestras. Ha sobrevivido no solo cinco siglos, sino también el salto a la composición electrónica, permaneciendo esencialmente sin cambios.</p>
                        <button type="button" class="btn color_btn rounded-0 border border-info" data-toggle="modal" data-target="#exampleModalLong">
                            Enviar Mensaje
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Escribe tu información</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombres y Apellidos" require>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Teléfono">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo electronico">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Escribe tu mensaje" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger rounded-0" data-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary rounded-0">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 21rem;">
                            <img src="images/no_image.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="rounded-0 linea_decoracion"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer" class="fondo">
        <?php include 'layout/footer.php' ?>
    </section>
</body>

<script>
    var pagina = 'inicio'
</script>

<?php include('layout/archivosfooter.php'); ?>

</html>