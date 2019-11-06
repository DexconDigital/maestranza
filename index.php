<?php require 'variables/variables.php';
$page = 'Inicio';
$nombre_inmobiliaria = 'Maestranza' ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/archivosheader.php'; ?>
    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria; ?></title>
</head>
<style>
    ul.horizontal {
        margin: 0;
        padding: 0;
    }

    ul.horizontal li {
        display: block;
        float: left;
        padding: 0 10px;
    }
</style>

<body>
    <div id="contenedor" class="container-fluid body">

        <section>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Partners</a></li>
                <li><a href="#">Contacts</a></li>
            </ul>
        </section>

    </div>
    <script>
        var pagina = 'inicio'
    </script>

    <?php include('layout/archivosfooter.php'); ?>


</body>

</html>