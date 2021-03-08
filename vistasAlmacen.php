
<!DOCTYPE html>
<html>
<title>Menú inicio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
    .w3-row-padding img {margin-bottom: 12px}
    /* Set the width of the sidebar to 120px */
    .w3-sidebar {width: 120px;background: #222;}
    /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
    #main {margin-left: 120px}
    /* Remove margins from "page content" on small screens */
    @media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
    <p></p>
    <img src="imagen/logoe.png" style="width:80%">
    <p></p>
    <a href="#inicio" class="w3-bar-item w3-button w3-padding-large w3-black">
        <i class="fa fa-home w3-xxlarge"></i>
        <p>Inicio</p>

    <a href="#catalogo" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-eye w3-xxlarge"></i>
        <p>Ver tipo de productos en nuestro almacén.</p>
    </a>
        <a href="#consultar" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-user w3-xxlarge"></i>
            <p>Consultar Opciones</p>
        </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
        <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
        <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
        <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
        <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
    </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
    <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center w3-black" id="inicio">
        <h1 class="w3-jumbo"><span class="w3-hide-small">Eventate,</span> Visualizar listados de almacenes y opciones de usuario</h1>
        <p>Producto / Servicio </p>
        <img src="imagen/logoe.png" alt="boy" class="w3-image" width="150" height="150">
        <h2 class="w3-text-light-grey">Bienvenido, en este menú podrás realizar múltiples acciones</h2>
        <hr style="width:200px" class="w3-opacity">

    </header>

    <!-- consultar eventos -->
    <header class="w3-container w3-padding-32 w3-center w3-black" id="catalogo">
        <h3 class="w3-padding-16 w3-text-light-grey">Consultar Productos por Tipo</h3>
        <p class="w3-wide">Opciones </p>

        <div class="w3-third">
            <div class="w3-card w3-container" style="min-height:460px">
                <h3>Cristalería</h3><br>

                <a href="Mconsulta1.php">
                    <img src="cristal/cristal.png" alt="HTML tutorial" style="width:200px;height:200px;">
                </a>
            </div>
        </div>
        <div class="w3-third">
            <div class="w3-card w3-container" style="min-height:460px">
                <h3>Cocina</h3><br>

                <a href="Mconsulta2.php">
                    <img src="cocina/coci.png" alt="HTML tutorial" style="width:220px;height:220px;">
                </a>
            </div>
        </div>
        <div class="w3-third">
            <div class="w3-card w3-container" style="min-height:460px">
                <h3>Decorativo</h3><br>

                <a href="Mconsulta3.php">
                    <img src="diseño/dise.png" alt="HTML tutorial" style="width:200px;height:200px;">
                </a>
            </div>
        </div>
        <div class="w3-third">
            <div class="w3-card w3-container" style="min-height:460px">
                <h3>Muebles</h3><br>

                <a href="Mconsulta4.php">
                    <img src="muebles/mueble.png" alt="HTML tutorial" style="width:200px;height:200px;">
                </a>
            </div>
        </div>
        <div class="w3-third">
            <div class="w3-card w3-container" style="min-height:460px">
                <h3>Desechable</h3><br>

                <a href="Mconsulta5.php">
                    <img src="desechable/desech.png" alt="HTML tutorial" style="width:200px;height:200px;">
                </a>
            </div>
        </div>
        <div class="w3-third">
            <div class="w3-card w3-container" style="min-height:460px">
                <h3>Visualizar todos los  productos</h3><br>

                <a href="Mconsulta.php">
                    <img src="botones/almacen.png" alt="HTML tutorial" style="width:200px;height:200px;">
                </a>
            </div>
        </div>


    </header>
    <header class="w3-container w3-padding-32 w3-center w3-black" id="consultar">

        <h1 class="w3-jumbo"><span class="w3-hide-small">...</span> Listado de opciones para el usuario</h1>
        <header class="w3-container w3-padding-32 w3-center w3-black" id="catalogo">
            <div class="w3-third">
                <div class="w3-card w3-container" style="min-height:460px">
                    <h4>Registar Producto de la empresa </h4><br>

                    <a href="altaProducto.php">
                        <img src="botones/agregar.png" alt="HTML tutorial" style="width:200px;height:200px;">
                    </a>
                </div>
            </div>
            <div class="w3-third">
                <div class="w3-card w3-container" style="min-height:460px">
                    <h4>Ver tabla de usuarios y privilegios en general.</h4><br>

                    <a href="Uconsulta.php">
                        <img src="botones/usuario.png" alt="HTML tutorial" style="width:200px;height:200px;">
                    </a>
                </div>
            </div>
            <div class="w3-third">
                <div class="w3-card w3-container" style="min-height:460px">
                    <h4>Cerrar la sesión //<h6>Ingresar con otro usuario o registrarse</h6></h4><br>

                    <a href="index.php">
                        <img src="botones/cerrar.png" alt="HTML tutorial" style="width:120px;height:120px;">
                        <a href="login.php">
                            <img src="botones/login.png" alt="HTML tutorial" style="width:120px;height:120px;">
                    </a>
                </div>
            </div>




</div>

</body>
</html>
