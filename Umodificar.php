<?php
session_start();
//include '../sige/loginSecurity.php';
//if ($_SESSION['privilegios'] != 'Administrador' and $_SESSION['privilegios'] != 'Finanzas' and $_SESSION['privilegios'] != 'Dirección') {
//  header('location: index.php');
//}
?>
<head>
    <meta charset="UTF-8">
    <title>Modificar Monstruo</title>
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Valentín Camacho Veloz, Daniel Flores Rodriguez, Brian Valentín Franco, Nancy García Mesillas">
    <!--bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.css"><!-- Editado para el menu -->
    <!--jquery-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!--bootstrap-js-->
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body style="background-color: #A5DBB2 ;>
<?php

/* include 'barraMenu.php';
 $menu = new menu();
 $menu ->barraMenu();*/

include 'usuario.php';
$usuario = new usuario();
$usuario -> setIdUsuario($_GET['IdUsuario']);
$usuario -> Umodificar();


?>

<div class="container">
    <div class="page-header">
        <h3 style="text-align: center">Modificar Usuario...</h3>
    </div>
    <form class="form-horizontal" action="aplicarM.php" method="post" onsubmit="return confirm('¿Seguro que quieres guardar este formulario?');">
        <div class="form-group">
            <label class="control-label col-sm-3" for="IdUsuario">Id Usuario:</label>
            <div class="col-sm-1">
                <input type="text" class="form-control" id="IdUsuario" name="IdUsuario" value="<?php echo $usuario->getIdUsuario() ?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="nombreUsuario">Nombre:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" value="<?php echo $usuario->getNombreUsuario(); ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="usuario">Usuario:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $usuario->getUsuario(); ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="password">Contraseña:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="password" name="password" value="<?php echo $usuario->getPassword(); ?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="privilegios">Privilegios</label>
            <div class="col-sm-3">
                <select type="text" class="form-control" id="privilegios" name="privilegios" value="<?php echo $usuario->getPrivilegios(); ?>" required>
                    <option value="Gerente">Gerente</option>
                    <option value="Chofer">Chofer</option>
                    <option value="Encargado">Encargado</option>
                    <option value="Administración">Administración</option>
                    <option></option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="fechaU">Fecha:</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="fechaU" name="fechaU" value="<?php echo $usuario->getFechaU(); ?>" required>
            </div>
        </div>



        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" name="usuarioModificarGuardar">Guardar</button>
                <button type="submit" class="btn btn-danger" name="Ueliminar">Eliminar</button>

            </div>
        </div>
        <div class="form-group">

            <div class="col-sm-10">
                <div class="w3-third">
                    <center> <div class="w3-card w3-container" style="min-height:65px">



                                        <a href="Uconsulta.php">
                                            <img src="botones/registrar.png" alt="HTML tutorial" style="width:50px;height:50px;">
                                            <a href="vistasAlmacen.php">
                                                <img src="botones/inicio.png" alt="HTML tutorial" style="width:50px;height:50px;">
                                            </a>
                                        </a>
                        </div></center>
                </div>

        </div>
</div>
<div style="width: 1px; height: 1px; border: 1px black solid;" ></div>
</form>
</div>
</body>

</html>