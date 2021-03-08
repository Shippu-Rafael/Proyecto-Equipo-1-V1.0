<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Inicio de Sesión</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<body style="background-color: black ;>

<div class="container">
    <p></p>
    <img src="imagen/logoe.png" alt="boy" class="w3-image" width="100" height="100">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

        <div class="panel panel-info" >

            <div class="panel-heading">

                <div class="panel-title">Acceder</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">¿Olvido su contraseña?</a></div>

            </div>



            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form id="loginform" class="form-horizontal" role="form" method="post" action="loginValidar.php">


                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="usuario" value="" placeholder="Correo electrónico">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Password">
                    </div>



                    <div class="input-group">
                        <div class="checkbox">
                            <label>
                                <input id="login-remember" type="checkbox" name="remember" value="1"> Recordarme

                            </label>

                        </div>

                    </div>




                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">
                            <button id="btn-signup" type="submit" class="btn btn-info" name="usuarioVerificar"><i class="icon-hand-right"></i> &nbsp Acceder</button>


                        </div>

                    </div>


                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >

                                <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                    Crear una cuenta
                                </a>
                            </div>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>
    <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Registrarse</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Acceder</a></div>
            </div>

            <div class="panel-body" >
                <form id="signupform" class="form-horizontal" role="form" action="aplicarM.php" method="post">

                    <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                    </div>



                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Nombre de Usuario:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nombreUsuario" placeholder="Nombre de Usuario">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Usuario:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="usuario" placeholder="Usuario">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-md-3 control-label">Contraseña:</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Privilegios:</label>
                        <div class="col-md-9">
                            <select type="text" class="form-control" id="privilegios" name="privilegios" required>
                            <option value="Gerente">Gerente</option>
                            <option value="Chofer">Chofer</option>
                            <option value="Encargado">Encargado</option>
                            <option value="Administración">Administración</option>
                            <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Fecha:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="fechaU" placeholder="Fecha">
                        </div>
                    </div>

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-md-offset-3 col-md-9">
                            <button id="btn-signup" type="submit" class="btn btn-info" name="usuarioAlta"><i class="icon-hand-right"></i> &nbsp Registrarse</button>
                        </div>

                    </div>

                    <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">




                    </div>



                </form>
            </div>
        </div>




    </div>
    <div style="width: 1px; height: 1px; border: 1px black solid;" ></div>

</div>
</body>
</html>

