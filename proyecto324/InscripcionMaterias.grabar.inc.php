<?php


session_start();
$usuario =$_SESSION["usuario"];

$sqlPer = "SELECT ci FROM persona WHERE usuario='$usuario';";
$resultado=mysqli_query($con, $sqlPer);
$fila=mysqli_fetch_array($resultado);

include "conexion.inc.php";
$mat1=$_GET["txt_materia1"];
$mat2=$_GET["txt_materia2"];
$mat3=$_GET["txt_materia3"];
$mat4=$_GET["txt_materia4"];
$mat5=$_GET["txt_materia5"];
$mat6=$_GET["txt_materia6"];
$id_persona=$fila["ci"];
$aleatorio = mt_rand(10000, 99999);

if($mat1==""){
    $mat1=0;
}
if($mat2==""){
    $mat2=0;
}
if($mat3==""){
    $mat3=0;
}
if($mat4==""){
    $mat4=0;
}
if($mat5==""){
    $mat5=0;
}
if($mat6==""){
    $mat6=0;
}

$sql1 = "INSERT INTO inscripcion VALUES ($aleatorio,$id_persona,$mat1,0)";
$sql2 = "INSERT INTO inscripcion VALUES ($aleatorio,$id_persona,$mat2,0)";
$sql3 = "INSERT INTO inscripcion VALUES ($aleatorio,$id_persona,$mat3,0)";
$sql4 = "INSERT INTO inscripcion VALUES ($aleatorio,$id_persona,$mat4,0)";
$sql5 = "INSERT INTO inscripcion VALUES ($aleatorio,$id_persona,$mat5,0)";
$sql6 = "INSERT INTO inscripcion VALUES ($aleatorio,$id_persona,$mat6,0)";
$resultado=mysqli_query($con, $sql1);
$resultado=mysqli_query($con, $sql2);
$resultado=mysqli_query($con, $sql3);
$resultado=mysqli_query($con, $sql4);
$resultado=mysqli_query($con, $sql5);
$resultado=mysqli_query($con, $sql6);

?>