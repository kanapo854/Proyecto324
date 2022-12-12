<?php
   
    include "conexion.inc.php";
    $fecha_ini = date("Y-m-d"); 
    $usuario=$_GET["usuario"];
    if(isset($_GET["Si"])){
        $sql2="UPDATE flujoprocesoseguimiento set estado ='Aceptado',FechaInicio='$fecha_ini',Proceso='P7'
         where Usuario='$usuario' and Flujo='F1'"; 
        $resultado=mysqli_query($con, $sql2);
        //$fila=mysqli_fetch_array($resultado);
    }
    if(isset($_GET["No"])){
        $sql2="UPDATE flujoprocesoseguimiento set estado ='Rechazado',FechaInicio='$fecha_ini',Proceso='P1'
         where Usuario='$usuario' and Flujo='F1'";
        $resultado=mysqli_query($con, $sql2);
        //$fila=mysqli_fetch_array($resultado);
       /* $sql3="DELETE FROM basededatos.persona 
        where usuario='$usuario' "; 
       $res=mysqli_query($con, $sql3);*/
    }
?>