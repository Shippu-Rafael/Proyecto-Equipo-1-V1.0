<!DOCTYPE html>
<?php

include_once 'producto.php';
$producto = new producto();

?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta Productos</title>
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Equipo de Desarrollo BPEJ">
    <!--bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.css"><!-- Editado para el menu -->
    <!--jquery-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!--bootstrap-js-->
    <script src="js/bootstrap.min.js"></script>
    <!--Datatables-->
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css"/><!-- Editado y menu -->
    <script type="text/javascript" src="js/jquery.dataTables.js"></script><!-- Editado -->
    <!--Datatables responsive-->
    <link rel="stylesheet" type="text/css" href="css/responsive.dataTables.min.css"/>
    <script type="text/javascript" src="js/dataTables.responsive.min.js"></script>
    <!--Datatables Buttons-->
    <link rel="stylesheet" type="text/css" href="css/buttons.dataTables.css"/><!-- Editado y menu -->
    <script type="text/javascript" src="js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="js/pdfmake.min.js"></script><!--Imprimir PDF-->
    <script type="text/javascript" src="js/vfs_fonts.js"></script><!-- Imprimir PDF-->
    <script type="text/javascript" src="js/jszip.min.js"></script><!--Imprimir Excel-->
    <script type="text/javascript" src="js/buttons.print.min.js"></script><!--Imprimir pantalla-->
    <script>
        var arregloDT = <?php echo json_encode($producto->Mconsulta()); ?>;
        $(document).ready(function(){
            var t = 'Listado de Cuentas';
            $('#dtPlantilla').DataTable( {
                "data": arregloDT,
                "order": [[ 0, "asc" ]],
                responsive: true,
                dom: '<"col-sm-5"l><"col-sm-3"B><"col-sm-4"f>rtip',
                //                    dom: es el orden de las funciones de la tabla
                //                    l: es la lista de numero de registros que se muestran
                //                    B: son los botones para imprimir
                //                    f: es el filtro de busqueda
                //                    rt: son los registros de la tabla
                //                    i: es la informaci??n de registros
                //                    p: es la barra de paginaci??n
                buttons: [
                    {
                        extend: 'print',
                        title: t
                    },
                    {
                        extend: 'pdf',
                        title: t
                    },

                    {
                        extend: 'excel',
                        title: t
                    }
                ]
            });
        });
    </script>
</head>
<body style="background-color: DodgerBlue ;>


<?php
/*
    include 'barraMenu.php';
    $menu = new menu();
    $menu ->barraMenu();
    */
?>

<div class="container-fluid">
    <div class="page-header">
        <h1 style="text-align: center"><p  style="background-color: white">Listado de Productos en general</p ></h1>



    </div>
    <!--tabla de consulta-->
    <div id="respuestaFiltro">
        <table id="dtPlantilla" class="display" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th style="color: white">id del producto</th>
                <th style="color: white">Nombre</th>
                <th style="color: white">Categor??a</th>
                <th style="color: white">Cantidad</th>
                <th style="color: white">Descripci??n </th>
                <th style="color: white">Fecha de entrada </th>

                <th style="color: white">Acciones</th>



            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <!--tabla de consulta-->


<div class="w3-third">
   <center> <div class="w3-card w3-container" style="min-height:65px">

            <a href="Mconsulta1.php">
                <img src="cristal/cristal.png" alt="HTML tutorial" style="width:50px;height:50px;">
                <a href="Mconsulta2.php">
                    <img src="cocina/coci.png" alt="HTML tutorial" style="width:50px;height:50px;">
                    <a href="Mconsulta3.php">
                        <img src="dise??o/dise.png" alt="HTML tutorial" style="width:50px;height:50px;">
                        <a href="Mconsulta4.php">
                            <img src="muebles/mueble.png" alt="HTML tutorial" style="width:50px;height:50px;">
                            <a href="Mconsulta5.php">
                                <img src="desechable/desech.png" alt="HTML tutorial" style="width:50px;height:50px;">
                                <a href="vistasAlmacen.php">
                                    <img src="botones/inicio.png" alt="HTML tutorial" style="width:50px;height:50px;">
                            </a>
       </div></center>
</div>



<div style="width: 1px; height: 1px; border: 1px black solid;" ></div>
<br>
</body>
</html>
