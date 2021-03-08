<?php
session_start();
//include '../sige/loginSecurity.php';
//if ($_SESSION['privilegios'] != 'Administrador' and $_SESSION['privilegios'] != 'Finanzas' and $_SESSION['privilegios'] != 'Dirección') {
  //  header('location: index.php');
//}
?>
<html lang="es">
<head>
    <meta charset="UTF-8"Producto</title>
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
<body style="background-color: #ccffff ;>

<?php

       /* include 'barraMenu.php';
        $menu = new menu();
        $menu ->barraMenu();*/

                include 'producto.php';
                    $producto = new producto();
                    $producto -> setId($_GET['id']);
                    $producto -> Mmodificar();


                    ?>

<div class="container">
    <div class="page-header">
        <h3 style="text-align: center">Modificar Producto</h3>
    </div>
    <form class="form-horizontal" action="aplicarM.php" method="post" onsubmit="return confirm('¿Seguro que quieres guardar este formulario?');">
        <div class="form-group">
            <label class="control-label col-sm-3" for="id">Id Producto:</label>
            <div class="col-sm-1">
                <input type="text" class="form-control" id="id" name="id" value="<?php echo $producto->getId() ?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="nombre">Nombre:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $producto->getNombre(); ?>" required>
            </div>
        </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="categoria">Categoría</label>
                <div class="col-sm-3">
                    <select type="text" class="form-control" id="categoria" name="categoria" value="<?php echo $producto->getCategoria(); ?>" required>
                        <option value="null">Elija uno</option>
                        <option value="Cristalerias">Cristalerias</option>
                        <option value="Cocina">Utencilios de cocina</option>
                        <option value="Muebles">Muebles</option>
                        <option value="Decorativo">De diseño</option>
                        <option value="Desechable">Desechable o plásticos</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="cantidad">Cantidad del producto:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="cantidad" name="cantidad" value="<?php echo $producto->getCantidad(); ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="descripcion">Descripción del producto:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $producto->getDescripcion(); ?>" required>

                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="fecha">Fecha en la que ingreso el producto:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="fecha" name="fecha" value="<?php echo $producto->getFecha(); ?>" required>
                </div>
            </div>







            <div class="form-group">
            <div class="col-sm-offset-3 col-sm-10">
                <button type="submit" class="btn btn-primary" name="productoModificarGuardar">Guardar</button>
                <button type="submit" class="btn btn-danger" name="Meliminar">Eliminar</button>
            </div>
                <div class="w3-third">
                    <center> <div class="w3-card w3-container" style="min-height:65px">

                            <a href="Mconsulta.php">
                                <img src="botones/almacen.png" alt="HTML tutorial" style="width:50px;height:50px;">
                                <a href="Mconsulta1.php">
                                    <img src="cristal/cristal.png" alt="HTML tutorial" style="width:50px;height:50px;">
                                <a href="Mconsulta2.php">
                                    <img src="cocina/coci.png" alt="HTML tutorial" style="width:50px;height:50px;">
                                    <a href="Mconsulta3.php">
                                        <img src="diseño/dise.png" alt="HTML tutorial" style="width:50px;height:50px;">
                                        <a href="Mconsulta4.php">
                                            <img src="muebles/mueble.png" alt="HTML tutorial" style="width:50px;height:50px;">
                                            <a href="Mconsulta5.php">
                                                <img src="desechable/desech.png" alt="HTML tutorial" style="width:50px;height:50px;">
                                                <a href="vistasAlmacen.php">
                                                    <img src="botones/inicio.png" alt="HTML tutorial" style="width:50px;height:50px;">
                                                </a>
                        </div></center>
                </div>
        </div>
<div class="form-group">


    </div>
</div>
<div style="width: 1px; height: 1px; border: 1px black solid;" ></div>
    </form>
</div>
</body>

</html>