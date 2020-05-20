<?php require 'variables/variables.php';
require 'controllers/noticiasController.php';
$page = 'Infomativo inmobilario';
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

    <section id="blog">
        <?php include 'layout/header2.php' ?>
    </section>

    <section>
        <div class="container margen_blog">
            <div class="col-12 mt-4">
                <div class="row justify-content-center">
                    <?php if (isset($noticias_array)) {
                        modelo_noticia($noticias_array);
                    } else {
                        echo '<div class="col 12">
                        <h3 class="text-center">Muy pronto publicaremos contenido para ti<h3>
                        </div>';
                    }
                    ?>
                </div>
    </section>


    <section id="footer" class="fondo">
        <div class="overlay">
        </div>
        <?php include 'layout/footer.php' ?>
    </section>

</body>

<script>
    var pagina = 'blog'
</script>
<!-- jQuery -->
<script src="./menu/jquery.min.js.download"></script>

<!-- Bootstrap -->
<script src="./menu/bootstrap.js.download"></script>

<!-- from slider -->
<script src="./menu/menu.js.download"></script>
<?php include('layout/archivosfooter.php'); ?>

</html>