<?php
  if(isset($_GET["No"])){
    $sql2="UPDATE flujoprocesoseguimiento set estado ='Rechazado',FechaFin='$fecha_fin',Proceso='P1'
     where Usuario='$usuario'
     and Flujo='F2' ";
    $resultado=mysqli_query($con, $sql2);
    $fila=mysqli_fetch_array($resultado);
}
?>