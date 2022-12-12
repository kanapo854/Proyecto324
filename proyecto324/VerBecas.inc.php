Prepara Documentos
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="js/jquery-1.12.4-jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<body style="background: rgb(214,206,206);
background: radial-gradient(circle, rgba(214,206,206,1) 0%, rgba(69,69,69,1) 100%);">
    <div class="wrapper">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <center>
                                <h1>Requisitos para inscripcion<h1>
                            </center>
                        </div>
                        <?php
                        include "conexion.inc.php";
                        session_start();
                        $usuario = $_SESSION["usuario"];
                        $sql = "select * from beca";
                        //and fechafin is null
                        $resultado = mysqli_query($con, $sql);
                        ?>

                        <center>
                            <h1>Becas Disponibles</h1>
                            <hr>
                        </center>

                        <?php
                        while ($fila = mysqli_fetch_array($resultado)) {
                        ?>
                            <center>
                                <h2>Programa<?php echo $fila["nombre_beca"] ?></h2>
                                <h2>Monto: <?php echo $fila["monto"] ?></h2>
                                <hr>
                            </center>
                        <?php
                        }
                        ?>
                        <Center>
                            <hr>
                            <h3>Requisitos</h3>
                            <hr>
                        </Center>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <center>
                                    <h4>1.- Nombres.</h4><br>
                                    <h4>2.- Apellidos.</h4><br>
                                    <h4>3.- Cedula de Identidad solo numeros.</h4><br>
                                    <h4>4.- Numero de Celular.</h4><br>
                                    <h4>5.- Seleccionar Beca a elegir.</h4><br>
                                    <h4>Presione siguiente para continuar</h4><br>
                                </center>
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