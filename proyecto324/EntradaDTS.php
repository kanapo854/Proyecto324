<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
    <title>DTS</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="js/jquery-1.12.4-jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css">
        .login-form {
            width: 340px;
            margin: 20px auto;
        }

        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .login-form h2 {
            margin: 0 0 15px;
        }

        .form-control,
        .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .btn {
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>

<body style="background: rgb(214,206,206);
background: radial-gradient(circle, rgba(214,206,206,1) 0%, rgba(69,69,69,1) 100%);">


    <div class="wrapper">

        <div class="container">

            <div class="col-lg-12">

                <center>
                    <h1>DIVISION DE TRABAJO SOCIAL</h1>
                </center>
                <hr>
            </div>

            <br><br><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1> Postulantes.<h1>
                                    <a href="cerrar_sesion.php"><button class="btn btn-danger text-left"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar Sesion</button></a>
                                    <hr>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <td>CI</td>
                                            <td>Nombre</td>
                                            <td>Apellido</td>
                                            <td>Usuario</td>
                                            <td>fecha inicial</td>
                                            <td>fecha final</td>
                                            <td>Resultado</td>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include "conexion.inc.php";
                                        session_start();
                                        $usuario = $_SESSION["usuario"];
                                        $sql = "select * from postulante xp,flujoprocesoseguimiento xf where xp.usuario=xf.Usuario and Flujo='F4' order by xp.apellido;";
                                        //and fechafin is null
                                        $resultado = mysqli_query($con, $sql);

                                        ?>
                                        <?php
                                        while ($fila = mysqli_fetch_array($resultado)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $fila["ci"] ?></td>
                                                <td><?php echo $fila["nombre"] ?></td>
                                                <td><?php echo $fila["apellido"] ?></td>
                                                <td><?php echo $fila["Usuario"] ?></td>
                                                <td><?php echo $fila["FechaInicio"] ?></td>
                                                <td><?php echo $fila["FechaFin"] ?></td>
                                                <td><?php echo $fila["estado"] ?></td>
                                                <td><a href='flujo.php?flujo=<?php echo $fila["Flujo"] ?>&proceso=P4&rol=DTS&estudiante=<?php echo $fila["Usuario"] ?>'><button class="btn btn-success btn-block">Revisar</td>;
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                    
                                </table>

                                
                            </div>
                            <!-- /.table-responsive -->
                        </div>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->


                </div>

            </div>

        </div>

        

</body>

</html>