<?php
include 'conexion.inc.php';
$usuario=$_GET["usuario"];
$fecha_fin = date("Y-m-d"); 
$sql="UPDATE flujoprocesoseguimiento set estado ='Inscripcion Realizada',FechaFin='$fecha_fin',Proceso='P3'
 where Usuario='$usuario' and Flujo='F1' ";
$resultado=mysqli_query($con, $sql);
//$fila=mysqli_fetch_array($resultado, $resulttype=MYSQLI_BOTH);
//$fila=mysqli_fetch_array(mysqli_result $result, int $mode = MYSQLI_BOTH)
?>