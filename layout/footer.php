<i class="fas fa-angle-double-up subir"></i>
<footer>
    <div class="">
        <div class=" container col-11 espacio_footer">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12  text-center">
                    <a href="index.php">
                        <img class="logo_footer" src="images/isotipo-4.png" alt="">
                    </a>
                    <ul class="margen_iconos pl-0">
                        <a href="<?php echo $redes_sociales['facebook']['link'] ?>" target="_blank">
                            <i class="<?php echo $redes_sociales['facebook']['icono'] ?> style_icono"></i>
                        </a>
                        <a href="<?php echo $redes_sociales['instagram']['link'] ?>" target="_blank">
                            <i class="<?php echo $redes_sociales['instagram']['icono'] ?> style_icono"></i>
                        </a>
                        <a href="<?php echo $redes_sociales['twitter']['link'] ?>" target="_blank">
                            <i class="<?php echo $redes_sociales['twitter']['icono'] ?> style_icono"></i>
                        </a>
                        <a href="<?php echo $redes_sociales['linkedin']['link'] ?>" target="_blank">
                            <i class="<?php echo $redes_sociales['linkedin']['icono'] ?> style_icono"></i>
                        </a>
                        <a href="<?php echo $redes_sociales['youtube']['link'] ?>" target="_blank">
                            <i class="<?php echo $redes_sociales['youtube']['icono'] ?> style_icono"></i>
                        </a>
                    </ul>
                </div>
                <div class="col-lg-5 col-md-12 col-12 text-center  top_mapa">
                    <iframe class="tamaño_mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.482739032481!2d-75.57444938573427!3d6.1998657285622025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e468287192c26c9%3A0xaa897f73e144ce40!2sMaestranza%20Gesti%C3%B3n%20Inmobilaria!5e0!3m2!1ses!2sco!4v1573754140859!5m2!1ses!2sco" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    <div class="container pl-0">
                        <a target="blanck" href="https://www.google.com/maps/place/Maestranza+Gesti%C3%B3n+Inmobilaria/@6.1998657,-75.5744494,17z/data=!3m1!4b1!4m5!3m4!1s0x8e468287192c26c9:0xaa897f73e144ce40!8m2!3d6.1998604!4d-75.5722607" class="btn col-12 rounded-0 boton_como_llegar">Como llegar</a>
                    </div>
                </div>

                <div class="col-lg-3  col-md-6 col-12 margen_telefono">
                    <div class="col-12 text-center div_info">
                        <h4 class="color_info">Información</h4>
                    </div>
                    <ul class="cont_contact">
                        <li class="estylo_teelfonos">
                            <a href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>">
                                <i class=" <?php echo $datos_contacto['telefono_fijo']['icono'] ?>"></i>
                                <?php echo $datos_contacto['telefono_fijo']['imprimir'] ?>
                            </a>
                       
                        </li>
                        <li class="estylo_teelfonos">
                            <a href="tel:<?php echo $datos_contacto['celular']['link'] ?>">
                                <i class="mr-2 <?php echo $datos_contacto['celular']['icono'] ?>"></i>
                                <?php echo $datos_contacto['celular']['imprimir'] ?>
                            </a>
                        </li>
                        <!-- <li class="estylo_teelfonos">
                            <a href=" <?php echo $datos_contacto['whatsapp']['link'] ?>" target="blanck">
                                <i class="mr-2 <?php echo $datos_contacto['whatsapp']['icono'] ?>"></i>
                                <?php echo $datos_contacto['whatsapp']['imprimir'] ?>
                            </a>
                        </li> -->
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-bottom-area row col-12 mt-4 contenedor_footer">
        <div class="container col-lg-9 col-md-7 col-10 texto_footer">
            <p class="copy_style"> Diseñado y Desarrollado por <a class="color_a_foot_imper" target="blanck" href="https://www.dexcondigital.com">Dexcon Digital </a>©Copyright 2020 para Inmobiliaria Maestranza. Todos los derechos reservados.</p>
        </div>
        <div class="container col-lg-3 col-md-3  col-11 p-0 tex-politica">
            <p class=""><a class="color_a_foot_imper" href="Politica_de_tratamiento_de_datos_personales.pdf" download="Politica de tratamiento de infromación.pdf"> Política de tratamiento de datos</p>
        </div>
    </div>
</footer>