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
                            <h1> Registro de Datos.<h1>
                        </div>
                        <!-- /.panel-heading -->
                        <form method="get" action="formulario.grabar.inc.php">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <div class="login-form">
                                        <div class="form-group">
                                            <label class="col-sm-6 text-left">Nombres(s)</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="txt_nombres" id="txt_nombres" class="form-control" placeholder="Ingrese Nombre" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-6 text-left">Apellido(s)</label>
                                            <div class="col-sm-12">
                                                <input type="text" id="txt_apellido" name="txt_apellido" class="form-control" placeholder="Ingrese su Apellido" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-6 text-left">CI</label>
                                            <div class="col-sm-12">
                                                <input type="number" id="txt_ci" name="txt_ci" class="form-control" placeholder="Ingrese CI" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-6 text-left">Celular</label>
                                            <div class="col-sm-12">
                                                <input type="number" id="txt_cel" name="txt_cel" class="form-control" placeholder="Ingrese Nro de Celular" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-6 text-left">Suba su boleta de pago de matricula</label>
                                            <div class="col-sm-12">
                                                <input type="File" id="txt_file" name="txt_file" class="form-control" placeholder="Ingrese su pago" />
                                            </div>
                                        </div>

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