<?php
include 'conexion.inc.php';
$usuario=$_GET["usuario"];
$fecha_ini = date("Y-m-d");
$sql="UPDATE flujoprocesoseguimiento set estado ='Revision',FechaInicio='$fecha_ini',Proceso='P3',
FechaFin=null
 where Usuario='$usuario' and Flujo='F1' ";
$resultado=mysqli_query($con, $sql);

?>