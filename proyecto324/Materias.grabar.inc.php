<?php
session_start();
$usuario =$_SESSION["usuario"];
$sqlPer = "SELECT ci FROM persona  WHERE usuario='$usuario';";
$resultado=mysqli_query($con, $sqlPer);
$fila=mysqli_fetch_array($resultado);

include "conexion.inc.php";
$mat1=$_GET["txt_materia1"];

$sql="DELETE FROM inscripcion WHERE id_materia = $mat1";
$resultado=mysqli_query($con, $sql);
?>