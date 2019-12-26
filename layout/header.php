<div class="container col-12 ">
    <nav class="navbar navbar-light ">
        <div class="col-5">
            <a href="index.php" class="navbar-brand contenedor_imagen"> <img class="logo" src="images/Maestranza_logo2 .png" width="100" height="100" alt=""> </a>
        </div>
        <div class="col-5 margen_top d-none d-md-block">
            <form class="form-inline espacio_contacto">
                <a class="color_a_nav" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><i class="fas fa-phone mr-2"></i><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?>&nbsp&nbsp</a>
                <a class="color_a_nav mr-3" href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><i class="fas fa-mobile-alt mr-2"></i><?php echo $datos_contacto['celular']['imprimir'] ?></a>
                <button class="btn  my-2 my-sm-0 boton_dorado rounded-0" onclick=" location.href='contactanos.php' " type="button">Contáctanos</button>
            </form>
        </div>
    </nav>
</div>