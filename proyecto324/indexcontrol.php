<?php
$usuario=$_GET["usuario"];
$passsword=$_GET["password"];
include "conexion.inc.php";
$sql = "SELECT * from flujoprocesoseguimiento xf,flujoproceso xff 
		where xf.Usuario ='$usuario' 
		and xf.contra='$passsword' and
		xff.Proceso = xf.Proceso and xff.Flujo=xf.Flujo" ;
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);
echo $fila['Rol'];
if ($fila['Rol']=='estudiante')
{
	session_start();
	$_SESSION["usuario"]=$usuario;
	$_SESSION["rol"]='estudiante';
	header("Location: EntradaEstudiante.php");
	exit;
}
if ($fila['Rol']=='Kardex')
{
	session_start();
	$_SESSION["usuario"]=$usuario;
	$_SESSION["rol"]='kardex';
	header("Location: EntradaKardex.php");
	exit;
}
if ($fila['Rol']=='DTS')
{
	session_start();
	$_SESSION["usuario"]=$usuario;
	$_SESSION["rol"]='DTS';
	header("Location: EntradaDTS.php");
	exit;
}
if ($fila['Rol']=='docente')
{
	session_start();
	$_SESSION["usuario"]=$usuario;
	$_SESSION["rol"]='DTS';
	header("Location: EntradaDocente.php");
	exit;
}
$rol = $fila['Rol'];
header("Location: index.php?rol=$rol");
?>
