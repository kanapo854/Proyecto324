<?php
 $directorio ="documentos/";
 $aleatorio = mt_rand(100, 999);
 $ruta = "imagenes/".$aleatorio.".png";
 session_start();
 $usuario =$_SESSION["usuario"];
 
$nombre=$_FILES['txt_file']['name'];
 
$guardado=$_FILES['txt_file']['tmp_name'];

if(!file_exists($directorio )){
	mkdir($directorio ,0777,true);
	if(file_exists($directorio )){
 
		if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
			echo "Archivo guardado con exito";
		}else{
			echo "Archivo no se pudo guardar";
		}
	}
}else{
		if(move_uploaded_file($guardado, $directorio.$aleatorio.".png")){
		echo "Archivo guardado con exito";
 
	}elseif(move_uploaded_file($guardado, $directorio.$aleatorio.".pdf")){
		echo "Archivo guardado con exito";
	}else{
		echo "Archivo no se pudo guardar";
	}
 
	var_dump($ruta);
 
}
include "conexion.inc.php";
$ci=$_GET["txt_ci"];
$nombres=$_GET["txt_nombres"];
$apellido=$_GET["txt_apellido"];
$cel = $_GET["txt_cel"];

$sql = "INSERT INTO persona VALUES($ci,'$nombres','$apellido',$cel,'$ruta','$usuario')";
$resultado=mysqli_query($con, $sql);

 
 
?>