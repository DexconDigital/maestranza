<?php require 'variables/variables.php';
$page = 'Contáctanos';
$nombre_inmobiliaria = 'Inmobiliaria Maestranza' ?>

<!DOCTYPE html>
<html lang="es">


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="./menu/bootstrap.css">
<link rel="stylesheet" href="./menu/menu.css">
<?php include 'layout/archivosheader.php'; ?>
<title> <?php echo $page . ' | ' . $nombre_inmobiliaria; ?></title>

<header class="webp-creative-header">
    <?php include 'layout/menu.php' ?>
</header>

<body>


    <body>

        <section id="contactanos">

            <?php include 'layout/header2.php' ?>

        </section>

        <section>
            <div class="container">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12  mt-5">
                            <h2 class="main-title_contac letra_titulo_contac position-relative">Datos de Contacto</h2>
                            <ul class="lista_contacto pl-0">
                                <li>
                                    <p class="info_color" style="font-family: inherit;"><i class="fas fa-map-marker-alt mr-2"></i><?php echo $datos_contacto['direccion']['direccion'] ?>&nbsp&nbsp</p>
                                </li>
                                <li>
                                    <a class="info_color" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><i class="fas fa-phone mr-2"></i><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?>&nbsp&nbsp</a>
                                </li>
                                <li>
                                    <a class="info_color" href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><i class="fas fa-mobile-alt mr-2"></i><?php echo $datos_contacto['celular']['imprimir'] ?></a>
                                </li>
                                <li>
                                    <a class="info_color" target="_blank" <?php echo $datos_contacto['whatsapp']['link'] ?>><i class="fab fa-whatsapp mr-2"></i><?php echo $datos_contacto['whatsapp']['imprimir'] ?></a>
                                </li>
                                <li>
                                    <a class="info_color" href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>"><i class="far fa-envelope mr-2"></i><?php echo $datos_contacto['correo']['correo'] ?></a>
                                </li>
                                <li>
                                    <p class="info_color" style="font-family: inherit;"><i class="fas fa-calendar-alt mr-2"></i><?php echo $datos_contacto['horario']['horario'] ?></p>
                                </li>

                            </ul>

                        </div>
                        <div class="col-lg-6 col-md-12 col-12 cont_formulario">
                            <h2 class="main-title_contac letra_titulo_contac position-relative"> Formulario de Contacto</h2>
                            <div class="mt-5">
                                <form action="" method="Post">
                                    <div class="col-md-12 row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre y Apellido" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="telefono" class="form-control" placeholder="Teléfono fijo ó celular" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" placeholder="Correo" required>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group text_Area">
                                            <textarea cols="10" rows="7" name="message" class="textarea form-control tamaño_tex_area" placeholder="Mensaje"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox mb-4">
                                            <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy" required>
                                            <label class="custom-control-label" for="defaultContactFormCopy">Confimo que he leído, entendido y acepto la<a class="color_a_contacto" href="Politica_de_tratamiento_de_datos_personales.pdf" download="Política de tratamiento de infromación.pdf"> política de tratamiento de datos personales.</a></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn rounded-0 col-6 waves-effect waves-light color_boton_contacto p-2" name=""><span style="color:white">Enviar</span></button>
                                        </div>
                                        <!-- comunicaciones@maestranza.com.co -->
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- 
        <section id="mapa_contacto">
            <div class="col-12 contenedor_mapa mt-3">
                <iframe class="tamaño_mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.482739032481!2d-75.57444938573427!3d6.1998657285622025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e468287192c26c9%3A0xaa897f73e144ce40!2sMaestranza%20Gesti%C3%B3n%20Inmobilaria!5e0!3m2!1ses!2sco!4v1573754140859!5m2!1ses!2sco" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </section> -->


        <section id="footer" class="fondo">
            <div class="overlay">
            </div>
            <?php include 'layout/footer.php' ?>
        </section>

    </body>

    <script>
        var pagina = 'contacto'
    </script>
    <!-- jQuery -->
    <script src="./menu/jquery.min.js.download"></script>

    <!-- Bootstrap -->
    <script src="./menu/bootstrap.js.download"></script>
    <!-- from slider -->
    <script src="./menu/menu.js.download"></script>

    <?php include('layout/archivosfooter.php'); ?>

</html>