<?php
include 'conexion.inc.php';
$usuario=$_GET["usuario"];
$fecha_fin = date("Y-m-d"); 
$sql="UPDATE flujoprocesoseguimiento set estado ='Retiro Realizado',FechaFin='$fecha_fin',Proceso='P1'
 where Usuario='$usuario' and Flujo='F2' ";
$resultado=mysqli_query($con, $sql);
?>