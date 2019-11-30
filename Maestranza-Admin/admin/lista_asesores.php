<?php $page = "Lista de Asesores";
require("seguridad.php");
require_once("conexion.php");
include 'layout/layout.php';
$id_inmobiliria = 12;
$con = Conect();
$qry = "select * from asesores where id_inmobiliaria = '$id_inmobiliria' order by id DESC ";
$sql = mysqli_query($con, $qry);

?>
<style>
  .fondo_color{
    background-color: white;
  }

</style>
<div class="container fondo_color">
  <!-- Modal -->

  <div class="row justify-content-center">
    <div class="col-10" style=" margin-top: 27px;">
      <h2 class="text-center">Lista de Asesores</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($res =  mysqli_fetch_array($sql)) {
            echo '<tr>
                                <td>' . $res["id"] . '</td>
                                <td>' . $res["nombre"] . '</td>
                                <td><a href="actualizarasesor.php?id=' . $res["id"] . '"><i style="color: #B58D10;" class="fas fa-edit"></i></a></td>
                                <td><a type=""  data-toggle="modal" data-target="#exampleModal" "><i style="color: #B58D10;"class="fas fa-trash-alt"></i></a></td>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                    </button>
                             </div>
                          <div class="modal-body">
                            ¿Estas seguro de que quieres eliminar el Asesor?
                           </div>
                     <div class="modal-footer">
                        <a type="button"style="color:white;" class="btn btn-secondary " data-dismiss="modal">Cancelar</a>
                         <a type="button" class="btn btn-danger" href="eliminar_asesor.php?id=' . $res['id'] . '">Eliminar</a>
                     </div>
                 </div>
              </div>
             </div>
                            </tr>';
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


<?php include 'layout/layoutFooter.php'; ?>