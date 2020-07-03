<?php
require_once ('conexion.php');
$id=$_REQUEST["id"];
$nombre_proyect=$_REQUEST["nombre_proyect"];
$url_proyect=$_REQUEST["url_proyect"];
$foto=$_FILES["img_proyect"]["name"];
$ruta=$_FILES["img_proyect"]["tmp_name"];
$nombre_foto = str_replace(" ","",$foto);
$destino="fotos/".$nombre_foto;
$comparador_fotos="fotos/";

// No actualizar imagenes
if($destino == $comparador_fotos){
    $con1 = Conect();
     $qry1="SELECT * FROM image_proyect where id ='$id'";
            $sql1=mysqli_query($con1,$qry1);
            $res=  mysqli_fetch_array($sql1) ;
            $destino = $res[2];

    $con = Conect();
    $qry=("update image_proyect set  url_proyect='$url_proyect', nombre_proyect='$nombre_proyect' where id='$id'");
    $sql=mysqli_query($con,$qry);
        if(!$sql){
    }else{
        header("Location: lista-proyect.php");
    }
    
// actualizar fotos 
}
if($destino != $comparador_fotos){
    copy($ruta,$destino);
    $con = Conect();
    $qry=("update image_proyect set img_proyect='$destino' where id='$id '");
    $sql=mysqli_query($con,$qry);  

    if(!$sql){
        echo 'No se logro actualizar';
    }else{
        header("Location: lista-proyect.php");
    }
}

