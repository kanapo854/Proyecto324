<?php
   
    include "conexion.inc.php";
    $fecha_fin= date("Y-m-d"); 
    $usuario=$_GET["usuario"];
    if(isset($_GET["Si"])){
        $sql2="UPDATE flujoprocesoseguimiento set estado ='Becado Aceptado',FechaFin='$fecha_fin',Proceso='P6'
         where Usuario='$usuario' and Flujo='F4'"; 
        $resultado=mysqli_query($con, $sql2);
        //$fila=mysqli_fetch_array($resultado);
    }
    if(isset($_GET["No"])){
        $sql2="UPDATE flujoprocesoseguimiento set estado ='Rechazado',FechaFin='$fecha_fin',Proceso='P5'
         where Usuario='$usuario' and Flujo='F4'";
        $resultado=mysqli_query($con, $sql2);
        //$fila=mysqli_fetch_array($resultado);
       /* $sql3="DELETE FROM basededatos.persona 
        where usuario='$usuario' "; 
       $res=mysqli_query($con, $sql3);*/
    }
?>