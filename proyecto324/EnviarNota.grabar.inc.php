<?php
include 'conexion.inc.php';
$usuario=$_GET["usuario"];
$fecha_ini = date("Y-m-d");
$sql="UPDATE flujoprocesoseguimiento set estado ='Notas Publicadas',FechaInicio='$fecha_ini',Proceso='P4',
FechaFin=null
 where Usuario='$usuario' and Flujo='F3' ";
$resultado=mysqli_query($con, $sql);

?>