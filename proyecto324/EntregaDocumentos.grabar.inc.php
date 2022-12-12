<?php

session_start();
$usuario =$_SESSION["usuario"];
include "conexion.inc.php";
$ci=$_GET["txt_ci"];
$nombres=$_GET["txt_nombres"];
$apellido=$_GET["txt_apellido"];
$cel = $_GET["txt_cel"];
$idBeca = $_GET["txt_beca"];

$sql = "INSERT INTO `postulante` VALUES($ci,'$nombres','$apellido',$cel,'$usuario')";
$resultado=mysqli_query($con, $sql);

$sql1 = "INSERT INTO `postula` VALUES($ci, $idBeca)";
$resultado=mysqli_query($con, $sql1);
?>