<!DOCTYPE html>
<?php
/*include 'loginSecurity.php';
*/
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Movimientos</title>
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.css"><!-- Editado para el menu -->
    <!--jquery-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!--bootstrap-js-->
    <script src="js/bootstrap.min.js"></script>

</head>
<body>
<?php
/*include 'barraMenu.php';
$menu = new menu();
$menu ->barraMenu();*/
date_default_timezone_set("America/Mexico_City");

if(isset($_POST['altaProducto']))//Valida si se envía el formulario
{
    print_r($_POST);

    include 'producto.php';
    $producto = new producto();

    $producto ->setNombre($_POST['nombre']);
    $producto ->setCategoria($_POST['categoria']);
    $producto ->setCantidad($_POST['cantidad']);
    $producto ->setDescripcion($_POST['descripcion']);
    $producto ->setFecha($_POST['fecha']);

    $producto ->altaProducto();
    ?>

    <div class="container">
        <br>
        <center><a href="altaProducto.php" class="btn btn-default">Crear nuevo Registro</a>

    </div>
    <div class="container">
        <br>
        <center><a href="vistasAlmacen.php" class="btn btn-default">Consultar opciones</a>
            <a href="index.php" class="btn btn-default">Salir</a></center>
    </div>

    <?php
}
elseif (isset($_POST['productoModificarGuardar']))//Valida si se envía el formulario
{

    include 'producto.php';
    $producto = new producto();
    $producto ->setId($_POST['id']);
    $producto ->setNombre($_POST['nombre']);
    $producto ->setCategoria($_POST['categoria']);
    $producto ->setCantidad($_POST['cantidad']);
    $producto ->setDescripcion($_POST['descripcion']);
    $producto ->setFecha($_POST['fecha']);
    $producto ->productoModificarGuardar();


    ?>
    <div class="container">
        <br>
        <p><i class="far fa-check-circle"></i></p>
        <h3 align="center">El registro se guardo exitosamente</h3>
        <center><a href="Mconsulta.php?m=M" class="btn btn-default">Regresar</a>
            <a href="index.php" class="btn btn-default">Salir</a></center>
    </div>
    <?php
}
elseif (isset($_POST['Meliminar']))//Valida si se envía el formulario
{

    include 'producto.php';
    $producto = new producto();
    $producto ->setId($_POST['id']);
    $producto ->setNombre($_POST['nombre']);
    $producto ->setCategoria($_POST['categoria']);
    $producto ->setCantidad($_POST['cantidad']);
    $producto ->setDescripcion($_POST['descripcion']);
    $producto ->setFecha($_POST['fecha']);
    $producto->MEliminar();


    ?>
    <div class="container">
        <h2>Producto Eliminado Con Éxito</h2>
        <br>
        <center><a href="Mconsulta.php?m=M" class="btn btn-primary">Regresar</a>
            <a href="index.php" class="btn btn-default">Salir</a></center>
    </div>
    <?php
}
elseif (isset($_POST['usuarioAlta']))//Valida si se envía el formulario
{

    include_once 'usuario.php';
    $usuario = new usuario();
    $usuario->setNombreUsuario($_POST['nombreUsuario']);
    $usuario->setUsuario($_POST['usuario']);
    $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $usuario->setPassword($hashed_password);
    $usuario->setPrivilegios($_POST['privilegios']);
    $usuario->setFechaU($_POST['fechaU']);
    $usuario->usuarioAlta();


    ?>
    <div class="container">
        <script>alert("Cuenta Registrada Con Éxito")</script>;
        <br>
        <center><a href="index.php?m=M" class="btn btn-primary">Menu Principal</a>
        </center>
    </div>
    <?php
}
elseif (isset($_POST['usuarioModificarGuardar']))//Valida si se envía el formulario
{

    include 'usuario.php';
    $usuario = new usuario();
    $usuario ->setIdUsuario($_POST['IdUsuario']);
    $usuario ->setNombreUsuario($_POST['nombreUsuario']);
    $usuario ->setUsuario($_POST['usuario']);
    $usuario ->setPassword($_POST['password']);
    $usuario ->setPrivilegios($_POST['privilegios']);
    $usuario ->setFechaU($_POST['fechaU']);

    $usuario ->usuarioModificarGuardar();


    ?>
    <div class="container">
        <br>

        <h3 align="center">El registro se guardo exitosamente</h3>
        <center><a href="Uconsulta.php?m=M" class="btn btn-default">Regresar</a>
            <a href="index.php" class="btn btn-default">Salir</a></center>
    </div>
    <?php
}
elseif (isset($_POST['Ueliminar']))//Valida si se envía el formulario
{

    include 'usuario.php';
    $usuario = new usuario();
    $usuario ->setIdUsuario($_POST['IdUsuario']);
    $usuario ->setNombreUsuario($_POST['nombreUsuario']);
    $usuario ->setUsuario($_POST['usuario']);
    $usuario ->setPassword($_POST['password']);
    $usuario ->setPrivilegios($_POST['privilegios']);
    $usuario ->setFechaU($_POST['fechaU']);
    $usuario->Ueliminar();


    ?>
    <div class="container">
        <h2>Usuario Eliminado Con Éxito</h2>
        <br>
        <center><a href="Uconsulta.php?m=M" class="btn btn-primary">Regresar</a>
            <a href="index.php" class="btn btn-default">Salir</a></center>
    </div>
    <?php
}
?>
</body>
</html>
