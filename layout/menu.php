<!-- Codigo del preloader -->
<style>
    #wrap-preload {
        position: fixed;
        z-index: 10;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: #fff;
        opacity: 1;
        visibility: visible;
        transition: opacity .5s ease, visibility .5s ease;
        z-index: 1032;
    }

    #wrap-preload.close {
        opacity: 0;
        visibility: hidden;
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 10;
    }

    #wrap-preload>img.gif {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0);
        z-index: 1032;
        height: 15%;
    }
</style>
<div id="wrap-preload">
    <img src="images/preloader.gif" alt="gif" class="gif" id="gif">
</div>
<script>
    var loader = document.getElementById("wrap-preload");
    window.addEventListener("load", function() {
        loader.style.visibility = "hidden";
    });
</script>
<!-- Fin de codigo preloader -->


<!--Menu -->
<div class=" container yit-custom-nav-2 left-side-nav js-nav-active yit-custom-slide-left-nav">


    <a class="nav-toggle-bar" href="Javascript:void(0);">
        <div class="toggle-icon-wrap">
            <div class="toggle-icon"></div>
        </div>
    </a>

    <ul class="toogle-nav yit-listing-block sidenav">
        <li><a href="index.php">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Inicio</font>
                </font>
            </a></li>
        <li><a href="quienes_somos.php">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Quienes Somos</font>
                </font>
            </a></li>
        <li class="dropdown">
            <div class="dropbtn">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Nuestros servicios</font>
                </font>
            </div>
            <div class="dropdown-content">
                <a href="administracion.php">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Administración </font>
                    </font>
                </a>
                <a href="samyl.php">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Samyl</font>
                    </font>
                </a>
                <a href="corretaje.php">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Corretaje</font>
                    </font>
                </a>
                <a href="gerencia_comercial.php">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Gerencia Comercial</font>
                    </font>
                </a>
            </div>
        </li>
        <li><a href="inmuebles.php">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Propiedades</font>
                </font>
            </a></li>
        <li><a href="">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Proyectos</font>
                </font>
            </a></li>
        <li><a href="">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Transaccion en Linea</font>
                </font>
            </a></li>
        <li><a href="">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Consigna tu inmueble</font>
                </font>
            </a></li>
        <li><a href="contactanos.php">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Contáctanos</font>
                </font>
            </a></li>
    </ul>


    <div class="yit-social style-1 text-center cont_sociales">
        <ul>
            <li><a href="<?php echo $redes_sociales['facebook']['link'] ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="<?php echo $redes_sociales['instagram']['link'] ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="<?php echo $redes_sociales['twitter']['link'] ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="<?php echo $redes_sociales['linkedin']['link'] ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="<?php echo $redes_sociales['youtube']['link'] ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
            <li><a href="<?php echo $datos_contacto['whatsapp']['link'] ?>" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
        </ul>
    </div>
</div>