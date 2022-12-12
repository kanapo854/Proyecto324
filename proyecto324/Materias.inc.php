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
                                <h1>Registro de Materias<h1>
                            </center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h1> Materias Inscritas.<h1>
                                                <a href="cerrar_sesion.php"><button class="btn btn-danger text-left"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar Sesion</button></a>
                                                <hr>
                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <td>Nro</td>
                                                        <td>Semestre</td>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    include "conexion.inc.php";
                                                    session_start();
                                                    $usuario = $_SESSION["usuario"];
                                                    $sql = "select xm.idmateria, xm.nombre_materia from inscripcion xs, materia xm where xs.id_materia = xm.idmateria";
                                                    //and fechafin is null
                                                    $resultado = mysqli_query($con, $sql);

                                                    ?>
                                                    <?php
                                                    while ($fila = mysqli_fetch_array($resultado)) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $fila["idmateria"] ?></td>
                                                            <td><?php echo $fila["nombre_materia"] ?></td>
                                                            <!--<td><a href='flujo.php?flujo=<?php echo $fila["Flujo"] ?>&proceso=P6&rol=estudiante&usuario=<?php echo $fila["Usuario"] ?>'><button class="btn btn-success btn-block">Inscribirse</td>;-->
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                        <h4>Ingresar los nro de las materias a las que desea inscribirse(Limite de 6)</h4>
                                        <div class="form-group">

                                            <div class="col-sm-6">
                                                <label class="col-sm-6 text-left">Materia Eliminar</label>
                                                <input type="number" name="txt_materia1" id="txt_materia1" class="form-control" placeholder="Ingresar Nro de Materia" />
                                            </div>



                                        </div>


                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

</body>