<div class="overlay">
</div>
<div class="container col-12">
    <nav class="navbar navbar-light conten_header">
        <div class="col-6">
            <a href="index.php" class="navbar-brand"> <img class="logo" src="images/Maestranza_Logo2 .png" width="100" height="100" alt=""> </a>
        </div>
        <form class="form-inline">
            <a class="color_a_nav" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><i class="fas fa-phone mr-2"></i><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?>&nbsp&nbsp</a>
            <a class="color_a_nav mr-3" href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><i class="fas fa-mobile-alt mr-2"></i><?php echo $datos_contacto['celular']['imprimir'] ?></a>
            <button class="btn  my-2 my-sm-0 boton_dorado rounded-0 boton" onclick=" location.href='contactanos.php' " type="button">Contáctenos</button>
        </form>
    </nav>
    <div class="col-12 text-center titulo">
        <h2 class="texto_tamaño_est">Servicios</h2>
    </div>
</div>