<?php
 //session_start();
 //$usuario =$_SESSION["usuario"];
//include "conexion.inc.php";
//$ci=$_GET["txt_ci"];
//$nombres=$_GET["txt_nombres"];
//$apellido=$_GET["txt_apellido"];

//$sql = "INSERT INTO persona VALUES($ci,'$nombres','$apellido',$cel,'$ruta','$usuario')";
//$resultado=mysqli_query($con, $sql);

include 'conexion.inc.php';
$usuario=$_GET["usuario"];
$fecha_ini = date("Y-m-d");
$sql="UPDATE flujoprocesoseguimiento set estado ='Revision',FechaInicio='$fecha_ini',Proceso='P3',
FechaFin=null
 where Usuario='$usuario' and Flujo='F2' ";
$resultado=mysqli_query($con, $sql);
//$fila=mysqli_fetch_array($resultado, $resulttype=MYSQLI_BOTH);
//$fila=mysqli_fetch_array(mysqli_result $result, int $mode = MYSQLI_BOTH)

?>