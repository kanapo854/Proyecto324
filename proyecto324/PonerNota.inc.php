REGISTRANDO DATOS

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="js/jquery-1.12.4-jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Formulario Datos</title>

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



    <!--Cierra div login-->



    <div class="wrapper">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1>Registro de nota.<h1>
                        </div>
                        <?php
                        include "conexion.inc.php";
                        $sig=$_GET['materia'];
                        $user=$_GET['estudiante'];
                        $sql = "SELECT xm.sigla, xm.nombre_materia, xp.nombre, xi.nota, xi.id_persona, xi.id_materia FROM materia xm, inscripcion xi, persona xp WHERE sigla='$sig' and xi.id_materia=xm.idmateria and xp.ci=xi.id_persona and xp.usuario='$user'";
                        $resultado = mysqli_query($con, $sql);
                        $fila = mysqli_fetch_array($resultado);
                        ?>
                        <!-- /.panel-heading -->
                        <center>
                            <h1><?php echo $fila["sigla"] ?></h1>
                            <h2><?php echo $fila["nombre_materia"] ?></h2>
                        </center>
                        <form method="get" action="formulario.grabar.inc.php">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <div class="login-form">

                                        <div class="form-group">
                                            <label class="col-sm-12 text-left">Ingrese la nota del Estudiante:<?php echo $fila["nombre"] ?> </label>
                                            <div class="col-sm-12">
                                                <input type="number" value="<?php echo $fila["nota"] ?>" id="txt_nota" name="txt_nota" class="form-control" placeholder="Ingrese Nota" />
                                            </div>
                                        </div>
                                        <input id="id_mat" name="id_mat" type="hidden" value="<?php echo $fila["id_materia"] ?>">
                                        <input id="id_est" name="id_est" type="hidden" value="<?php echo $fila["id_persona"] ?>">
                                    </div>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </form>
                    </div>
                    <!-- /.panel -->
                </div>

            </div>

        </div>


</body>

</html>