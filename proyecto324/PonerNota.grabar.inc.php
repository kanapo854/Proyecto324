<?php
include "conexion.inc.php";

$nota=$_GET["txt_nota"];
$id_p=$_GET["id_est"];
$id_m=$_GET["id_mat"];

$sql = "UPDATE inscripcion SET nota=$nota WHERE id_persona=$id_p and id_materia=$id_m;";
$resultado=mysqli_query($con, $sql);
?>