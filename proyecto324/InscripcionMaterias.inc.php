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
                                <h1>Registro de Materias<h1>
                            </center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h1> Estudiantes Aceptados y Rechazados.<h1>
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
                                                        <td>Sigla</td>
                                                        <td>Materia</td>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    include "conexion.inc.php";
                                                    session_start();
                                                    $usuario = $_SESSION["usuario"];
                                                    $sql = "select * from materia";
                                                    //and fechafin is null
                                                    $resultado = mysqli_query($con, $sql);

                                                    ?>
                                                    <?php
                                                    while ($fila = mysqli_fetch_array($resultado)) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $fila["idmateria"] ?></td>
                                                            <td><?php echo $fila["idsemestre"] ?></td>
                                                            <td><?php echo $fila["sigla"] ?></td>
                                                            <td><?php echo $fila["nombre_materia"] ?></td>
                                                            <!--<td><a href='flujo.php?flujo=<?php echo $fila["Flujo"] ?>&proceso=P8&rol=estudiante&usuario=<?php echo $fila["Usuario"] ?>'><button class="btn btn-success btn-block">Inscribirse</td>;-->
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
                                                <label class="col-sm-6 text-left">Materia 1</label>
                                                <input type="number" name="txt_materia1" id="txt_materia1" class="form-control" placeholder="Ingresar Nro de Materia" />
                                            </div>

                                            <div class="col-sm-6">
                                                <label class="col-sm-6 text-left">Materia 2</label>
                                                <input type="number" name="txt_materia2" id="txt_materia2" class="form-control" placeholder="Ingresar Nro de Materia" />
                                            </div>

                                            <div class="col-sm-6">
                                                <label class="col-sm-6 text-left">Materia 3</label>
                                                <input type="number" name="txt_materia3" id="txt_materia3" class="form-control" placeholder="Ingresar Nro de Materia" />
                                            </div>

                                            <div class="col-sm-6">
                                                <label class="col-sm-6 text-left">Materia 4</label>
                                                <input type="number" name="txt_materia4" id="txt_materia4" class="form-control" placeholder="Ingresar Nro de Materia" />
                                            </div>

                                            <div class="col-sm-6">
                                                <label class="col-sm-6 text-left">Materia 5</label>
                                                <input type="number" name="txt_materia5" id="txt_materia5" class="form-control" placeholder="Ingresar Nro de Materia" />
                                            </div>

                                            <div class="col-sm-6">
                                                <label class="col-sm-6 text-left">Materia 6</label>
                                                <input type="number" name="txt_materia6" id="txt_materia6" class="form-control" placeholder="Ingresar Nro de Materia" />
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