<?php

?>

<title>Alta Productos</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>


<meta charset="UTF-8">
<title>Bestiario</title>
<link rel="shortcut icon" href="favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Equipo de Desarrollo BPEJ">
<!--bootstrap-->
<link rel="stylesheet" href="css/bootstrap.css"><!-- Editado para el menu -->
<!--jquery-->
<script src="js/jquery-3.2.1.min.js"></script>
<!--bootstrap-js-->
<script src="js/bootstrap.js"></script>
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</head>
<body style="background-color: #3D3D3A ;>



<?php /*
        include 'barraMenu.php';
        $menu = new menu();
        $menu ->barraMenu();

        include_once 'editorial.php';
        $editorial = new editorial();
 */
?>

<header class="w3-container w3-theme w3-padding" id="myHeader">

<div class="w3-center">
    <img class="w3-xxxlarge w3-animate-bottom" src="imagen/logoe.png"  width="100" height="100">
    <h4 class="w3-xxxlarge w3-animate-bottom" style="color: white">Agregar Producto...</h4>
    <h1 class="w3-xxxlarge w3-animate-bottom" style="color: white">Ingrese correctamente los datos del producto</h1>


    </div>
</div>
</header>

    <form class="form-horizontal" action="aplicarM.php" method="post" onsubmit="return confirm('¿Seguro que quieres guardar este formulario?');">

        <div class="form-group">
            <label class="control-label col-sm-3" for="nombre"style="color: white">Nombre del producto:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del producto a registrar" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3" for="categoria"style="color: white">Categoría</label>
            <div class="col-sm-3">
                <select type="text" class="form-control" id="categoria" name="categoria" required>
                    <option value="null">Elija una</option>
                    <option value="Cristalerias">Cristalerias</option>
                    <option value="Cocina">Utencilios de cocina</option>
                    <option value="Muebles">Muebles</option>
                    <option value="Decorativo">De diseño</option>
                    <option value="Desechable">Desechable o plasticos</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="cantidad"style="color: white">Cantidad del producto:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Ingrese la cantidad a registrar" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="descripcion"style="color: white">Descripcion del producto:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Describa el producto a registrar" required>

            </div>
            </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="fecha"style="color: white">Fecha en la que ingreso el producto:</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="fecha" name="fecha" placeholder="AAAA-MM-DD" required>
            </div>
        </div>




               /////////////

<div class="form-group">
    <div class="col-sm-offset-4 col-sm-10">
        <button type="submit" class="btn btn-primary" name="altaProducto">Guardar</button>
        <a href="index.php" class="btn btn-default">Regresar</a>
        <p></p>
        <div class="w3-third">
            <center> <div class="w3-card w2-container" style="min-height:20px">

                    <a href="Mconsulta.php">
                        <img src="botones/almacen.png" alt="HTML tutorial" style="width:50px;height:50px;">

                                            <a href="vistasAlmacen.php">
                                                <img src="botones/inicio.png" alt="HTML tutorial" style="width:50px;height:50px;">
                                            </a>
                </div></center>
        </div>
    
    </div>
</div>

<div style="width: 1px; height: 1px; border: 1px black solid;" ></div>

</div>
        </div>
    </form>
</div>
</body>
</html>
