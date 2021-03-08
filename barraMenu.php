<?php
class menu {
    function barraMenu() {
        ?>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">


                    </button>
                    <a class="navbar-brand" href="index.php">Inicio</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Inicio</a></li>


                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administración <span class="caret"></span></a>
                            <ul class="dropdown-menu">

                                <li><a href="altaMonstruo.php.php">Capturar Nuevo Mob</a></li>
                                <li role="separator" class="divider"></li>

                                <li><a href="Mconsulta.php.php">Consultar bestiario</a></li>


                                <?php







                                if ($_SESSION['privilegios'] == 'Administrador')
                                {


                                    echo '<li><a href="#">Opción</a></li>';
                                    echo '<li><a href="#">Opción</a></li>';


                                }


                                ?>

                                <?php


                                if ($_SESSION['privilegios'] == 'Administrador')
                                {
                                    ?>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Opción</a></li>
                                    <li><a href="#">Opción</a></li>
                                    <?php
                                }


                                ?>



                            </ul>
                        </li>



                        <?php



                        ?>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Almacén <span class="caret"></span></a>
                            <ul class="dropdown-menu">

                            </ul>
                        </li>
                        <?php

                        ?>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="loginCerrar.php">Cerrar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php
    }

}
